<?php
$dbhost = 'websys3.stern.nyu.edu';
$dbuser = 'websysS147';
$dbpass = 'websysS147!!';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db('websysS147');

$sql = 'INSERT INTO post '.
       '(expiry_date,prod_name,fname,cat_name,contact_num,price,description,views,img) '.

// UNCOMMENT THE BELOW LINE BEFORE INTEGRATING INTO A FUNCTION

       //'VALUES ("'.$first_name.'","'.$last_name.'","'.$email.'","'.$password.'")';

// COMMENT THE BELOW LINE BEFORE INTEGRATING INTO A FUNCTION

       'VALUES ((date_add(posted_date, interval 7 day)),"xyzzz","subodh","Books",515744949,16,"test post insert from PHP script",2,"")';

//mysql_select_db('test_db');

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
?>