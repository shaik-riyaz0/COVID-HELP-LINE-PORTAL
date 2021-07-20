<?php
if ($_SERVER['REQUEST_METHOD']=='POST')
{
$email=$_POST['mail'];
$user=$_POST['user_name'];
$pass=$_POST['passwordd'];
$servername="localhost";
$username="root";
$password="";
$database="covid";
$con=mysqli_connect($servername,$username,$password,$database);
$rel="INSERT INTO `sign` (`mail`, `user`, `pass`) VALUES ('$email', '$user', '$pass')";
$d=mysqli_query($con,$rel);
if($d)
{
echo "sucessfully done";
}
}
?>