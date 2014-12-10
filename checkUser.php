<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>check users</title>
</head>

<body>
<?php
$email_inputted = $_POST["email"];
$password = $_POST["password"];

function check($email) {
$username = "websysS147";
$password = "websysS147!!";
$hostname = "websys3.stern.nyu.edu"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("websysS147",$dbhandle)
  or die("Could not select websysS147");

//execute the SQL query and return records
$result = mysql_query("SELECT usr_id,fname, email, password FROM users WHERE email=$email");

//fetch tha data from the database
$uid = $row['usr_id'];
if ($uid == "") {  
	return true;
}
return false;

//close the connection
mysql_close($dbhandle);
}


?>
</body>
</html>