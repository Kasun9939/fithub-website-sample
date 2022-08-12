<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Products</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="C:\wamp64\www\fithub.lk\css\style.css">
</head>

<body>
		
 
  <!--navbar-->

 <div class="topnav" id="myTopnav">
  <a href="index.php">Home</a>
  <a href="Categories.php">Categories</a>
  <a href="Products.php" class="active" >Products</a>
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
   <!--  search section-->
    <section class="product-search text-center">
        <div class="container">
            
            <form action="Product-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for products.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- end of search section -->
	

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

                    <a href="Order.php" class="btn btn-primary">Order Now</a>
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

                    <a href="Order.php" class="btn btn-primary">Order Now</a>
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

INGREDIENTS
100% Micronized Creatine Monohydrate.
                    </p>
                    <br>

                    <a href="Order.php" class="btn btn-primary">Order Now</a>
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

                    <a href="Order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="product-menu-box">
                <div class="product-menu-img">
                    <img src="images/amino-2.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="product-menu-desc">
                    <h4>Optimum Nutrition Amino Energy</h4>
                    <p class="product-price">$20.3</p>
                    <p class="product-detail">
                        Mix up ESSENTIAL AMIN.O. ENERGY anytime you want a boost of energy, focus and muscle recovery support. 
                    </p>
                    <br>

                    <a href="Order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="product-menu-box">
                <div class="product-menu-img">
                    <img src="images/gost legend.png" alt="gost pre workout" class="img-responsive img-curve">
                </div>

                <div class="product-menu-desc">
                    <h4>Ghost Legend Pre Workout</h4>
                    <p class="product-price">$50.56</p>
                    <p class="product-detail">
                      All GHOST® products feature a 100% transparent label that fully discloses the dose of each active ingredient. 
                    </p>
                    <br>

                    <a href="Order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>


            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- end of product menu -->


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
