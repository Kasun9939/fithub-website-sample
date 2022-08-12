<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ContactUs</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="C:\wamp64\www\fithub.lk\css\style.css">
</head>

<body>
	
	
<!--navbar-->
	 <div class="topnav" id="myTopnav">
  <a href="index.php" >Home</a>
  <a href="Categories.php">Categories</a>
  <a href="Products.php">Products</a>
  <a href="AboutUs.php">AboutUs</a>
  <a href="ContactUs.php" class="active">ContactUs</a>
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
	

 <div class="container">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">
                <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Join us to accept order</p>
  </div>
  <div class="row">
    
                  

                    <form id="contact-form" method="post" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="text" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="text" name="phone" class="form-control" placeholder="Please enter your phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" name="ok" class="btn btn-success btn-send" value="Send message">
                                </div>
                            </div>
                            <div class="row">
                              
                            </div>
                        </div>

                    </form>
	        
	    
                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->

	  
	  
	  
	  
	  
	  

	 <!-- social Section -->
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
    <!--end of social Section -->

    <!-- footer Section -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">K.P.D.SAMUJITH</a></p>
        </div>
    </section>
    <!--end of footer Section -->
		
	
	
	
</body>
</html>
