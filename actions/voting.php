<?php
session_start();
include 'connect.php';

$votes=$_POST['groupvotes'];
$totalvotes=$votes + 1;

$gid=$_POST['groupid'];
$uid=$_SESSION['id'];



    $sqlvotes="UPDATE `userdatas` SET votes='$totalvotes' WHERE id='$gid'";
    $votes=mysqli_query($con,$sqlvotes);

    $sqlstatus="UPDATE `userdatas` SET status='1'  WHERE id='$uid'";
    $status=mysqli_query($con,$sqlstatus);

    if( $votes && $status){
         $getgroup="SELECT username,photo,votes,id FROM `userdatas` WHERE standard ='group'";
         $resultgroup=mysqli_query($con,$getgroup);
         $groups=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
         $_SESSION['groups']=$groups;
         $_SESSION['status']=1;

         echo '<script>
        alert("voting successful");
        window.location="../partials/dashboard.php"; 
        </script>';


    }else{
       echo '<script>
        alert("Technical error, try again later");
        window.location="../partials/dashboard.php";   
        </script>';
    }
    # code...



?>