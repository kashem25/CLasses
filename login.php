<?php include('header.php'); ?>
 
            <div class="login-body">
               <div class="container">
                 <div class="row">
                    <div class="col-md-6">
                        <p> Welcome to my Ecommers site LognIn please!</p>
                    </div>
                    <div class="col-md-6">
                       <p> New member? <a href="signup.php">Register</a> here</p>
                        
                    </div>
                     
                 </div>
                  
               <div class="login-part">
                 <div class="row">
                    <div class="col-md-6">
                      <form method="post" action="function.php">
                      
                       <label>please put your email or phone number</label> <br>
                       <input type="text" required name="username"> <br>
                       <label>Password</label> <br>
                       <input type="password" name="password" required>
                      </div>
                    <div class="col-md-6">
                     <div class="all-log-bnt">
                      <button class="bg-orange" type="submit" name="login">LogIn</button>
                 </form>
                    
                       <p> or login with</p>
                       
                        <a class="bg-fb" href="#">Facebook</a> <br/>
                        <a class="bg-google" href="#">Google</a>
                        
                   </div>
                     </div>
                     
                 </div>
                  
                   
               </div>
               </div>
                
            </div>
       
        <div class="footer">
           <div class="container">
               <div class="row">
                  <div class="col-md-4">
                    <h1>INFORMATION</h1>
                    <ul>
                        <li> <a href="#">About Us</a></li>
                        <li> <a href="#">Contact us</a></li>
                        <li> <a href="#">More prodycts</a></li>
                        <li> <a href="#">Customer service</a></li>
                        <li> <a href="#">Advance search</a></li>
                    </ul>
                  </div>
                   
                  <div class="col-md-4">
                    <h1>Why Buy from Us</h1>
                    <ul>
                        <li> <a href="#">About Us</a></li>
                        <li> <a href="#">Contact us</a></li>
                        <li> <a href="#">More prodycts</a></li>
                        <li> <a href="#">Customer service</a></li>
                        <li> <a href="#">Advance search</a></li>
                    </ul>
                  </div>
                   
                  <div class="col-md-4">
                   <div class="contact">
                    <h1>Find Us</h1>
                    <ul>
                        <li> <a href="#">About Us</a></li>
                        <li> <a href="#">Contact us</a></li>
                        <li> <a href="#">More prodycts</a></li>
                        <li> <a href="#">Customer service</a></li>
                        <li> <a href="#">Advance search</a></li>
                    </ul>
                   </div>
                   <div class="social-icon">
                     <ul> 
                      <li> <a href="#"><img  src="images/facebook.png"> </a></li>
                     <li> <a href="#"><img  src="images/Twitter.png"> </a></li>
                     <li> <a href="#"><img   src="images/Google%20plus.jpg"> </a></li>
                      <li><a href="#"><img   src="images/email.png"> </a></li>
                    </ul>   
                   </div> 
                  </div>
                   
               </div>
           </div> 
           <p> &copy; new developer 2018</p>
            
        </div>
        <!-- required js -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script> 
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/slicknav.min.js"></script>
        <script src="assets/js/active.js"></script>
        <script>
           $('.owl-carousel').owlCarousel({
    rtl:true,
   // loop:true,
    margin:10,
   // nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
            
            </script>
    </body>

</html>
