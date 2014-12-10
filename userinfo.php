<?php

function userinfo_name($uid, $fname) {
echo $fname;
}

function userinfo_contact_num($uid, $fname) {
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
where u.fname='$fname' and u.usr_id='$uid';");

while ($row = mysql_fetch_array($result)) {
echo $row{'contact_num'};
}
mysql_close($dbhandle);
}

function userinfo_email($uid, $fname) {
$username = "websysS147";
$password = "websysS147!!";
$hostname = "websys3.stern.nyu.edu";
$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");

$selected = mysql_select_db("websysS147",$dbhandle)
  or die("Could not select websysS147");

$result = mysql_query("select distinct u.email
from post p
inner join users u on p.fname=u.fname
where u.fname='$fname' and u.usr_id='$uid';");

while ($row = mysql_fetch_array($result)) {
echo $row{'email'};
}
mysql_close($dbhandle);
}

?>