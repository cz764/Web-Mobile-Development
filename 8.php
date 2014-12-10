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
  $(".title").click(function(){
	var t = $(this).text();		// capture the title of the posting
	var cn = <?php echo $cn ?>;
//	window.location.assign(		"http://www.stern.nyu.edu/~cz764/websys/9.php?t="+t + "&cn="+cn);
        window.location = "9.php?t=" + t + "&cn=" + cn;
  });

});

</script>
<?php include 'listitems.php'; $cn = $_GET['cn'];?>
<div data-role="page" id="page8">
  <div data-role="header" data-theme="b"><a href="7.html" data-role="button" data-icon="back" style="position:absolute;top:0;left:0;height: 1.5em;">Back</a>
      <h1 style="font-size: x-small" onclick="location.reload();">NYU Online Market</h1>
    <h2>Posting of <?php echo $cn?></h2>
    <a href="1.html" data-role="button" data-icon="home" style="position:absolute; right:0;top:0;height: 1.5em;">Log out</a>
  </div>
    <div data-role="content" style="font-size: x-small;">
    <div class="ui-grid-c">
      <div class="ui-block-a">ID</div>
      <div class="ui-block-b">Name</div>
      <div class="ui-block-c">Price wanted</div>
      <div class="ui-block-d">#viewed</div>
      <div class="ui-block-a"><?php listitems_id($cn) ?></div>
      <div class="ui-block-b"><?php listitems_name($cn) ?></div>
      <div class="ui-block-c"><?php listitems_price($cn) ?></div>
      <div class="ui-block-d"><?php listitems_viewed($cn) ?></div>
    
    </div>
  </div>
  <div data-role="footer" data-theme="b" style="position:absolute; bottom:0;left:0;right:0;">
    <center><div data-role="controlgroup" data-type="horizontal"><a href="7.html" data-role="button" style="width: 9em; height: 3em; font-size: x-small;">Categories</a><a href="11.html" data-role="button" style="width: 5em;height: 3em; font-size: x-small;" >Post</a><a href="13.php?uid=2&fname=Chen" data-role="button" style="width: 10em;height: 3em; font-size: x-small;">My account</a></div> </center>
 
  </div>
</div>
</body>
</html>
