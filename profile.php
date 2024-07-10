<?php
session_start();

include 'php/config.php';
if (!isset($_SESSION['unique_id'])) {
    header("Location: Singup-login.php");
    exit();
}

$unique_id = $_SESSION['unique_id'];

$sql = "SELECT * FROM users WHERE unique_id = '$unique_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $first_name = $row["fname"];
        $last_name = $row["lname"];
        $email = $row["email"];
        $profile_image = $row["img"];
    }
} else {
    echo "Información del usuario no encontrada";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profile</title>
    <script src="https://kit.fontawesome.com/af6e45cdde.js"></script>
    <link rel="stylesheet" href="assets/css/Profile.css">
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png"/>
</head>

<body>
    <div class="container">
        <div class="profile">
            <div class="profile_header">
                    <div class="profile-img-container">
                        <img src="php/uploads/<?php echo $profile_image; ?>" alt="Profile" class="profile-img">
                        <input type="file" class="profile-img-input" id="profileImageInput" style="display:none;">
                        <i class="fa-solid fa-pen-to-square edit-icon"></i>
                    </div>
                <div class="profile-text-cotainer">
                    <h1 class="profile-title"><?php echo htmlspecialchars($first_name); ?></h1>
                    <p class="profile-email"><?php echo htmlspecialchars($email); ?></p>
                </div>
            </div>
            <div class="menu">
                 <a href="#" class="menu-link"><i class="fa-solid fa-circle-user menu-icon"></i>Account</a>
                 <a href="php/logout.php?logout_id=<?php echo $_SESSION['unique_id']; ?>" class="menu-link"><i class="fa-solid fa-right-from-bracket menu-icon"></i>Logout</a>
            </div>
        </div>

        <form class="account" action="php/update_profile.php" method="post" enctype="multipart/form-data">
            <div class="account-header">
                <h1 class="account-title">Account Setting</h1>
                <div class="btn-cotainer">
                    <div class="cancel">
                        <button type="reset" class="btn-cancel" onclick="window.location.href='workspace.php'">Cancel</button>
                    </div>
                    <div class="save">
                        <button type="submit" class="btn-save" onclick="window.location.href='php/update_profile.php'">Save</button>
                    </div>
                </div>
            </div>

            <div class="accoun-edit">
                <div class="input-cotainer">
                    <label>First Name</label>
                    <input type="text" name="fname" value="<?php echo htmlspecialchars($first_name); ?>" required>
                </div>
                <div class="input-cotainer">
                    <label>Last Name</label>
                    <input type="text" name="lname" value="<?php echo htmlspecialchars($last_name); ?>" required>
                </div>
                <div class="input-cotainer">
                    <label>Email</label>
                    <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
                </div>
                <div class="input-cotainer">
                    <label>Current Password</label>
                    <input type="password" name="current_password" required>
                </div>
                <div class="input-cotainer">
                    <label>New Password</label>
                    <input type="password" name="new_password">
                </div>
                <div class="input-cotainer">
                    <label>Confirm New Password</label>
                    <input type="password" name="confirm_new_password">
                </div>            
            </div>
        </form>
    </div>

    <script src="assets/js/profile.js"></script>
</body>
</html>
