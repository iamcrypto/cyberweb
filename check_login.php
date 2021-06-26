<?php
session_start();
$con=mysqli_connect('localhost','bitc_nouse','Great@pass','bitc_hello');

$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$user_id=mysqli_real_escape_string($con,$_POST['user_id']);
$image=mysqli_real_escape_string($con,$_POST['image']);

$_SESSION['USER_ID']=$user_id;
        

$res=mysqli_query($con,"select * from user where user_id='$user_id'");
$check=mysqli_num_rows($res);
        $row=mysqli_fetch_assoc($res);
        $_SESSION['NAME']=$row['name'];
        
if($check>0){

}else{
        mysqli_query($con,"INSERT INTO `user`(`name`,`email`, `image`,`user_id`) VALUES('$name','$email','$image','$user_id')");
        $_SESSION['NAME']=$name;
}

echo "done";
?>