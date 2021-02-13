<?php

session_start();
if(!isset($_SESSION['user'])){

    header('location:adminlogin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
    <?php include'links.php'; ?>
    <title>Admin Main</title>
</head>
<body>

<div class="container center-div shadow">
    <div class="heading text-center text-uppercase text-white mb-5">  

        Admin page launched and session page running success :)

           <?php echo $_SESSION['user'];  ?> login successful 

           <a href="logout.php"> <input type="button" class="btn btn-danger" value="Logout">   </a>

    </div>

</div>

</body>
</html>