<?php include('header.php') ?>

               <div class="Register-part">
                  <form name="regi-form" class="regi-form-1" method="post" action="function.php">
                    
                 <div class="row">
                 
                
                     <div class="col-md-8 col-md-offset-2">
                      <div class="register-aria">
                          <div class="row">
                              <div class="col-md-6"><label>please put your email or phone number</label> <br>
                       <input type="text" placeholder=" create username" name="username" required> <br>
                       <label>Enter NewPassword</label> <br>
                         <input type="password" placeholder="choice a password" name="password" required> <br/>
                         <label> ReEnter Password</label> <br/>
                       <input type="password" name="password" placeholder="type password again" required> <br/>
                       <label>Date of Birth</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <label class="gender"> Gender</label> <br>
                         <input type="date" name="dof" required>  &nbsp;&nbsp; <select name="gender"> 
                                                            <option> Gender</option>
                                                            <option> Male</option>
                                                            <option> Female</option>
                                                             </select>
              </div>
                              <div class="col-md-6">  <label>Your Full Name</label> <br>
                         <input type="text" placeholder="your full name" name="name" required> <br/>
                         <label>Your Email</label> <br>
                         <input type="email" placeholder="enter your email" name="email" required> <br/>
                         <input type="checkbox" name="checkbox"> <p>I want to receive exclusive offers and promotions from This Site</p> <br/>
                         
                     <div class="bnt-register-page">
                      <button name="sign_up" class="rg-orange" href="#">Create My Account</button>
                      <p> By clicking "SIGN UP" I agree to <a href="#">sitePrivacy Policy</a></p>
                       <p> or signup with</p>
                       
                       
                        <a class="rg-fb" href="#">Facebook</a> <br/>
                        <a class="rg-google" href="#">Google</a>
                        
                   </div>
              </div>
                          </div>
                      </div>
                                
                    </div>
                  
                   
                 
                     
                    
               </div>
                </form>
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
