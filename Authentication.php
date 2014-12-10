<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$ldaprdn  = $argv[1];  // userid
$ldappass = $argv[2];  // associated password
//  Set the basedn
$basedn = "ou=people,dc=stern,dc=nyu,dc=edu";
// now build the string "uid=username,ou=people,dc=stern,dc=nyu,dc=edu"
$ldaprdn = "uid=" . $argv[1] . "," . $basedn;
var_dump($ldaprdn);
// connect to ldap server with the userid and password

$ldapconn = ldap_connect("ldap-apps.stern.nyu.edu")
  or die("Could not connect to LDAP server.");

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
 ?>
 
</body>
</html>