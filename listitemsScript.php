<?php
$category_name = $_POST[""];

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
$result = mysql_query("select po_id,prod_name,posted_date,(date_add(posted_date, interval 7 day)) expiry_date,u.fname,u.usr_id,price,views
from post p inner join users u on p.fname=u.fname
where cat_name='Books';");

//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {

echo "POST ID:".$row{'po_id'}." BOOK NAME:".$row{'prod_name'}." POST DATE:".$row{'posted_date'}." EXPIRY DATE:".$row{'expiry_date'}." POSTER NAME:".$row{'fname'}.
" POSTER ID:".$row{'usr_id'}." PRICE:".$row{'price'}." VIEWED:".$row{'views'};


}
//close the connection
mysql_close($dbhandle);
?>