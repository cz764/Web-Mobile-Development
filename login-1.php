<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>

<?php

//check (“email”, “password”) returns true/false	
$check_result = check($email_inputted, $password);
if (check_result) {
	echo "check_true";
	}
else {
	echo "check_false";
	}
?>

<body>
	<form method="post" action="login.php"> 
    Name: <input type="text" name="name">
    <br><br>
    Email: <input type="text" name="email">
    <br><br>
    Password: <input type="password" name="password">
    <br><br>   
    <input type="submit" name="login" value="Login"> 
    </form>
</body>
</html>