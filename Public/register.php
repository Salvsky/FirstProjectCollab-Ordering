<?php include('../config/connection.php');?>

<?php
    if(isset($_POST['FORMRegister'])){
        $firstname = trim($_POST['FORMFirstname']);
        $lastname = trim($_POST['FORMLastname']);
        $username = trim($_POST['FORMUsername']);
        $email = trim($_POST['FORMEmail']);
        $contact = trim($_POST['FORMContact']);
        $address = trim($_POST['FORMAddress']);
        $gender = $_POST['FORMGender'];
        $birthday = date('Y-m-d', strtotime($_POST['FORMBirthday']));
        $password = trim(md5($_POST['FORMPassword']));
        $confirmpassword = trim(md5($_POST['FORMConfirmpassword']));

        // && empty($firstname && $lastname && $username && $email && $contact && $address && $gender && $birthday && $password && $confirmpassword
       if($password === $confirmpassword && empty($firstname && $lastname && $username && $email && $contact && $address && $gender && $birthday && $password && $confirmpassword) == false){
            $queryInsert = "INSERT INTO tbl_users SET
                first_name = '$firstname',
                last_name = '$lastname',
                user_name = '$username',
                email = '$email',
                contact = '$contact',
                complete_address = '$address',
                gender = '$gender',
                birth_day = '$birthday',
                pass_word = '$password'
            ";
            
            $sqlInsert = mysqli_query($connection, $queryInsert);

            if($sqlInsert == true){
                echo ("<script>alert('Account Successfully Registered')</script>");
                header("location:".SITEURL.'Public/login.php');

            }else{
                echo ("<script>alert('Account Registration Failed')</script>");
            }
       }else{
        echo ("<script>alert('Account Registration Failed')</script>");
       }
    }

?>

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
        <div class="first-container">
        
            <!-- <div class="business-title-shadow">Street Bites</div> -->
            <div class="left-section">
                <img src="../images/logo.jpg" class="logo">
            </div>
            <div class="right-section">
                <div class="business-title"><p class="title-name">Street Bites</p></div>
            </div>
        </div>

        <div class="main-content">
            <div class="wrapper">

                <div class="signup-form">
                    <div class="page-title text-center">
                        SIGN UP NEW USER
                    </div>

                    <div class="messages text-center">
                        
                    </div>

                    <div class="main-form">
                        <div class="left-form">
                            <form action="#" method="POST">
                                <input type="text" name="FORMFirstname" placeholder="Firstname" required> <br>
                                <input type="text" name="FORMLastname" placeholder="Lastname" required> <br>
                                <input type="text" name="FORMUsername" placeholder="Username" required><br>
                                <input type="password" name="FORMPassword" placeholder="Password" required><br>
                                <input type="password" name="FORMConfirmpassword" placeholder="Confirm Password" required><br>
                                
                        </div>

                        <div class="right-form text-center">
                                <label for="" class="gender">Gender</label>
                                    <input type="radio" name="FORMGender" value="Male">Male
                                    <input type="radio" name="FORMGender" value="Female">Female <br>
                                <label class="birthday"for="">Birthday</label>
                                    <input type="date" name="FORMBirthday" id=""><br>
                                <div class="email-contact">
                                <label for="" class="label-email">Email</label>
                                <input type="email" name="FORMEmail" required><br>

                                <label for="" class="label-contact">Contact</label>
                                <input type="text" name="FORMContact" required><br>
                                </div>

                                <div class="div-label-address">
                                <label for="" class="label-address text-center">Address</label>
                                <textarea name="FORMAddress" class="textarea-address" id="" cols="43" rows="3" placeholder="" required></textarea><br>
                                </div>
                        </div>
                    </div>
                                <br> <br> <br>
                                <div class="register-section">
                                    <div class="button-div text-center">
                                    <input type="submit" name ="FORMRegister" value="REGISTER" class="btn-register">
                                    </div>
                                </form>

                                <div class="suggestion">
                                    <p class="account-message">Already Have an account? <a href="login.php"><span class="login-link">Log in</span></a></p>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>

</body>
</html>
