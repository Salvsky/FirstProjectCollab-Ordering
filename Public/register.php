<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">


</head>
<body>
        <div class="header">
        
            <div class="business-title-shadow">Street Bites</div>
            <div class="left-section">
                <img src="../images/logo.jpg" class="logo">
            </div>
            <div class="right-section">
                <div class="business-title">Street Bites</div>
            </div>
        </div>

        <div class="main-content">
            <div class="wrapper">

                <div class="signup-form">
                    <div class="page-title text-center">
                        SIGN UP NEW USER
                    </div>

                    <div class="messages">
                            
                    </div>

                    <div class="main-form">

                        

                        <div class="left-form">
                            <form action="" method="post">
                                <input type="text" name="FORMFirstname" placeholder="Firstname" required> <br>
                                <input type="text" name="FORMLastname" placeholder="Lastname" required> <br>
                                <input type="text" name="FORMUsername" placeholder="Username" required><br>
                                <input type="email" name="FORMEmail" placeholder="Email Address" required><br>
                                <input type="text" name="FORMContact" placeholder="Contact" required><br>
                        </div>

                        <div class="right-form text-center">
                                <input type="text" name="" placeholder="Complete Address" required> <br>
                                <label for="" class="gender">Gender</label>
                                    <input type="radio" name="" value="Male">Male
                                    <input type="radio" name="" value="Female">Female <br>
                                <label class="birthday"for="">Birthday</label>
                                    <input type="date" name="" id=""><br>
                                <input type="password" name="" placeholder="Password" required><br>
                                <input type="password" name="" placeholder="Confirm Password" required><br>
                        </div>

                    </div>
                                <br> <br>
                                <div class="register-section">
                                    <div class="button-div text-center">
                                    <input type="submit" name ="FORMRegister" value="REGISTER" class="btn-register">
                                    </div>
                                </form>

                                <div class="suggestion">
                                    <p class="account-message">Already Have an account? <a href="#"><span class="login-link">Log in</span></a></p>
                                </div>
                            </form>
                        </div>

                </div>


            </div>

        </div>

</body>
</html>

<?php

?>