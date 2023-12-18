import { body } from "express-validator";

export const registerValidation = [
    body('email', 'Неверная почта').isEmail(),
    body('password', 'Пароль должен быть больше 8 символов').isLength({ min: 8 }),
    body('name', 'Имя должно быть больше 3 символов').isLength({ min: 3 }),
    body('tel', 'Телефон должен быть больше 12 символов').isLength({ min: 12 }),
]