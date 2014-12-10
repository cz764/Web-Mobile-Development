<html>
<body>
<?php
// using ldap bind
$ldaprdn  = test_input($_POST["netID"]);    // ldap rdn or dn, user email
$ldappass = test_input($_POST["password"]);   // associated password
$name = test_input($_POST["name"]);

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