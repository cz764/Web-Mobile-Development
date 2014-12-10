<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Posting Detail</title>
<link href="../jquery-mobile/jquery.mobile.theme-1.3.0.min.css" rel="stylesheet" type="text/css">
<link href="../jquery-mobile/jquery.mobile.structure-1.3.0.min.css" rel="stylesheet" type="text/css">
<script src="../jquery-mobile/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="../jquery-mobile/jquery.mobile-1.3.0.min.js" type="text/javascript"></script>
</head>

<body>

<?php include 'itemdetail.php'; $t = $_GET['t']; $cn = $_GET['cn'];
?>

<div data-role="page" id="page9">
  <div data-role="header" data-theme="b"><a href="8.php?cn=Books" data-role="button" data-icon="back" style="position:absolute;top:0;left:0;height: 1.5em;">Back</a>
      <h1 style="font-size: x-small;" onclick="location.reload();">NYU Online Market</h1>
  <a href="1.html" data-role="button" style="position:absolute; right:0;top:0;height: 1.5em;">Log out</a>  </div>
    <div data-role="content" style="font-size: x-small;">
    <div class="ui-grid-a">
      <div class="ui-block-a">Title</div>
      <div class="ui-block-b"><?php echo $t ?></div>
      
      <div class="ui-block-a">Date(posting)</div>
      <div class="ui-block-b"><?php itemdetail_posted_date($t, $cn) ?></div>
      
      <div class="ui-block-a">Date(Expire)</div>
      <div class="ui-block-b"><?php itemdetail_expiry_date($t, $cn) ?> </div>
      
      <div class="ui-block-a">Name</div>
      <div class="ui-block-b"><a href="10.php?fname=<?php itemdetail_fname($t, $cn) ?>&uid=<?php itemdetail_user_id($t, $cn)?>" id="firstname"><?php itemdetail_fname($t, $cn) ?> </a></div>
      <div class="ui-block-a">Contact</div>
      <div class="ui-block-b"><?php itemdetail_contact($t, $cn) ?> </div>
    </div>
    <div class="ui-grid-a">
      <div class="ui-block-a">Price wanted</div>
      <div class="ui-block-b"><?php itemdetail_price($t, $cn) ?> </div>
      
      <div class="ui-block-a">#viewed</div>
      <div class="ui-block-b"><?php itemdetail_views($t, $cn) ?> </div>
      
      <div class="ui-block-a">Description</div>
      <div class="ui-block-b"><?php itemdetail_description($t, $cn) ?> </div>
      
      <div class="ui-block-a">pictures</div>
      <div class="ui-block-b"><img src="twilight.jpg" width="250" height="200"/></div>
  
  </div>
  <div data-role="footer" data-theme="b" style="position:absolute; bottom:0;left:0;right:0;">
    <center><div data-role="controlgroup" data-type="horizontal"><a href="7.html" data-role="button" style="width: 9em; height: 3em; font-size: x-small;">Categories</a><a href="11.html" data-role="button" style="width: 5em;height: 3em; font-size: x-small;" >Post</a><a href="13.php?uid=2&fname=Chen" data-role="button" style="width: 10em;height: 3em; font-size: x-small;">My account</a></div> </center>
 
  </div>
</div>
</body>
</html>
