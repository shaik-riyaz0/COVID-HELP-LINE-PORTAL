<?php
if ($_SERVER['REQUEST_METHOD']=='POST')
{
$user=$_POST['userr'];
$pass=$_POST['passw'];

$servername="localhost";
$username="root";
$password="";
$database="covid";
$con=mysqli_connect($servername,$username,$password,$database);
$rel="SELECT * from sign where user='$user' && pass='$pass'";
$d=mysqli_query($con,$rel);
$num=mysqli_num_rows($d);
if($num==1)
{
header('Location:gif.php');
}
else{
echo "failed to sign in";
}
}
?>