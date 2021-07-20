

<html>
<head>
<link rel="stylesheet" href="logcss.css">
</head>
<body>
<form method="post" action="signup.php">
<a href="frontpage.php"<h3 id="e">Home</h3></a>

<div class="form">
  <div class="tab-header">
    <div class="active">Sign Up</div>
    <div>Sign In</div>
  </div>
  <div class="tab-content">
    <div class="tab-body active">
      <div class="form-element">
        <input type="text" placeholder="Email" name="mail">
      </div>
      <div class="form-element">
        <input type="text" placeholder="Username" name="user_name">
      </div>
      <div class="form-element">
        <input type="password" placeholder="Password" name="passwordd">
      </div>
      <div class="form-element">
        <button type="submit" name="submit">Sign Up</button>
       </div>
</form>
<form method="post" action="valid.php">	
    </div>
   
	
    <div class="tab-body">
      <div class="form-element">
        <input type="text" placeholder="Email / Username" name="userr"> 
      </div>
      <div class="form-element">
        <input type="password" placeholder="Password" name="passw">
      </div>
      <div class="form-element">
        <input type="checkbox" id="remember_me">
        <label for="remember_me">Remember me</label>
      </div>
      
        <button type="submit" name="submit1">Sign In</button>
      
    </div>
  </div>
</div>
</form>
<script>
let tabPanes = document.getElementsByClassName("tab-header")[0].getElementsByTagName("div");
 
for(let i=0;i<tabPanes.length;i++){
  tabPanes[i].addEventListener("click",function(){
    document.getElementsByClassName("tab-header")[0].getElementsByClassName("active")[0].classList.remove("active");
    tabPanes[i].classList.add("active");
    
    document.getElementsByClassName("tab-content")[0].getElementsByClassName("active")[0].classList.remove("active");
    document.getElementsByClassName("tab-content")[0].getElementsByClassName("tab-body")[i].classList.add("active");
  });
}
</script>

</body>