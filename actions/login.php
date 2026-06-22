<?php
session_start();
include 'connect.php';

$username=$_POST['username'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$std=$_POST['std'];

echo $username;
echo $phone;
echo $password;
echo $std;

$sql="SELECT * FROM `userdatas` WHERE username='$username' AND mobile='$phone' AND password='$password' AND standard='$std'";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
 echo "successful";

 $sqlgroup="SELECT username,photo,votes,id FROM `userdatas` WHERE standard ='group'";
 $resultgroup=mysqli_query($con,$sqlgroup);

 if(mysqli_num_rows($resultgroup)>0){
    //echo"voter list success retrieval";
    $groups=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
    $_SESSION['groups']=$groups;
 }

 $data=mysqli_fetch_array($result);
 $_SESSION['id']=$data['id'];
 $_SESSION['status']=$data['status'];
 $_SESSION['data']=$data;

 echo'<script>
    window.location="../partials/dashboard.php";
    </script>';

}else{
    echo'<script>
    alert("Invalid credentials");
    window.location="../";
    </script>';
}
    
