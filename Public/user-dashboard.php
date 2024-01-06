<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
<body>
<?php 
    if(isset($_SESSION['user-account'])){
        echo "Welcome ".$_SESSION['user-account'];
    }
    
    ?>
</body>
</html>