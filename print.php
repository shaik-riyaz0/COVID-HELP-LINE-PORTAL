<html>
<head>
<style>
body{
background-image:url('bground.jpg');
background-size:cover;
background-repeat:no-repeat;
background-position:relative;
opacity:3.0;
}
.on{
background-color:rgb(0,0,0,0.5);
margin:180px;
margin-right:200px;
margin-left:970px;
padding:12px;
width:20%;
margin-top:80px;
border-radius:10px;
box-shadow:1px 1px;
}
.n{
background-color:rgb(0,0,0,0.5);
margin:180px;
margin-right:200px;
margin-left:20px;
padding:12px;
width:20%;
margin-top:80px;
border-radius:10px;
box-shadow:1px 1px;
color:gold;
font-size:17px;
	
}
button:hover{
border-radius:10px;
border:2px solid gold;
background-color:rgb(0,0,0,0.5);
color:white;

}
#one{
color:yellow;
}
a:link,a:visited{
text-decoration:none;
border-radius:12px;
}
</style>
</head>
<body>
<a href="vac.php"><h3>Home</h3></a>
<div class="on">
<form method="post">
<label id="one"><b>ENTER UR PHONE NUMBER</b></label>
<input type="phone" name="phone" class="p"><br><br>
<button type="submit">SUBMIT</button>
<button onclick="window.print()">Print This Page</button>
</div>

<div class="n">
<?php
echo "CO-WAR<br>";
if ($_SERVER['REQUEST_METHOD']=='POST')
{
$phno=$_POST['phone'];
$servername="localhost";
$username="root";
$password="";
$database="covid";
$con=mysqli_connect($servername,$username,$password,$database);
$rel="SELECT * FROM `form` WHERE phone = $phno";
$d=mysqli_query($con,$rel);

if($r=mysqli_fetch_array($d)){

echo "NAME: ".$r["name"]."<br>AGE: ".$r["age"]."<br>PHONE NO: ".$r["phone"]."<br>AADHAR NO: ".$r["aadhar"]."<br>MAIL: ".$r["mail"];
}
else{
echo "Your <b>NOT</b> Registered";
}
}
?>


</div>

</form>
</body>
</html>