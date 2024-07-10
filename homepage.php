<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/homepage_style.css">
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png"/>
    <meta name="theme-color" content="#1885ed">
    <script src="https://kit.fontawesome.com/af6e45cdde.js"></script>
    <title>MindMentor</title>
</head>

<body>
  <header class="header">
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fa-solid fa-bars" style="margin-top:20px"></i>
      </label>

      <div class="header__logo"> 
        <a href="#">
          <img class="header__img" src="assets/img/logo.png">
          <h1 class="header__title">Mind
            <span class="header__light">Mentor</span>
          </h1>
        </a>
      </div> 

      <ul class="navbar">
        <li><a href="#">Home</a></li>
        <li><a href="#features">Features</a></li>
        <li><a href="#pricing">Pricing</a></li>
        <li><a href="#opinion">Opinion of our users</a></li>
        <li><a href="#About">About us</a></li>
        <li class="header__el--blue"><a href="Singup-login.php" class="btn white">Sign In →</a></li>
      </ul>
    </nav>
  </header>
      
  <div class="sect sect--padding-top">
    <div class="container"> 
      <div class="row">
        <div class="col-md-12">
          <div class="site">
            <div class="title">
              <h2 class="site__title">WELCOME TO Mind</h2>
              <h2 class="site__title_2">Mentor</h2>
            </div>
            <h2 class="site__subtitle">Manage everything in only one webpage.</h2>
            <div class="site__box-link">
              <a class="btn btn--width" href="#free">Get Free</a>
              <a class="btn btn--revert btn--width" href="#About">Help Center</a>
            </div>
          </div><br id="features">
          <div class="features">
            <h1 class="row_title">Features</h1>
            <h2 class="row_sub">Here are all the features created for you.</h2>
            <div class="features-container">
                <div class="features-content">
                    <div class="container_f">
                        <div class="title">
                            <i class="fa-solid fa-calendar"></i>
                            <h3>Calendar</h3>
                        </div>
                        <p>where you can add and remove activities or tasks you have for a certain time, complying with the deadline.</p>
                    </div>
                    <div class="container_f special-width">
                        <div class="title">
                            <i class="fa-solid fa-robot"></i>
                            <h3>ChatBot</h3>
                        </div>
                        <p>with questions about organization and how to use the website.</p>
                    </div>
                    <div class="container_f">
                        <div class="title">
                            <i class="fa-solid fa-message"></i>
                            <h3>Chats</h3>
                        </div>
                        <p>where you can communicate with your coworkers, thus improving the lack of internal communication.</p>
                    </div>
                    <div class="container_f">
                        <div class="title">
                            <i class="fa-solid fa-folder-plus"></i>
                            <h3>Space</h3>
                        </div>
                        <p>where you can store the work, tasks, or activities you have done and that your coworkers can review or use if necessary.</p>
                    </div>
                </div>
              <img class="site__img" src="assets/img/screenshot.png">
            </div>
          </div>       
        </div>
      </div>
    </div>
  </div>
      
  <div class="sect sect--padding-bottom"  id="pricing">
    <div class="container">
      <div class="row row--center">
        <h1 class="row__title">Pricing</h1>
        <h2 class="row__sub" id="free">What fits you or your business the best?</h2>
      </div>
    </div>
  </div>
    <div class="row row--center row--margin">
      <a href="#">
        <div class="col-md-4 col-sm-4 price-box price-box--purple">
          <div class="price-box__wrap">
            <div class="price-box__img"></div>
            <h1 class="price-box__title">Startup Free</h1>
            <h2 class="price-box__discount">
              <span class="price-box__dollar">$</span>00<span class="price-box__discount--light">/mo</span>
            </h2>
            <p class="price-box__feat">Features</p>
            <ul class="price-box__list">
              <li class="price-box__list-el">Space limit</li>
              <li class="price-box__list-el">ChatBot Limit</li>
              <li class="price-box__list-el">Tasks limit</li>
              <li class="price-box__list-el">Calendar limit</li>
            </ul>
          </div>
        </div>
      </a>
        <!-- second -->
      <a href="#">
        <div class="col-md-4 col-sm-4 price-box price-box--violet">
          <div class="price-box__wrap">
            <div class="price-box__img"></div>
            <h1 class="price-box__title">Business</h1>
            <p class="price-box__people">100  people</p>
            <h2 class="price-box__discount">
              <span class="price-box__dollar">$</span>5<span class="price-box__discount--light">/mo</span>
            </h2>
            <p class="price-box__feat">Features</p>
            <ul class="price-box__list">
              <li class="price-box__list-el">Space+</li>
              <li class="price-box__list-el">ChatBot+</li>
              <li class="price-box__list-el">tasks+</li>
              <li class="price-box__list-el">Calendar+</li>
            </ul>
          </div>
        </div>
      </a>
        <!-- terzo -->
      <a href="#">
        <div class="col-md-4 col-sm-4 price-box price-box--blue">
          <div class="price-box__wrap">
            <div class="price-box__img"></div>
            <h1 class="price-box__title">Corporate</h1>
            <p class="price-box__people">300+ people</p>
            <h2 class="price-box__discount">
              <span class="price-box__dollar">$</span>10<span class="price-box__discount--light">/mo</span>
            </h2>
            <p class="price-box__feat">Features</p>
            <ul class="price-box__list">
              <li class="price-box__list-el">24h helpcenter</li>
              <li class="price-box__list-el">Space+</li>
              <li class="price-box__list-el">ChatBot+</li>
              <li class="price-box__list-el">tasks+</li>
              <li class="price-box__list-el">Calendar+</li>
            </ul>
          </div>
        </div>
      </a>

      <div class="sect sect--white" id="opinion">
        <div class="container">
          <div class="row">
            <h1 class="row__title" id="opinion">Opinion of the web.</h1>
            <h2 class="row__sub">Here are some opinion of our users.</h2>
          </div>
          <div class="row row--margin row--text-center">
            <div class="col-md-8 col-sm-10 col-xs-12 row__carousel">
                  <!-- Wrapper for slides -->
              <div class="carousel-inner"> 
              <div class="item">
                <div class="item__content">
                  <img class="item__img" src="assets/img/superatemerlet.png" alt="¡Supérate! Merlet"><span class="item__name">Centro ¡Supérate! Merlet</span>
                  <p class="item__description">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                  </div>
                  <div class="item__avatar"></div>
                    <p class="item__people">Mary Tompson</p>
                    <p class="item__occupation">Ceo of Dribbble</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item__content">
                  <img class="item__img" src="assets/img/superatemerlet.png" alt="Stackoverflow"><span class="item__name">Centro ¡Supérate! Merlet</span>
                  <p class="item__description">Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                </div>
                <div class="item__avatar"></div>
                <p class="item__people">Andrew Palmer</p>
                <p class="item__occupation">Ceo of Slack</a>
              </div>
            </div>
          </div>   
        </div>
      </div>    
        <!--About us -->
    <link rel="stylesheet" href="assets/css/homepage_style.css">
    <footer id="About">
      <div class="roww">
        <div class="col">
          <img src="assets/img/logo_reverse.png" alt="logo" class="logo">
          <h3>Created by Sebastián Orellana, Mateo Miranda and Alfredo Cortez.</h3>
          <p>
            <span>MindMentor</span>, created by students from Centro ¡Supérate! Merlet, helps businesses improve organization. With tools like an intuitive calendar, team chat features, a helpful ChatBot, and easy file sharing, <span>MindMentor</span> aims to reduce the 74% business failure rate caused by poor organization.
          </p>
          <br>
          <p>
            Start organizing efficiently with MindMentor and unlock the key to business success. Visit us today! Remember, MindMentor is the key to a more organized world. 
          </p>
        </div>
        <div class="col" style="padding-top:145px;">
          <h3>Centro</h3>
          <p>¡Supérate! Merlet</p>
          <p>Antiguo Cuscatlan</p>
          <p>3rd Year</p>
          <br>
          <p class="email-id">
            ricardo.orellana2024@merlet.superate.org.sv
            mateo.miranda2024@merlet.superate.org.sv
            alfredo.cortez2024@merlet.superate.org.sv
          </p>
        </div>
        <div class="col" style="padding-top:145px;">
          <h3>Social Media</h3>
          <br>
          <div class="social-icons">
            <a href="https://x.com/MindMentor_s" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="https://www.instagram.com/mindmetor_/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.facebook.com/profile.php?id=61562165426550&locale=es_LA" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
          </div>
        </div>
      </div>
      <hr>
      <p class="copyright"> MindMentor © 2024 - All Rights Reserved </p>
    </footer>
  <script>
    window.addEventListener("scroll", function(){
    var header = this.document.querySelector("header"); 
    header.classList.toggle("sticky", window.scrollY > 0);
    });
  </script>
</body>
</html>