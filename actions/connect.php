<?Php

$con=mysqli_connect("localhost","root","","votingsystem");

if(!$con){
  
    echo "connection failed";
    die(mysqli_error($con));
}




?>