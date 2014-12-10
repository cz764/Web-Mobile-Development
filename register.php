<?php
$first_name_inputted = $_POST["first_name"];
$last_name_inputted = $_POST["last_name"];
$email_inputted = $_POST["email"];
$password_inputted = $_POST["password"];

function store($first_name, $last_name, $email, $password) {

	$dbhost = 'websys3.stern.nyu.edu';
	$dbuser = 'websysS147';
	$dbpass = 'websysS147!!';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);

	if(! $conn )
	{
  		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db('websysS147');

	$sql = 'INSERT INTO users '.
       		'(fname,lname,email,password) '.
       
	// UNCOMMENT THE BELOW LINE BEFORE INTEGRATING INTO A FUNCTION

       'VALUES ("'.$first_name.'","'.$last_name.'","'.$email.'","'.$password.'")';

	// COMMENT THE BELOW LINE BEFORE INTEGRATING INTO A FUNCTION

 	//      'VALUES ( "guest", "XYZ", "lin@nyu.edu", "linpwd123" )';

	//mysql_select_db('test_db');

	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
 	 	die('Could not enter data: ' . mysql_error());
		header("Location: 6.html");
	}

	header("Location: 5.html");	
	mysql_close($conn);
}

store($first_name_inputted, $last_name_inputted, $email_inputted, $password_inputted);

?>