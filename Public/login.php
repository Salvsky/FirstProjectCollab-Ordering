<?php
include('../config/connection.php');
?>

<?php 
    if(isset($_POST['FORMLogin'])){
        $username = $_POST['FORMUsername'];
        $password = md5($_POST['FORMPassword']);

        $querySelect = "SELECT * FROM tbl_users WHERE user_name = '$username' AND pass_word = '$password'";
        $sqlSelect = mysqli_query($connection, $querySelect);

        if($sqlSelect == true){
            $count = mysqli_num_rows($sqlSelect);
            if($count == 1){
                $row = mysqli_fetch_assoc($sqlSelect);
                if($row['user_type'] == 'admin'){
                    // echo ("<script>alert('Hello Admin')</script>");
                    $_SESSION['admin-account'] = $username;
                    header("location:".SITEURL.'Admin/admin-dashboard.php');

                }else{
                    // echo ("<script>alert('Hello User')</script>");
                    $_SESSION['user-account'] = $username;
                    header("location:".SITEURL.'Public/user-dashboard.php');
                }

            }else{
                // echo ("<script>alert('Incorrect Login Credentials')</script>");
                $_SESSION['login'] = "Invalid User Credentials";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
        <div class="first-container">
            <div class="left-section">
                <img src="../images/logo.jpg" class="logo">
            </div>
            <div class="right-section">
                <div class="business-title"><p class="title-name">Street Bites</p></div>
            </div>
        </div>

        <div class="main-content">
            <div class="wrapper">

                <div class="content">
                        <div class="featured">
                            Featured Contents
                        </div>

                        <div class="login-content">
                            <div class="login-page-title text-center">
                            LOGIN USER ACCOUNT
                        </div>

                        <div class="messages text-center">
                            <?php
                                if(isset($_SESSION['login'])){
                                    echo $_SESSION['login'];
                                    unset($_SESSION['login']);
                                }
                            ?>
                        </div>

                        <div class="middle-section">
                            <form action="#" method="POST">
                            <input type="text" name="FORMUsername" placeholder="Username">
                               <i class="fa-solid fa-user user-icon"></i>
                            <input type="password" name="FORMPassword" placeholder="Password">
                                <i class="fa-solid fa-key user-pass"></i>
                        </div>
                        
                        <div class="login-section">
                            <div class="button-div text-center">
                                    <input type="submit" name ="FORMLogin" value="LOGIN" class="btn-login">
                            </div>
                            </form>

                            <div class="suggestion">
                                    <p class="account-message">Don't have an account? <a href="register.php"><span class="login-link">Sign Up</span></a></p>
                            </div>
                        </div>

                </div>

            </div>
        </div>

</body>
</html>
