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
   <title>Workspace</title>
   <script src="https://kit.fontawesome.com/af6e45cdde.js"></script>
   <link rel="stylesheet" href="assets/css/workspace_style.css">
   <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
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
  
   <div class="wrapper"> 
      <?php 
         $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
         if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
         }
      ?>
      
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
                     <a href="#" class="active">
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
                     <a href="spaces.php">
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
            
         <div class="container">
            <p class="bienvenida">Welcome, <?php echo $row["fname"]; ?></p>
            <p class="question" >On what are we working today?</p>
            <div class="item_wrap">
               <div class="item">
                  <h3>Tasks.</h3>
                  <div class="info">
                  You can schedule activities, tasks, assignments, meetings, and many other things you have for a specific day and time on our calendar. This will greatly assist you in organizing your time, as well as in meeting deadlines for your tasks, activities, or assignments.
                  <br>
                  If you have any questions about how the app works or what else you can do, our bot can help you with that. Feel free to ask anything you're unsure about, whether it's navigating features or exploring additional functionalities.
                  </div>
                  <div class="cbutton">
                     <a href="calendar.php">
                     <span class="icon">
                        <i class="fa-solid fa-calendar"></i>
                     </span>
                     <p>Calendar</p>
                  </a>
                  </div>
                  <div class="cbutton">
                     <a href="chatBot.php">
                        <span class="icon">
                           <i class="fa-solid fa-robot"></i>
                        </span>
                        <p>ChatBot</p>
                     </a>
                  </div>
               </div>
               <div class="item">
                  <h3>Chats and Spaces.</h3>
                  <div class="info">
                  Connect seamlessly with your colleagues through our dynamic chat platform, smoothing out internal communication hiccups and supercharging team efficiency.
                  <br>
                  Utilize our versatile workspaces to effortlessly upload files—whether it's activities, tasks, or completed projects—allowing your team to review and utilize them whenever necessary. Elevate your teamwork and productivity to new heights—join us in transforming how you work together!
                  </div>
                  <div class="dbutton">
                     <a href="users_chats.php">
                        <span class="icon">
                           <i class="fa-solid fa-message"></i>
                        </span>
                        <span class="list">Chats</span>
                     </a>
                  </div>
                  <div class="dbutton">
                     <a href="spaces.php">
                        <span class="icon">
                           <i class="fa-solid fa-folder-plus"></i>
                        </span>
                        <span class="list">Spaces</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

</body>
</html>