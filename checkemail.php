<?php
$email_inputted = $_POST["email"];

function check($email) {
$username = "websysS147";
$password = "websysS147!!";
$hostname = "websys3.stern.nyu.edu"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("websysS147",$dbhandle)
  or die("Could not select websysS147");

//execute the SQL query and return records
$result = mysql_query("SELECT usr_id,fname, email, FROM users WHERE email='$email'");

//fetch tha data from the database
$result = mysql_query("SELECT usr_id,fname, email, password FROM users WHERE email='$email'");

//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
//	echo "Email exists! and user id is: <br>"; 
//  echo "ID:".$row{'usr_id'};
   return true;
}
// email does not exists in the database
//echo "Email does not exist.";
return false;

//close the connection
mysql_close($dbhandle);
}

$is_email_exists = check($email_inputted);

if ($is_email_exists) {
	echo "Sorry the email $email_inputted is taken.";
}
else {
	echo "Email available!";
}

?>