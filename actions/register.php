<?Php
include 'connect.php';

$username=$_POST['username'];
echo $username."<br>";
$password=$_POST['password'];
echo "$password.<br>";
$cpassword=$_POST['cpassword'];
echo "$cpassword"."<br>";
$phone=$_POST['phone'];
echo $phone."<br>";
$img=$_FILES['photo']['name'];
echo $img."<br>";
$tmp_img=$_FILES['photo']['tmp_name'];
echo $tmp_img."<br>";
$std=$_POST['std'];
echo $std."<br>";

if($password!=$cpassword){
    echo '<script>
      alert("password doesnot match")
      window.location="../partials/registartion.php";
    </script>';
    
}else{
    move_uploaded_file($tmp_img,"../uploads/$img");
    $sql="INSERT INTO `userdatas`(`username`, `mobile`, `password`, `photo`, `standard`, `status`, `votes`) VALUES('$username','$phone','$password','$img','$std',0,0)";
    $result=mysqli_query($con,$sql);

    if($result){
     echo '<script>
      alert("Registration Successfull");
      window.location="../";
    </script>';
    }
}

?>