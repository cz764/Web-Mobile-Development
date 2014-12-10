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
$(document).ready(function(){
  $(".category").click(function(){
	var t = $(this).text();		// capture the title of the posting
	alert(t);
	window.location.assign(		"http://www.stern.nyu.edu/~cz764/websys/9.php?t="+t);
  });

});

</script>
<?php include 'listitems.php'; $cn = $_GET['cn'];?>
<div data-role="page" id="page8">
  <div data-role="header"><a href="7.html" data-role="button" data-icon="back">Back</a>
    <h1>NYU Online Market</h1>
    <a href="1.html" data-role="button">Log out</a>
  </div>
  <div data-role="content">
    <div class="ui-grid-c">
      <div class="ui-block-a">ID</div>
      <div class="ui-block-b">Name</div>
      <div class="ui-block-c">Price wanted</div>
      <div class="ui-block-d">#viewed</div>
      <div class="ui-block-a"><?php listitems_id($cn) ?></div>
      <div class="ui-block-b"><a href="#" class="title"><?php listitems_name($cn) ?></a></div>
      <div class="ui-block-c"><?php listitems_price($cn) ?></div>
      <div class="ui-block-d"><?php listitems_viewed($cn) ?></div>
    
    </div>
  </div>
  <div data-role="footer">
    <center><div data-role="controlgroup" data-type="horizontal"><a href="#" data-role="button" style="width: 8.3em; height: 3em; font-size: medium;">Categories</a><a href="#" data-role="button" style="width: 8.3em;height: 3em;">Post</a><a href="#" data-role="button"style="width: 8.3em;height: 3em;">My account</a></div> </center>
  </div>
</div>
</body>
</html>
