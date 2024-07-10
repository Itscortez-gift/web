<?php
// welcome.php
session_start();
include 'php/config.php';
if (!isset($_SESSION['unique_id'])) {
    header("Location: Singup-login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="assets/img/logo.png"/>
   <link rel="stylesheet" href="assets/css/pricing_style.css">
   <title>Pricing</title>
</head>
<body>
   <a href="workspace.php">
   <div class="container">
      <div class="go_back"><div></div></div>
   </div>
   </a>
   <div class="wrapper">
      <div class="pricing_table">
         <div class="pt_item pt_1 active">
            <div class="icon"></div>
            <div class="tittle">
               <p>Startup Free</p>
            </div>
            <div class="price">
               <h2>
                  <span class="dollar">$</span>
                  <span class="money">00</span>
                  <span class="month">/Month</span>
               </h2>
            </div>
            <ul>
               <li>
                  <div class="features">
                     <p>Space <span>Limt</span></p>
                  </div>
               </li>
               <li>
                  <div class="features">
                     <p>ChatBot <span>Limit</span></p>
                  </div>
               </li>
               <li>
                  <div class="features">
                     <p>Tasks <span> limit</span></p>
                  </div>
               </li>
               <li>
                  <div class="features">
                     <p>Calendar <span>limit</span></p>
                  </div>
               </li>
            </ul>
            <a href="workspace.php">
               Get started
            </a>
         </div>
         <div class="pt_item pt_2">
            <div class="tittle">
               <p>Business</p>
               <p>100 people</p>
            </div>
            <div class="price">
               <h2>
                  <span class="dollar">$</span>
                  <span class="money">5</span>
                  <span class="month">/Month</span>
               </h2>
            </div>
            <ul>
               <li>
                  <div class="features">
                     <p>Space <span>+</span></p>
                  </div>
               </li>
               <li>
                  <div class="features">
                     <p>ChatBot <span>+</span></p>
                  </div>
               </li>
               <li>
                  <div class="features">
                     <p>Tasks <span>+</span></p>
                  </div>
               </li>
               <li>
                  <div class="features">
                     <p>Calendar <span>+</span></p>
                  </div>
               </li>
            </ul>
            <a href="card1.php">
               Get started
            </a>
         </div>
         <div class="pt_item pt_3">
            <div class="tittle">
               <p>Corporate</p>
               <p>300 people</p>
            </div>
            <div class="price">
               <h2>
                  <span class="dollar">$</span>
                  <span class="money">10</span>
                  <span class="month">/Month</span>
               </h2>
            </div>
            <ul>
               <li>
                  <div class="features">
                     <p><span>24h</span> helpcenter</p>
                  </div>
               </li>
               <li>
                  <div class="features">
                     <p>Space <span>+</span></p>
                  </div>
               </li>
               <li>
                  <div class="features">
                     <p>ChatBot <span>+</span></p>
                  </div>
               </li>
               <li>
                  <div class="features">
                     <p>Tasks <span> +</span></p>
                  </div>
               </li>
               <li>
                  <div class="features">
                     <p>Calendar <span>+</span></p>
                  </div>
               </li>
            </ul>
            <a href="card2.php">
               Get started
            </a>
         </div>
      </div>
   </div>
   
</body>
</html>