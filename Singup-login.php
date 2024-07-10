<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Expires" content="0">
   <meta http-equiv="Last-Modified" content="0">
   <meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
   <meta http-equiv="Pragma" content="no-cache">
   <link rel="stylesheet" href="assets/css/singup_login_style.css">
   <link rel="icon" type="image/x-icon" href="assets/img/logo.png"/>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login and Sing Up</title>
</head>
<body class="body">

   <Main>

      <div class="all__container">

         <div class="background_box">
            <div class="background_box-login">
               <h3>You have an account?</h3>
               <p>Log in to enter the website.</p>
               <button id="btn_Log-in">Log in</button>
               <a href="homepage.php">Or go back to our webpage.</a>
            </div>
            <div class="background_box-register">
               <h3>You still don't have an account?</h3>
               <p>Sing up so you can Log in our website.</p>
               <button id="btn_register">Sign up</button>
               <a href="homepage.php">Or go back to our webpage.</a>
            </div>
         </div>

         <div class="container_Login-Register">
            <!-- Log in  -->
            <form action="php/login_user.php" method= "POST" class="Login-form">

               <h2>Log in</h2>
               <input type="text" placeholder="Email" name= "email" id="email" required>
               <input type="password" placeholder="password" name= "password" id="password" required>
               <button>Log in</button>

            </form>

            <!-- Sing up -->
            <form action="php/singup_user.php" method="POST" class="register-form" enctype="multipart/form-data">
               <h2>Sing up</h2>
               <input type="text" placeholder="Firts name" name = "first_name" id = "first_name" require> 
               <input type="text" placeholder="Last name" name = "last_name" id="last_name" required>
               <input type="text" placeholder="Email" name = "email" id="email" required>
               <input type="password" placeholder="password" name = "password" id="password" required>
               <input type="file" name="profile_image" required>
               <button>Sing up</button>
            </form>
         </div>

      </div>

   </Main>
   <script src="assets/js/script.js"></script>
   
</body>
</html>