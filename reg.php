<html>
<head>
<link rel="stylesheet" href="regcss.css">
</head>
<body>
<a href="vac.php"><font color="yellow">Home</font></a>
<div id="one">
<?php
if ($_SERVER['REQUEST_METHOD']=='POST')
{
$name=$_POST['name'];
$age=$_POST['age'];
$gend=$_POST['gen'];
$phone=$_POST['phone'];
$aadh=$_POST['aadhar'];
$email=$_POST['mail'];
$servername="localhost";
$username="root";
$password="";
$database="covid";
$con=mysqli_connect($servername,$username,$password,$database);
$rel="INSERT INTO `form` (`name`, `age`, `gender`, `phone`, `aadhar`, `mail`) VALUES ('$name', '$age', '$gend', '$phone', '$aadh', '$email')";
$d=mysqli_query($con,$rel);
if($d)
{
echo '<strong>sucessfully registered</strong>';
}
else{
echo "failed to register";
}}
?>
</div>
<form method="post">
<div class="q"><center>
<label id="p">REGISTRATION FORM</label><br></center><br>
<label id="one">NAME</label>
<input type="text" name="name" class="n" placeholder="name" required>
<br><br><br>
<label id="one" >AGE</label><br>
<input type="number" class="a" name="age" min="7" max="40" step="1" placeholder="7-40" required>
<br><br>
<label id="one">GENDER</label>
<select name="gen" class="ge">
<option>---</option>
<option>MALE</option>
<option>FEMALE</option>
<option>OTHERS</options>
</select>

<br><br><br>
<label id="one">PHONE NUMBER</label>

<input type="phone" name="phone" class="pho" placeholder="10 digit number" required>
<br><br><br>
<label id="one">AADHAR NUMBER</label>
<input type="text" name="aadhar"  class="aa" placeholder="ur 12 digit number" required>
<br><br><br>
<label id="one">MAIL I'D</label>
<input type="email" name="mail" class="e" placeholder="xyz@gmail.com">
<br><br>
<button type="submit" name="submit">Register</button>
</div>
</body>
</html>
