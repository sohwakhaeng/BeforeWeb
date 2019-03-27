<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<p align="right">
<a href="main.php"><image src ="../logo.gif"></a>
<?php @session_start(); if ($userid) { 
    echo $usernick; ?>
<a href="sessionUnset.php"><image src="logout_1.png"></image></a>
<?php } else {?>
<a href="signIn.php"><image src="login_1.png"></image></a>
<?php }?>
<a href="signup.php"><image src="signUp_1.png"></image></a></p>
<p align="center"><image src="home.png" padding=30></image></p>
</body>
</html>