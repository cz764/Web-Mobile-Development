<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Authentication</title>
</head>

<body>
<?php
// using ldap bind
$ldaprdn  = test_input($_POST["netID"]);  // userid
$ldappass = test_input($_POST["password"]);  // associated password
//  Set the basedn
$basedn = "ou=people,dc=stern,dc=nyu,dc=edu";
// now build the string "uid=username,ou=people,dc=stern,dc=nyu,dc=edu"
$ldaprdn = "uid=" . $ldaprdn . "," . $basedn;

echo "Hello ";
echo $name;
echo "<br>";

// connect to ldap server
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