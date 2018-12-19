<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Startup Package</title>
		
		<!-- google fonts -->
		<!-- <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
		 -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- magnific-popup css  -->  
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!-- font awesome css -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        
    <!-- owl carousal css -->
     
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- slicknav css -->
        <link rel="stylesheet" href="assets/css/slicknav.min.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">  
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"> </script>   

    </head>
<body>
        
            <div class="container">
               <div class="row">
                <div class="col-md-4"><div class="logo">
                    <a href="index.php"><img src="images/logo.png"></a>
                </div></div>
                <div class="col-md-3">
                    <div class="login-form">
                        <form>
                                <p><input type="text" name="search"><button name="search" class="btn btn-primary">Search</button>
                            
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cart-option">
                    <img src="images/cart.png">
                     <a href="#">Cart Empty</a>
                    </div>
                </div>
                <div class="col-md-2">
                   <div class="logn-bnt">
                       <?php if( $_SESSION["username"] ) 
                       {
                       ?>
                         <a href="login.php" type="button" name="top-login" class="btn btn-success">Log Out</a>
                  
                       
                       <?php
                       }
                       else
                       {
                           ?>
                        <a href="login.php" type="button" name="top-login" class="btn btn-success">Log-In</a>
                     
                       <?php
                       }?>
                     
                      <h2 class="my-h2"> or</h2>
                       <a href="signup.php"> Create a new account</a>
                   </div>
                   
                    
                </div>
            </div>
            </div>
           <div class="menu">
             <div class="container">
           
            <div class="row">
               <div class="col-md-8">
                   <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="products.php">my profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Settings</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Cart</a></li>
  
 </ul>
               </div>
       
               </div>
                
            </div>
            </div>
        
<?php include('footer.php'); ?>