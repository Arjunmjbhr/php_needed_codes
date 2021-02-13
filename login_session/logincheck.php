<?php

session_start();

$con = mysqli_connect("localhost","root","","accounts");

if($con){

    echo "Connection Successful";
}
else {
    echo "no connection";
}


if(isset($_POST['login'])){

$user=$_POST['user'];
$pass=$_POST['password'];

$sql= "SELECT * FROM `users` WHERE `username`='$user' and `password`='$pass'";


$query= mysqli_query($con, $sql);


while($row=mysqli_num_rows($query)){

  
    if($row == 1){


        echo "Login Success";
        $_SESSION['user']=$user;
        header('location: adminmain.php');
    }
    else{

        echo "Login Faild";
        header('location: adminlogin.php');
    }
}

}

?>