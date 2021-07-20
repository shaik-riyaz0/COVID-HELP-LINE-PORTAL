<?php include 'mail.php'; ?>
<html>
<head>
<link rel="stylesheet" href="mailcss.css">
</head>
<body>
<?php echo $alert; ?>
<div class='contact-title'>
<h1><b>CO-WAR</b></h1>
<h2><b>We Are Always Ready To Serve You!</b></h2>
</div>
<div class="contact-form">
<form id="contact-form" method="post" action="">
<input name="name" type="text" class="form-control" placeholder="firstname lastname" required>
<br>
<input name="email" type="email" class="form-control" placeholder="xyz@gmail.com" required>
<br>
<textarea name="message" class="form-control" placeholder="......" row="4" requied>
</textarea><br>
<input type="submit" name="submit" class="form-control submit" value="SEND MESSAGE">
</form>
</div>
<script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
</body>
</html>