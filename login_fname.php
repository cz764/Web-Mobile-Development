<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>
<body>
<?php

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
$result = mysql_query("SELECT usr_id FROM users WHERE fname='subodh'");

//fetch tha data from the database
while ($row = mysql_fetch_array($result)) { 
   //echo "ID:".$row{'id'}." Name:".$row{'model'}."Year: ". 
    //  $row{'year'}."<br>";
   echo "USER ID:".$row{'usr_id'};
}
//close the connection
mysql_close($dbhandle);

?>


</body>
</html>