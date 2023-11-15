<?php
session_start(); // Инициализация сессии

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Проверяем, есть ли данные о пользователе в сессии
if (!isset($_SESSION['username'])) {
  // Если нет, редиректим на страницу входа
  header("Location: ./php/login.php");
  exit();
}

// Иначе, отображаем приветствие
$username = $_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Antools</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
    integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="icon" href="./images/website-logo.png" type="image/x-icon" />
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="logo-container">
        <img src="./images/website-logo.png" alt="Logotype" class="logo" />
        <p class="text-logo">antools.</p>
      </div>
      <nav class="nav">
        <ul class="nav-list list">
          <li class="nav-list-item">
            <a class="nav-link link">Home</a>
          </li>
          <li class="nav-list-item">
            <a class="nav-link link dropdown-link" id="dropdown-link">
              Categories
              <svg id="dropdown-icon" class="dropdown-icon" width="18" height="18">
                <use xlink:href="../images/icons.svg#dropdown"></use>
              </svg>
              <div class="dropdown">
                <a onclick="designScroll()" class="link design-href">Design</a>
                <a onclick="developmentScroll()" class="link development-href">Development</a>
              </div>
            </a>
          </li>
          <li class="nav-list-item">
            <a class="nav-link link">My Collections</a>
          </li>
          <li class="nav-list-item">
            <a class="nav-link link">Blog</a>
          </li>
        </ul>
      </nav>
      <div class="acc-btns-container">
        <button style="opacity: 0; z-index: -1; cursor: auto;" id="login-btn" type="button" disabled
          class="login-btn sign-btn">Login</button>
        <button style="opacity: 0; z-index: -1; cursor: auto;" id="sign-btn" type="button" disabled
          class="sign-btn">Sign Up</button>
      </div>
      <div class="acc-acc-container">
        <div id="acc-open" class="acc-container">
          <img src="./images/account.png" alt="account avatar" width="32" height="32">
          <svg id="dropdown-icon1" class="dropdown-icon" width="18" height="18">
            <use xlink:href="../images/icons.svg#dropdown"></use>
          </svg>
        </div>
        <div class="dropdown-acc dropdown">
          <img src="./images/account.png" alt="account avatar" width="28" height="28">
          <h4 class="account-name">
            <?php echo htmlspecialchars($username); ?>
          </h4>
          <button class="">View profile</button>
          <button class="">Edit profile</button>
          <button class="">Leave account</button>
        </div>
      </div>
    </div>
  </header>
  <main>
    <section class="hero-section">
      <div class="container">
        <div class="main-hero-container">
          <h1 class="hero-title">
            Awesome tools for <br />
            Designer & Developer<span class="hero-span">.</span>
          </h1>
          <p class="signature">
            Antool is a web collection of information on paid or <br />
            free Design and Development tools
          </p>
          <img class="search-icon" src="./images/search.svg" alt="" />
          <input type="text" class="search-input" name="search" id="search"
            placeholder="find more than 430+ tools..." />
          <button type="button" class="search-btn">Search</button>
          <ul class="social-links-ul list">
            <li class="social-links-item">
              <a class="social-links link">
                <svg width="34" height="34">
                  <use xlink:href="../images/icons.svg#facebook"></use>
                </svg>
              </a>
            </li>
            <li class="social-links-item">
              <a class="social-links link">
                <svg width="36" height="36">
                  <use xlink:href="../images/icons.svg#inst"></use>
                </svg>
              </a>
            </li>
            <li class="social-links-item">
              <a class="social-links link">
                <svg width="36" height="36">
                  <use xlink:href="../images/icons.svg#twit"></use>
                </svg>
              </a>
            </li>
          </ul>
        </div>
        <img src="./images/hero-img.png" alt="hero image" class="hero-img" />
      </div>
    </section>
    <section class="popular-tools">
      <div class="container">
        <h2 class="popular-tools-title">Most Popular Tools</h2>
        <p style="text-align: center" class="signature">
          Tools for the best Designers and Developers <br />
          most popularly used in the world
        </p>
        <ul id="design" class="popular-tools-ul list">
          <li class="popular-tools-item">
            <div class="top-popular-container">
              <img src="./images/figma-logo.png" alt="" class="popular-item-img" />
              <div class="top-popular-text-container">
                <h3 class="popular-item-title">FIGMA</h3>
                <p class="populars-tools-cost">Free</p>
              </div>
            </div>
            <p class="popular-item-signature signature">
              Lorem ipsum dolor sit amet, consectetur <br />
              adipiscing elit.
            </p>
            <div class="popular-item-flex-container">
              <div class="popular-item-container">
                <button id="like-btn1" class="like-btn" type="button">
                  <svg id="like1" width="28" height="28">
                    <use class="like-icon" xlink:href="../images/icons.svg#like"></use>
                  </svg>
                </button>
                <button id="save1" class="save-btn" type="button">
                  <svg width="30" height="30">
                    <use class="save-icon" xlink:href="../images/icons.svg#save"></use>
                  </svg>
                </button>
              </div>
              <a href="https://www.figma.com/" type="button" class="visit-btn link">Visit</a>
            </div>
          </li>
          <li class="popular-tools-item">
            <div class="top-popular-container">
              <img src="./images/sketch-logo.png" alt="" class="popular-item-img" />
              <div class="top-popular-text-container">
                <h3 class="popular-item-title">Sketch</h3>
                <p class="populars-tools-cost">Trial & Paid</p>
              </div>
            </div>
            <p class="popular-item-signature signature">
              Lorem ipsum dolor sit amet, consectetur <br />
              adipiscing elit.
            </p>
            <div class="popular-item-flex-container">
              <div class="popular-item-container">
                <button id="like2" class="like-btn" type="button">
                  <svg width="28" height="28">
                    <use class="like-icon" xlink:href="../images/icons.svg#like"></use>
                  </svg>
                </button>
                <button id="save2" class="save-btn" type="button">
                  <svg width="30" height="30">
                    <use class="save-icon" xlink:href="../images/icons.svg#save"></use>
                  </svg>
                </button>
              </div>
              <a href="https://www.sketch.com/" type="button" class="visit-btn link">Visit</a>
            </div>
          </li>
          <li class="popular-tools-item">
            <div class="top-popular-container">
              <img src="./images/vscode-logo.png" alt="" class="popular-item-img" />
              <div class="top-popular-text-container">
                <h3 class="popular-item-title">Visual Studio Code</h3>
                <p class="populars-tools-cost">Free</p>
              </div>
            </div>
            <p class="popular-item-signature signature">
              Lorem ipsum dolor sit amet, consectetur <br />
              adipiscing elit.
            </p>
            <div class="popular-item-flex-container">
              <div class="popular-item-container">
                <button id="like3" class="like-btn" type="button">
                  <svg width="28" height="28">
                    <use class="like-icon" xlink:href="../images/icons.svg#like"></use>
                  </svg>
                </button>
                <button id="save3" class="save-btn" type="button">
                  <svg width="30" height="30">
                    <use class="save-icon" xlink:href="../images/icons.svg#save"></use>
                  </svg>
                </button>
              </div>
              <a href="https://code.visualstudio.com/" type="button" class="visit-btn link">Visit</a>
            </div>
          </li>
          <li class="popular-tools-item">
            <div class="top-popular-container">
              <img src="./images/notion.png" alt="" class="popular-item-img" />
              <div class="top-popular-text-container">
                <h3 class="popular-item-title">Notion</h3>
                <p class="populars-tools-cost">Free & Paid</p>
              </div>
            </div>
            <p class="popular-item-signature signature">
              Lorem ipsum dolor sit amet, consectetur <br />
              adipiscing elit.
            </p>
            <div class="popular-item-flex-container">
              <div class="popular-item-container">
                <button id="like4" class="like-btn" type="button">
                  <svg width="28" height="28">
                    <use class="like-icon" xlink:href="../images/icons.svg#like"></use>
                  </svg>
                </button>
                <button id="save4" class="save-btn" type="button">
                  <svg width="30" height="30">
                    <use class="save-icon" xlink:href="../images/icons.svg#save"></use>
                  </svg>
                </button>
              </div>
              <a href="https://www.notion.so/" type="button" class="visit-btn link">Visit</a>
            </div>
          </li>
          <li class="popular-tools-item">
            <div class="top-popular-container">
              <img src="./images/grommet-icons_slack.png" alt="" class="popular-item-img" />
              <div class="top-popular-text-container">
                <h3 class="popular-item-title">Slack</h3>
                <p class="populars-tools-cost">Free & Paid</p>
              </div>
            </div>
            <p class="popular-item-signature signature">
              Lorem ipsum dolor sit amet, consectetur <br />
              adipiscing elit.
            </p>
            <div class="popular-item-flex-container">
              <div class="popular-item-container">
                <button id="like5" class="like-btn" type="button">
                  <svg width="28" height="28">
                    <use class="like-icon" xlink:href="../images/icons.svg#like"></use>
                  </svg>
                </button>
                <button id="save5" class="save-btn" type="button">
                  <svg width="30" height="30">
                    <use class="save-icon" xlink:href="../images/icons.svg#save"></use>
                  </svg>
                </button>
              </div>
              <a href="https://slack.com/" type="button" class="visit-btn link">Visit</a>
            </div>
          </li>
          <li class="popular-tools-item">
            <div class="top-popular-container">
              <img src="./images/logos_invision-icon.png" alt="" class="popular-item-img" />
              <div class="top-popular-text-container">
                <h3 class="popular-item-title">Invision</h3>
                <p class="populars-tools-cost">Free & Paid</p>
              </div>
            </div>
            <p class="popular-item-signature signature">
              Lorem ipsum dolor sit amet, consectetur <br />
              adipiscing elit.
            </p>
            <div class="popular-item-flex-container">
              <div class="popular-item-container">
                <button id="like6" class="like-btn" type="button">
                  <svg width="28" height="28">
                    <use class="like-icon" xlink:href="../images/icons.svg#like"></use>
                  </svg>
                </button>
                <button id="save6" class="save-btn" type="button">
                  <svg width="30" height="30">
                    <use class="save-icon" xlink:href="../images/icons.svg#save"></use>
                  </svg>
                </button>
              </div>
              <a href="https://www.invisionapp.com/" type="button" class="visit-btn link">Visit</a>
            </div>
          </li>
        </ul>

        <button id="loadBtn" type="button" class="popular-tools-btn">
          Load more
        </button>
      </div>
    </section>
    <section class="trusted-brands">
      <div class="container">
        <h3 class="trusted-brands-title">Trusted more than 150+ brand</h3>
        <ul class="trusted-brands-ul list">
          <li class="trusted-brands-item">
            <a href="https://www.microsoft.com/" class="trusted-brands-link link">
              <img src="./images/logos_microsoft.png" alt="" class="trusted-brands-img" />
            </a>
          </li>
          <li class="trusted-brands-item">
            <a href="https://www.google.com.ua/" class="trusted-brands-link link">
              <img src="./images/logos_google.png" alt="" class="trusted-brands-img" />
            </a>
          </li>
          <li class="trusted-brands-item">
            <a href="https://slack.com/" class="trusted-brands-link link">
              <img src="./images/logos_slack.png" alt="" class="trusted-brands-img" />
            </a>
          </li>
          <li class="trusted-brands-item">
            <a href="https://uk.wordpress.org/" class="trusted-brands-link link">
              <img src="./images/logos_wordpress.png" alt="" class="trusted-brands-img" />
            </a>
          </li>
        </ul>
      </div>
    </section>
    <section id="development" class="newcomer-tools">
      <div class="container">
        <div class="newcomer-container">
          <h2 class="newcomer-tools-title">Newcomer Tools</h2>
          <p class="signature">
            Wow! see the latest update of the most <br />
            recommended tools from reliable designers <br />
            and developers
          </p>
          <button type="button" class="newcomer-btn">Explore more</button>
        </div>
        <ul class="newcomer-tools-ul list">
          <li class="popular-tools-item newcomer-tools-item">
            <div class="top-popular-container">
              <img src="./images/zeplin.png" alt="" class="popular-item-img" width="64px" height="64px" />
              <div class="top-popular-text-container">
                <h3 class="popular-item-title">Zeplin</h3>
                <p class="populars-tools-cost">Free & Paid</p>
              </div>
            </div>
            <p class="popular-item-signature signature">
              Lorem ipsum dolor sit amet, <br />
              consectetur adipiscing elit.
            </p>
            <div class="popular-item-flex-container">
              <div class="popular-item-container">
                <button id="like6" class="like-btn" type="button">
                  <svg width="28" height="28">
                    <use class="like-icon2" xlink:href="../images/icons.svg#like"></use>
                  </svg>
                </button>
                <button id="save6" class="save-btn" type="button">
                  <svg width="30" height="30">
                    <use class="save-icon2" xlink:href="../images/icons.svg#save"></use>
                  </svg>
                </button>
              </div>
              <a href="https://www.invisionapp.com/" type="button" class="visit-btn link">Visit</a>
            </div>
          </li>
          <li class="popular-tools-item newcomer-tools-item">
            <div class="top-popular-container">
              <img src="./images/jb_phpstorm.png" alt="" class="popular-item-img" />
              <div class="top-popular-text-container">
                <h3 class="popular-item-title">PHPStorm</h3>
                <p class="populars-tools-cost">Free</p>
              </div>
            </div>
            <p class="popular-item-signature signature">
              Lorem ipsum dolor sit amet, <br />
              consectetur adipiscing elit.
            </p>
            <div class="popular-item-flex-container">
              <div class="popular-item-container">
                <button id="like6" class="like-btn" type="button">
                  <svg width="28" height="28">
                    <use class="like-icon2" xlink:href="../images/icons.svg#like"></use>
                  </svg>
                </button>
                <button id="save6" class="save-btn" type="button">
                  <svg width="30" height="30">
                    <use class="save-icon2" xlink:href="../images/icons.svg#save"></use>
                  </svg>
                </button>
              </div>
              <a href="https://www.invisionapp.com/" type="button" class="visit-btn link">Visit</a>
            </div>
          </li>
          <li class="popular-tools-item newcomer-tools-item">
            <div class="top-popular-container">
              <img src="./images/jb_toolbox_app.png" alt="" class="popular-item-img" />
              <div class="top-popular-text-container">
                <h3 class="popular-item-title">Toolbox</h3>
                <p class="populars-tools-cost">Free</p>
              </div>
            </div>
            <p class="popular-item-signature signature">
              Lorem ipsum dolor sit amet, <br />
              consectetur adipiscing elit.
            </p>
            <div class="popular-item-flex-container">
              <div class="popular-item-container">
                <button id="like6" class="like-btn" type="button">
                  <svg width="28" height="28">
                    <use class="like-icon2" xlink:href="../images/icons.svg#like"></use>
                  </svg>
                </button>
                <button id="save6" class="save-btn" type="button">
                  <svg width="30" height="30">
                    <use class="save-icon2" xlink:href="../images/icons.svg#save"></use>
                  </svg>
                </button>
              </div>
              <a href="https://www.invisionapp.com/" type="button" class="visit-btn link">Visit</a>
            </div>
          </li>
          <li class="popular-tools-item newcomer-tools-item">
            <div class="top-popular-container">
              <img src="./images/procreate.png" alt="" class="popular-item-img" />
              <div class="top-popular-text-container">
                <h3 class="popular-item-title">Procreate</h3>
                <p class="populars-tools-cost">Paid</p>
              </div>
            </div>
            <p class="popular-item-signature signature">
              Lorem ipsum dolor sit amet, <br />
              consectetur adipiscing elit.
            </p>
            <div class="popular-item-flex-container">
              <div class="popular-item-container">
                <button id="like6" class="like-btn" type="button">
                  <svg width="28" height="28">
                    <use class="like-icon2" xlink:href="../images/icons.svg#like"></use>
                  </svg>
                </button>
                <button id="save6" class="save-btn" type="button">
                  <svg width="30" height="30">
                    <use class="save-icon2" xlink:href="../images/icons.svg#save"></use>
                  </svg>
                </button>
              </div>
              <a href="https://www.invisionapp.com/" type="button" class="visit-btn link">Visit</a>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <section class="slider">
      <div class="container">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img class="swiper-man" src="./images/man.png" alt="man" />
              <div class="blurbg">
                <h3 class="swiper-man-name">Ronald Richards</h3>
                <p class="swiper-man-profession">Product Manager</p>
              </div>
              <img class="decor" src="./images/“.png" alt="''" />
              <p class="man-dscr">
                Incididunt cillum do sint sint enim ullamco id deserunt mollit
                <br />
                qui reprehenderit do. Velit ex tempor cillum ad sint occaecat.
                <br />
                Do nulla velit labore occaecat do deserunt Lorem magna <br />
                officia incididunt consectetur amet. Sunt consectetur veniam
                <br />
                minim ex commodo sint non. Occaecat aute officia excepteur
                <br />
                non laboris id qui ad.
              </p>
            </div>
            <div class="swiper-slide">
              <img class="swiper-man" src="./images/man.png" alt="man" />
              <div class="blurbg">
                <h3 class="swiper-man-name">Ronald Richards</h3>
                <p class="swiper-man-profession">Product Manager</p>
              </div>
              <img class="decor" src="./images/“.png" alt="''" />
              <p class="man-dscr">
                Incididunt cillum do sint sint enim ullamco id deserunt mollit
                <br />
                qui reprehenderit do. Velit ex tempor cillum ad sint occaecat.
                <br />
                Do nulla velit labore occaecat do deserunt Lorem magna <br />
                officia incididunt consectetur amet. Sunt consectetur veniam
                <br />
                minim ex commodo sint non. Occaecat aute officia excepteur
                <br />
                non laboris id qui ad.
              </p>
            </div>
            <div class="swiper-slide">
              <img class="swiper-man" src="./images/man.png" alt="man" />
              <div class="blurbg">
                <h3 class="swiper-man-name">Ronald Richards</h3>
                <p class="swiper-man-profession">Product Manager</p>
              </div>
              <img class="decor" src="./images/“.png" alt="''" />
              <p class="man-dscr">
                Incididunt cillum do sint sint enim ullamco id deserunt mollit
                <br />
                qui reprehenderit do. Velit ex tempor cillum ad sint occaecat.
                <br />
                Do nulla velit labore occaecat do deserunt Lorem magna <br />
                officia incididunt consectetur amet. Sunt consectetur veniam
                <br />
                minim ex commodo sint non. Occaecat aute officia excepteur
                <br />
                non laboris id qui ad.
              </p>
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

          <div class="swiper-scrollbar"></div>
        </div>
      </div>
    </section>
    <section class="contributor">
      <div class="container">
        <h2 class="contributor-title">Become a contributor?</h2>
        <p style="text-align: center" class="signature">
          Join us and get tips & tricks to become a great <br />
          Designer and Developer
        </p>
        <input type="text" class="search-input contributor-input" name="search" placeholder="Enter your email..." />
        <button type="button" class="search-btn join-btn">Join Us</button>
      </div>
    </section>
    <footer class="footer">
      <hr />
      <div class="container">
        <ul class="footer-ul list">
          <li class="footer-ul-item">
            <div class="logo-container">
              <img src="./images/website-logo.png" alt="Logotype" class="logo" />
              <p class="text-logo">antools.</p>
            </div>
          </li>
          <li class="footer-ul-item">
            <h3 style="margin-top: 20px" class="footer-ul-title">
              Copyright 2021. Antools
            </h3>
          </li>
          <li class="footer-ul-item">
            <p class="signature">
              Antool is a web collection of <br />
              information on paid or free Design <br />
              and Development tools
            </p>
          </li>
        </ul>
        <ul class="footer-ul contact-us-ul list">
          <li class="footer-ul-item">
            <h3 class="footer-ul-title">Contact us</h3>
          </li>
          <li class="footer-ul-item">
            <a href="tel:+621987463" class="link">+621987463</a>
          </li>
          <li class="footer-ul-item">
            <a href="#" class="link">M Building, No.10 A</a>
          </li>
          <li class="footer-ul-item">
            <a href="mailto:antools@awesome.com" class="link">antools@awesome.com</a>
          </li>
        </ul>
        <ul class="footer-ul contact-us-ul list">
          <li class="footer-ul-item">
            <h3 class="footer-ul-title">Categories</h3>
          </li>
          <li class="footer-ul-item">
            <a onclick="designScroll()" class="link design-href">Design</a>
          </li>
          <li class="footer-ul-item">
            <a onclick="developmentScroll()" class="link development-href">Development</a>
          </li>
        </ul>
        <ul class="footer-ul contact-us-ul list">
          <li class="footer-ul-item">
            <h3 class="footer-ul-title">Company Info</h3>
          </li>
          <li class="footer-ul-item">
            <a href="#" class="link">About Us</a>
          </li>
          <li class="footer-ul-item">
            <a href="#" class="link">Our Partners</a>
          </li>
          <li class="footer-ul-item">
            <a href="#" class="link">Blog</a>
          </li>
        </ul>
      </div>
    </footer>
  </main>
  <div id="overlay-modal" class="popup-overlay"></div>
  <script src="./js/main.js"></script>
  <script src="./js/modal.js"></script>
  <script src="./js/validate.js"></script>
</body>

</html>