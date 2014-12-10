<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Post Success</title>
<link href="../jquery-mobile/jquery.mobile.theme-1.3.0.min.css" rel="stylesheet" type="text/css">
<link href="../jquery-mobile/jquery.mobile.structure-1.3.0.min.css" rel="stylesheet" type="text/css">
<script src="../jquery-mobile/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="../jquery-mobile/jquery.mobile-1.3.0.min.js" type="text/javascript"></script>
</head>

<body>
<?php 
    $t = $_GET['t'];
    $cn = $_GET['cn'];
?>    
    
<div data-role="page" id="page11">
  <div data-role="header" data-theme="b">
      <h1 style="font-size: x-small;" align="center" onclick="location.reload();">NYU Online Market</h1>
  <a href="1.html" data-role="button" style="position:absolute;top:0;left:0;height: 1.5em;">Logout</a>  </div>
  <div data-role="content">You have successfully uploaded an item.</div>
  <div align="center"><a href="9.php?t=<?php echo $t?>&cn=<?php echo $cn?>" data-role="button" style="width: 10em; height: 3em;">View the item</a>
  </div>
  <div id="display"></div>
  <div data-role="footer" data-theme="b" style="position:absolute; bottom:0;left:0;right:0;">
    <center><div data-role="controlgroup" data-type="horizontal"><a href="7.html" data-role="button" style="width: 9em; height: 3em; font-size: x-small;">Categories</a><a href="11.html" data-role="button" style="width: 5em;height: 3em; font-size: x-small;" >Post</a><a href="13.php?uid=2&fname=chen" data-role="button" style="width: 10em;height: 3em; font-size: x-small;">My account</a></div> </center>
 
  </div>
</div>
</body>
</html>
