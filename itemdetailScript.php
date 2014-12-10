<?php
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
$result = mysql_query("select distinct u.fname,u.usr_id,p.description,p.img
from post p
inner join users u on p.fname=u.fname
inner join category c on c.cat_name=p.cat_name
where c.cat_id=1 and p.po_id=1;");

//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {

echo "POSTER NAME:".$row{'fname'}." POSTER ID:".$row{'usr_id'}." DESCRIPTION:".$row{'description'}." PICTURE PATH:".$row{'img'};


}
//close the connection
mysql_close($dbhandle);
?>