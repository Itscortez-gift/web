<?php
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
   <title>Workspace</title>
   <script src="https://kit.fontawesome.com/af6e45cdde.js"></script>
   <link rel="stylesheet" href="assets/css/workspace_style.css">
   <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
   <link rel="icon" type="image/x-icon" href="assets/img/logo.png">
   <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
   <script src="assets/js/space.js" defer></script>
   <script>
      $(document).ready(function(){
         var isActive = localStorage.getItem('sidebarActive') === 'true';

         function toggleSidebar() {
            $(".wrapper").toggleClass("active", isActive);
         }

         toggleSidebar();

         // Remove the transition class after the initial load
         setTimeout(function() {
            $(".wrapper").removeClass("no-transition");
         }, 0);

         $(".hamburguer").click(function(){
            // Add the transition class when user clicks the button
            $(".wrapper").addClass("no-transition");
            $(".wrapper").toggleClass("active");
            isActive = $(".wrapper").hasClass("active");
            localStorage.setItem('sidebarActive', isActive);
         });
      });
   </script>
</head>
<body>
   <?php 
      $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
      if(mysqli_num_rows($sql) > 0){
         $row = mysqli_fetch_assoc($sql);
      }
   ?>
   <div class="wrapper">
      <div class="top_navbar">
         <div class="logo">
            <a href="homepage.php">
               <img class="header__img" src="assets/img/logo.png">
               <h2 class="header__title">Mind
                  <span class="header__light">Mentor</span>
               </h2>
            </a>
         </div>
         <div class="top_menu">
            <div class="users_workspace">
               <p><?php echo $row["fname"]; ?>'s workspace</p>
            </div>
            <div class="buttons-container">
                  <a href="pricing.php">
                     <div class="plus-button">
                     <i class="fa-solid fa-plus"></i>
                     <p>Plus</p> 
                     </div>
                  </a>
               <div class="profile-dropdown">
                  <div class="user-button" onclick="toggle()">
                     <a href="#">
                        <img src="php/uploads/<?php echo $row['img']; ?>" alt="">
                     </a>
                  </div>
                  <ul class="profile-dropdown-list">
                     <li class="profile-dropdown-list-item">
                        <a href="profile.php">
                           Edit profile
                           <i class="fa-solid fa-user-pen"></i>
                           </a>
                     </li>
                     <li class="profile-dropdown-list-item">
                        <a href="#">
                           Help & Support
                           <i class="fa-regular fa-circle-question"></i>
                        </a>
                     </li>
                     <hr>
                     <li class="profile-dropdown-list-item">
                        <a href="php/logout.php?logout_id=<?php echo $_SESSION['unique_id']; ?>">
                           Log out
                           <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <script src="assets/js/dropdown.js"></script>
      </div>

      <div class="main_body">
         <div class="sidebar_menu">
            <div class="inner_sidebar_menu">
               <ul>
                  <li>
                     <a href="workspace.php">
                        <span class="icon">
                           <i class="fas fa-home" aria-hidden="true"></i>
                        </span>
                        <span class="list">Home</span>
                     </a>
                  </li>
                  <li>
                     <a href="calendar.php">
                        <span class="icon">
                           <i class="fa-solid fa-calendar"></i>
                        </span>
                        <span class="list">Calendar</span>
                     </a>
                  </li>
                  <li>
                     <a href="chatBot.php">
                        <span class="icon">
                           <i class="fa-solid fa-robot"></i>
                        </span>
                        <span class="list">ChatBot</span>
                     </a>
                  </li>
                  <li>
                     <a href="users_chats.php">
                        <span class="icon">
                           <i class="fa-solid fa-message"></i>
                        </span>
                        <span class="list">Chats</span>
                     </a>
                  </li>
                  <li>
                     <a href="#" class="active">
                        <span class="icon">
                           <i class="fa-solid fa-folder-plus"></i>
                        </span>
                        <span class="list">Spaces</span>
                     </a>
                  </li>
               </ul>

               <div class="hamburguer">
                  <div class="inner_hamburguer">
                     <pan class="arrow">
                        <i class="fas fa-long-arrow-alt-left" aria-hidden="true"></i>
                        <i class="fas fa-long-arrow-alt-right" aria-hidden="true" style="display: none;"></i>
                     </pan>
                  </div>
               </div>
            </div>
         </div>
         <div class="file-uploader">
            <div class="uploader-header">
               <h2 class="uploader-title">File uploader</h2>
               <h4 class="file-completed-status"></h4>
            </div>
            <ul class="file-list">

            </ul>
            <div class="file-upload-box">
               <h2 class="box-title">
                  <span class="file-intruction">Drag files here or</span>
                  <span class="file-browse-button">browse</span>
               </h2>
               <input class="file-browse-input" type="file" multiple hidden>
            </div>
         </div>   
      </div>
   </div>

</body>
</html>