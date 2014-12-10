<?php
$email_inputted = $_POST["email"];
$password_inputted = $_POST["password"];
//echo "Inputted password: $password_inputted";

function check($email, $password_inputted) {
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
$result = mysql_query("SELECT usr_id,fname, email, password FROM users WHERE email='$email'");

//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {  
   //echo "ID:".$row{'id'}." Name:".$row{'model'}."Year: ". 
    //  $row{'year'}."<br>";
	$uid = $row['usr_id'];
/*   echo "USER ID: ".$row{'usr_id'};
   echo "<br>";
   echo "First Name: ".$row{'fname'};
   echo "<br>";
   echo "Password: ".$row{'password'}; 
   echo "<br>";
   echo "Successfully loggin! Redirecting to another page.";*/
   if ($password_inputted ==$row['password']) {
	  return true;
	}
	else {
//		echo "Login failed because of wrong password";
		return false;	   
	}
}
//echo "Login failed because email is not valid/ user does not exist.";
return false;
//close the connection
mysql_close($dbhandle);
}
$result = check($email_inputted, $password_inputted);

if ($result) {
//	echo "<meta http-equiv='refresh' content='5'; url= 'http://websys3.stern.nyu.edu/~cz764/websys/7.html'>";
	echo "true";
//	header("Location: 7.html");	
//	die();
}
else {
	echo "false";
//	header("Location: 2.html");	
//	die();
}

?>