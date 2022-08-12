

<?php 


include('../fithub.lk/config/constant.php');



?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	
 
  <!--navbar-->

 <div class="topnav" id="myTopnav">
  <a href="<?php echo SITEURL ?>">Home</a>
  <a href="<?php echo SITEURL ?>Categories.html">Categories</a>
  <a href="<?php echo SITEURL ?> products.html" >Products</a>
  <a href="<?php echo SITEURL ?>AboutUs.html">AboutUs</a>
  <a href="<?php echo SITEURL ?>ContactUs.html">ContactUs</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
 </div>

<div style="padding-left:16px">
  <h2></h2>
  <p></p>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
  
   <!--end of navbar-->