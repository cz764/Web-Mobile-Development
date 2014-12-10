<?php

function listitems_id($cn) {
$username = "websysS147";
$password = "websysS147!!";
$hostname = "websys3.stern.nyu.edu";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");
echo "";

//select a database to work with
$selected = mysql_select_db("websysS147",$dbhandle)
  or die("Could not select websysS147");

//execute the SQL query and return records
$result = mysql_query("select po_id
from post p inner join users u on p.fname=u.fname
where cat_name='$cn';");

//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
	echo $row{'po_id'};
	echo "<br>";
}
//close the connection
mysql_close($dbhandle);
}

function listitems_name($cn) {
$username = "websysS147";
$password = "websysS147!!";
$hostname = "websys3.stern.nyu.edu";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");
echo "";

//select a database to work with
$selected = mysql_select_db("websysS147",$dbhandle)
  or die("Could not select websysS147");

//execute the SQL query and return records
$result = mysql_query("select prod_name
from post p inner join users u on p.fname=u.fname
where cat_name='$cn';");

//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
    $t = $row{'prod_name'};
        echo "<a href='9.php?t=$t&cn=$cn' class='title'>";
	echo $t;
	echo "</a><br>";
}
//close the connection
mysql_close($dbhandle);
}

function listitems_viewed($cn) {
$username = "websysS147";
$password = "websysS147!!";
$hostname = "websys3.stern.nyu.edu";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");
echo "";

//select a database to work with
$selected = mysql_select_db("websysS147",$dbhandle)
  or die("Could not select websysS147");

//execute the SQL query and return records
$result = mysql_query("select views
from post p inner join users u on p.fname=u.fname
where cat_name='$cn';");

//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {

	echo $row{'views'};
	echo "<br>";
}
//close the connection
mysql_close($dbhandle);
}

function listitems_price($cn) {
$username = "websysS147";
$password = "websysS147!!";
$hostname = "websys3.stern.nyu.edu";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");
echo "";

//select a database to work with
$selected = mysql_select_db("websysS147",$dbhandle)
  or die("Could not select websysS147");

//execute the SQL query and return records
$result = mysql_query("select price
from post p inner join users u on p.fname=u.fname
where cat_name='$cn';");

//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
	echo $row{'price'};
	echo "<br>";
}
//close the connection
mysql_close($dbhandle);
}

function listitems_description($cn) {
$username = "websysS147";
$password = "websysS147!!";
$hostname = "websys3.stern.nyu.edu";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");
echo "";

//select a database to work with
$selected = mysql_select_db("websysS147",$dbhandle)
  or die("Could not select websysS147");

//execute the SQL query and return records
$result = mysql_query("select description
from post p inner join users u on p.fname=u.fname
where cat_name='$cn';");

//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
	echo $row{'price'};
	echo "<br>";
}
//close the connection
mysql_close($dbhandle);
}

//listitems_id($category_name);

//listitems_name($category_name);

?>


</body>
</html>