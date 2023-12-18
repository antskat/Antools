import { createRequire } from "module";
import express from "express";
import jwt from "jsonwebtoken";
import bcrypt from "bcrypt";
import mongoose from "mongoose";
import { validationResult } from "express-validator";
import path from "path";
import { fileURLToPath } from "url";
import { registerValidation } from "./validations/reg.js";
import userModel from "./models/User.js";

const require = createRequire(import.meta.url);
const __filename = new URL(import.meta.url).pathname;
const __dirname = path.dirname(fileURLToPath(import.meta.url));

const uri =
  "mongodb+srv://admin:roottoor@antools.enxdala.mongodb.net/antools?retryWrites=true&w=majority";

mongoose
  .connect(uri)
  .then(() => {
    console.log("DB ok");
  })
  .catch((err) => {
    console.log("DB error", err);
  });

const app = express();
app.use("/css", express.static(path.join(__dirname, "css")));
app.use("/images", express.static(path.join(__dirname, "images")));
app.use("/js", express.static(path.join(__dirname, "js")));

app.use(express.json());

// Если index.html находится в корне проекта
const indexPath = path.join(__dirname, "index.html");

app.get("/", (req, res) => {
  res.sendFile(indexPath); // Отправка файла index.html
});

app.post("/reg", registerValidation, async (req, res) => {
  try {
    const errors = validationResult(req);
    if (!errors.isEmpty()) {
      return res.status(400).json(errors.array());
    }

    const password = req.body.password;
    const salt = await bcrypt.genSalt(10);
    const hash = await bcrypt.hash(password, salt);

    const doc = new userModel({
      email: req.body.email,
      name: req.body.name,
      tel: req.body.tel,
      passwordHash: hash,
    });

    const user = await doc.save();

    const token = jwt.sign(
      {
        _id: user._id,
      },
      "secret123",
      {
        expiresIn: "1d",
      }
    );

    const { passwordHash, ...userData } = user._doc;

    res.json({
      ...userData,
      token,
    });
  } catch (err) {
    console.log(err);
    res.status(500).json({ message: "Something went wrong" });
  }
});

app.listen(4444, (err) => {
  if (err) {
    console.log(err);
  }
  console.log("Server started on port 4444");
});
