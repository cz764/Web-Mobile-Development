<?php

$fname = "chen";                    // hard coding the logined user name!
$contact = $_POST['contact'];
$email = $_POST['email'];
$uid = "2";

$dbhost = 'websys3.stern.nyu.edu';
$dbuser = 'websysS147';
$dbpass = 'websysS147!!';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db('websysS147');

$sql = 'UPDATE post WHERE'.
       '(expiry_date,prod_name,fname,cat_name,contact_num,price,description,views,img) '.

// UNCOMMENT THE BELOW LINE BEFORE INTEGRATING INTO A FUNCTION

       'VALUES ("'.$expiry_date.'","'.$title.'","'.$fname.'","'.$cn.'", "'.$contact.'", "'.$price.'", "'.$description.'", "'.$views.'", "'.$img.'")';

// COMMENT THE BELOW LINE BEFORE INTEGRATING INTO A FUNCTION

 //      'VALUES ((date_add(posted_date, interval 7 day)),"xyzzz","subodh","Books",515744949,16,"test post insert from PHP script",2,"")';

//mysql_select_db('test_db');

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
  echo "";
}
echo "Account ";
mysql_close($conn);
?>