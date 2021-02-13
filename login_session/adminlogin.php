<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
    <?php
    include 'links.php';
    ?>
    
    
    <title>Login System</title>
</head>
<body>
    <header>
    <div class="container center-div shadow ">

        <div class="heading text-center text-uppercase text-white mb-5">
        ADMIN LOGIN PAGE
        </div>    

        <div class="container row d-flex flex-row justify-content-center mb-5">
        <div class="admin-form shadow p-2">
        
        <form action="logincheck.php" method="POST">
        
        <div class="form-group">
        <label for="mail"> Email ID</label>
        <input type="email" name="user" value="" class="form-control" autocomplete="off">
        </div>


        <div class="form-group">
        <label for="mail"> password</label>
        <input type="password" name="password" value="" class="form-control"  autocomplete="off">
        </div>
        
        <input type="submit" class="btn btn-info" name="login" value="Login Now">
        
        
        </form>
        
        
        
        
        </div>
        
        </div>



    </div>
    </header>
</body>
</html>