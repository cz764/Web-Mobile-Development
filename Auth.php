<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Auth</title>
</head>
<body>
<?php

$ldaprdn  = test_input($_POST["netID"]);  // userid
$ldappass = test_input($_POST["password"]);  // associated password
$name = test_input($_POST["name"]);

//  Set the basedn
$basedn = "ou=people,dc=stern,dc=nyu,dc=edu";

// now build the string "uid=username,ou=people,dc=stern,dc=nyu,dc=edu"
$ldaprdn = "uid=" . $ldaprdn . "," . $basedn;

echo "Hello $name<br>";
echo "The ldaprdn is: ";
var_dump($ldaprdn);

// connect to ldap server with the userid and password
$ldapconn = ldap_connect("ldap-apps.stern.nyu.edu")
  or die("Could not connect to LDAP server.");
  
  var_dump($ldapconn);

if ($ldapconn) {

  // binding to ldap server
  $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

  // verify binding
  if ($ldapbind) {
    echo "LDAP bind successful...";
  } else {
    echo "LDAP bind failed...";
  }
 }
 
 function test_input($data)
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
 
?>


</body>
</html>