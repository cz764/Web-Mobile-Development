<?php

$username = "websysS147";
$password = "websysS147!!";
$hostname = "websys3.stern.nyu.edu";
$format = 'json';

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
 or die("Unable to connect to MySQL");

//select a database to work with
$selected = mysql_select_db("websysS147",$dbhandle)
  or die("Could not select websysS147");

//execute the SQL query and return records
$result = mysql_query("select po_id,prod_name,views,price
from post p inner join users u on p.fname=u.fname
where cat_name='$cn';");

$posts=array();
if(mysql_num_rows($result)) {
	while($post = mysql_fetch_assoc($result)) {
		$posts[] = array('post'=>$post);
	}
}

// output in necessary format
if($format == 'json') {
	header('Content-type: application/json');
	echo json_encode(array('posts'=>$posts));
}
else {
	header('Content-type: text/xml');
	echo '<posts>';
	foreach($posts as $index => $post) {
      if(is_array($post)) {
        foreach($post as $key => $value) {
          echo '<',$key,'>';
          if(is_array($value)) {
            foreach($value as $tag => $val) {
              echo '<',$tag,'>',htmlentities($val),'</',$tag,'>';
            }
          }
          echo '</',$key,'>';
        }
      }
    }
    echo '</posts>';
}

//fetch tha data from the database
//while ($row = mysql_fetch_array($result)) {
//	echo $row{'po_id'};
//	echo "<br>";
//}

//close the connection
mysql_close($dbhandle);


?>


</body>
</html>