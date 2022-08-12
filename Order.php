<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>order</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="C:\wamp64\www\fithub.lk\css\style.css">
</head>

<body>
	
 
  <!--navbar-->

 <div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <a href="Categories.php">Categories</a>
  <a href="Products.php" >Products</a>
  <a href="AboutUs.php">AboutUs</a>
  <a href="ContactUs.php">ContactUs</a>
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
	
    <!-- product search -->
    <section class="product-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="#" class="order">
                <fieldset>
                    <legend>Selected Food</legend>

                    
    
                    <div class="product-menu-desc">
                        <h3>Product Title</h3>
                        <p class="product-price">$2.3</p>

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Dulsara Samujith" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 9843xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. dulsarasamujith@gmail.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, william street,colombo" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

        </div> 
    </section>
    <!-- end of product serach -->

	
		  <!-- social Section  -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- End of social Section  -->

	
	 <!-- footer Section -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Developed By <a href="#">K.P.D.Samujith</a></p>
        </div>
    </section>
    <!-- End of footer Section -->
	
</body>
</html>
