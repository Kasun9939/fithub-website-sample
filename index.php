<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home page</title>
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
<section class="product-search text-center">
        <div class="container">
            
            <form action="Product-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for product.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
	</section>
    <!-- end of product search  -->

 <h1>The biggest suppliment shop in the country</h1> 
	
 <!--slideshow-->
<div class="bg-image img1"></div>
<div class="bg-image img2"></div>
<div class="bg-image img3"></div>
<div class="bg-image img4"></div>
<div class="bg-image img5"></div>
<div class="bg-image img6"></div>
	
<div class="bg-text">FIT HUB.lk</div>

<!--end of slideshow-->	   
	


	
    <!-- CAtegories Section Starts Here -->
	  <section class="categories">
        <div class="container">
            <h2 class="text-center"></h2>

            <a href="Category-products.html">
            <div class="box-3 float-container">
                <img src="images/shadow whey.jpg" alt="protien" class="img-responsive img-curve">

                <h3 class="float-text text-white">Whey protien</h3>
            </div>
				
            </a>

            <a href="Category-products.html">
            <div class="box-3 float-container">
                <img src="images/carnivo mass.jpg" alt="mass gainer" class="img-responsive img-curve">

                <h3 class="float-text text-white">Mass gainer</h3>
            </div>
				
            </a>

            <a href="Category-products.html">
            <div class="box-3 float-container">
                <img src="images/gost legend.png" alt="preworkout" class="img-responsive img-curve">

                <h3 class="float-text text-white">Pre-workouts</h3>
            </div>
            </a>

            <a href="Category-products.html">
            <div class="box-3 float-container">
                <img src="images/multi-vitamin-250x250.png" alt="multivitamin" class="img-responsive img-curve">

                <h3 class="float-text text-white">Multivitamins</h3>
            </div>
            </a>

            <a href="Category-products.html">
            <div class="box-3 float-container">
                <img src="images/app-creatine.jpg" alt="creatine" class="img-responsive img-curve">

                <h3 class="float-text text-white">Creatine</h3>
            </div>
            </a>

            <a href="Category-products.html">
            <div class="box-3 float-container">
                <img src="images/protien bar.jpg" alt="protien-bar" class="img-responsive img-curve">

                <h3 class="float-text text-white">Protien-bar</h3>
            </div>
            </a>
		  </div>
	</section>
    <!--end of Categories Section  -->
	

    <!-- product menu   -->
    <section class="product-menu">
        <div class="container">
            <h2 class="text-center">Products</h2>

            <div class="product-menu-box">
                <div class="product-menu-img">
                    <img src="images/carnivo mass.jpg" alt="carnivo mass" class="img-responsive img-curve">
                </div>

                <div class="product-menu-desc">
                    <h4>Musclemeds Carnivore Mass 6 Lbs</h4>
                    <p class="product-price">$65.1</p>
                    <p class="product-detail">
                        720 calories per scoop. 12g carbohydrates and 5g creatine.
                    </p>
                    <br>

                    <a href="Order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="product-menu-box">
                <div class="product-menu-img">
                    <img src="images/shadow whey.jpg" alt="shadow whey" class="img-responsive img-curve">
                </div>

                <div class="product-menu-desc">
                    <h4>DY SHADOW WHEY 2KG</h4>
                    <p class="product-price">$85.24</p>
                    <p class="product-detail">
                       containing over 23 grams of protein per scoop.Naturally high in BCAAs and glutamine.
 
                    </p>
                    <br>

                    <a href="Order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="product-menu-box">
                <div class="product-menu-img">
                    <img src="images/app-creatine.jpg" alt="creatine" class="img-responsive img-curve">
                </div>

                <div class="product-menu-desc">
                    <h4>APPLIED NUTRTION CREATINE (5O SERV)</h4>
                    <p class="product-price">$20.3</p>
                    <p class="product-detail">
                        Serving Size: 1 Scoop (5g)
Servings Per Container: 100

Amount per (5g) serving
Micronized Creatine Monohydrate 5000 mg


                    </p>
                    <br>

                    <a href="Order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="product-menu-box">
                <div class="product-menu-img">
                    <img src="images/multi-vitamin-250x250.png" alt="multi vitamin" class="img-responsive img-curve">
                </div>

                <div class="product-menu-desc">
                    <h4>APPLIED NUTRITION MULTI-VITAMIN COMPLEX (90 CAPSULES)</h4>
                    <p class="product-price">$35.31</p>
                    <p class="product-detail">
                        Take 1 tablet, 3 times daily with food.
Serving size: 1 Tablets
Serving per container: 90
                    </p>
                    <br>

                    <a href="Order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>
		</div>
			</section>
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
