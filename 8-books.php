<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>BBS</title>
<link href="../jquery-mobile/jquery.mobile.theme-1.3.0.min.css" rel="stylesheet" type="text/css">
<link href="../jquery-mobile/jquery.mobile.structure-1.3.0.min.css" rel="stylesheet" type="text/css">
<script src="../jquery-mobile/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="../jquery-mobile/jquery.mobile-1.3.0.min.js" type="text/javascript"></script>
</head>

<body>
<script>

</script>
<?php include 'listitems.php';  $category_name = "Books"?>

<div data-role="page" id="page8">
  <div data-role="header"><a href="#" data-role="button" data-icon="back">Back</a>
    <h1>NYU Online Market</h1>
    <a href="#" data-role="button">Log out</a>
  </div>
  <div data-role="content">
    <div class="ui-grid-c">
      <div class="ui-block-a">ID</div>
      <div class="ui-block-b">Product Name</div>
      <div class="ui-block-c">Price wanted</div>
      <div class="ui-block-d">#viewed</div>
      
      <div class="ui-block-a"><?php listitems_id($category_name) ?></div>
      <div class="ui-block-b"><a href="#"><?php listitems_name($category_name) ?></a></div>
      <div class="ui-block-c"><?php listitems_price($category_name) ?></div>
      <div class="ui-block-d"><?php listitems_viewed($category_name) ?></div>
     
  
    </div>
  </div>
  <div data-role="footer">
    <center><div data-role="controlgroup" data-type="horizontal"><a href="#" data-role="button" style="width: 8.3em; height: 3em; font-size: medium;">Categories</a><a href="#" data-role="button" style="width: 8.3em;height: 3em;">Post</a><a href="#" data-role="button"style="width: 8.3em;height: 3em;">My account</a></div> </center>
  </div>
</div>
</body>
</html>
