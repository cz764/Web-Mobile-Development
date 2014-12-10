<?php

function itemdetail_fname($t, $cn) {
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
$result = mysql_query("select distinct u.fname
from post p
inner join users u on p.fname=u.fname
inner join category c on c.cat_name=p.cat_name
where c.cat_name='$cn' and p.prod_name='$t';");

//fetch tha data from the database

while ($row = mysql_fetch_assoc($result)) {
echo $row{'fname'};
}
//close the connection
mysql_close($dbhandle);
}

function itemdetail_description($t, $cn) {
$username = "websysS147";
$password = "websysS147!!";
$hostname = "websys3.stern.nyu.edu";

$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");

$selected = mysql_select_db("websysS147",$dbhandle)
  or die("Could not select websysS147");

$result = mysql_query("select distinct p.description
from post p
inner join users u on p.fname=u.fname
inner join category c on c.cat_name=p.cat_name
where c.cat_name='$cn' and p.prod_name='$t';");

while ($row = mysql_fetch_assoc($result)) {
echo $row{'description'};
}

mysql_close($dbhandle);
}

function itemdetail_posted_date($t, $cn) {
$username = "websysS147";
$password = "websysS147!!";
$hostname = "websys3.stern.nyu.edu";

$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");

$selected = mysql_select_db("websysS147",$dbhandle)
  or die("Could not select websysS147");

$result = mysql_query("select distinct p.posted_date
from post p
inner join users u on p.fname=u.fname
inner join category c on c.cat_name=p.cat_name
where c.cat_name='$cn' and p.prod_name='$t';");

while ($row = mysql_fetch_assoc($result)) {
echo $row{'posted_date'};
}
mysql_close($dbhandle);
}

function itemdetail_expiry_date($t, $cn) {
$username = "websysS147";
$password = "websysS147!!";
$hostname = "websys3.stern.nyu.edu";

$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");

$selected = mysql_select_db("websysS147",$dbhandle)
  or die("Could not select websysS147");

$result = mysql_query("select distinct p.expiry_date
from post p
inner join users u on p.fname=u.fname
inner join category c on c.cat_name=p.cat_name
where c.cat_name='$cn' and p.prod_name='$t';");

while ($row = mysql_fetch_assoc($result)) {
echo $row{'expiry_date'};
}
mysql_close($dbhandle);
}

function itemdetail_contact($t, $cn) {
$username = "websysS147";
$password = "websysS147!!";
$hostname = "websys3.stern.nyu.edu";

$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");

$selected = mysql_select_db("websysS147",$dbhandle)
  or die("Could not select websysS147");

$result = mysql_query("select distinct p.contact_num
from post p
inner join users u on p.fname=u.fname
inner join category c on c.cat_name=p.cat_name
where c.cat_name='$cn' and p.prod_name='$t';");

while ($row = mysql_fetch_assoc($result)) {
echo $row{'contact_num'};
}
mysql_close($dbhandle);
}

function itemdetail_price($t, $cn) {
$username = "websysS147";
$password = "websysS147!!";
$hostname = "websys3.stern.nyu.edu";

$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");

$selected = mysql_select_db("websysS147",$dbhandle)
  or die("Could not select websysS147");

$result = mysql_query("select distinct p.price
from post p
inner join users u on p.fname=u.fname
inner join category c on c.cat_name=p.cat_name
where c.cat_name='$cn' and p.prod_name='$t';");

while ($row = mysql_fetch_assoc($result)) {
echo $row{'price'};
}
mysql_close($dbhandle);
}

function itemdetail_views($t, $cn) {
$username = "websysS147";
$password = "websysS147!!";
$hostname = "websys3.stern.nyu.edu";

$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");

$selected = mysql_select_db("websysS147",$dbhandle)
  or die("Could not select websysS147");

$result = mysql_query("select distinct p.views
from post p
inner join users u on p.fname=u.fname
inner join category c on c.cat_name=p.cat_name
where c.cat_name='$cn' and p.prod_name='$t';");

while ($row = mysql_fetch_assoc($result)) {
echo $row{'views'};
}
mysql_close($dbhandle);
}

function itemdetail_user_id($t, $cn) {
$username = "websysS147";
$password = "websysS147!!";
$hostname = "websys3.stern.nyu.edu";

$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");

$selected = mysql_select_db("websysS147",$dbhandle)
  or die("Could not select websysS147");

$result = mysql_query("select distinct u.usr_id
from post p
inner join users u on p.fname=u.fname
inner join category c on c.cat_name=p.cat_name
where c.cat_name='$cn' and p.prod_name='$t';");

while ($row = mysql_fetch_assoc($result)) {
echo $row{'usr_id'};
}
mysql_close($dbhandle);
}
?>