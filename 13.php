<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Detailed Contact Information</title>
<link href="../jquery-mobile/jquery.mobile.theme-1.3.0.min.css" rel="stylesheet" type="text/css">
<link href="../jquery-mobile/jquery.mobile.structure-1.3.0.min.css" rel="stylesheet" type="text/css">
<script src="../jquery-mobile/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="../jquery-mobile/jquery.mobile-1.3.0.min.js" type="text/javascript"></script>
</head>

<body>
<?php include 'userinfo.php'; 
 $uid= $_GET['uid'];
 $fname= $_GET['fname'];
?>

<div data-role="page" id="page10">
  <div data-role="header" data-theme="b">
      <h1 style="font-size: x-small" onclick="location.reload();">NYU Online Market</h1>
  <a href="9.php?t=Twilight&cn=Books" data-role="button" data-icon="back" style="position:absolute;top:0;left:0;height: 1.5em;">Back</a>
  <a href="1.html" data-role="button" style="position:absolute; right:0;top:0;height: 1.5em;">Logout</a> </div>
    <div data-role="content" style="font-size: x-small">
    <div class="ui-grid-a">
      <div class="ui-block-a">Name</div>
      <div class="ui-block-b"><?php userinfo_name($uid, $fname);?></div>
      <div class="ui-block-a">Telephone number</div>
      <div class="ui-block-b"><?php userinfo_contact_num($uid, $fname);?></div>
      
      <div class="ui-block-a">Email</div>
      <div class="ui-block-b"><?php userinfo_email($uid, $fname);?></div>
      
      <div class="ui-block-a">Description</div>
      <div class="ui-block-b">Available on Weekend</div>
    </div></div>
    <p align="center"><a href="14.html" data-role="button" style="width: 5em; height: 3em;">Edit</a></p>
  <div data-role="footer" data-theme="b" style="position:absolute; bottom:0;left:0;right:0;">
    <center><div data-role="controlgroup" data-type="horizontal"><a href="7.html" data-role="button" style="width: 9em; height: 3em; font-size: x-small;">Categories</a><a href="11.html" data-role="button" style="width: 5em;height: 3em; font-size: x-small;" >Post</a><a href="13.php?uid=2&fname=chen" data-role="button" style="width: 10em;height: 3em; font-size: x-small;">My account</a></div> </center>
 
  </div>
</div>
</body>
</html>
