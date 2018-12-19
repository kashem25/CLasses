<?php
session_start();

?>
<?php include('head.php'); ?>
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
                       <?php if( $_SESSION["username"]) 
                       {
                       ?>
                         <a href="function.php?username=<?php echo $_SESSION["username"] ?>" type="button"  class="btn btn-success">Log Out</a>
                  
                       
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
    <a class="nav-link" href="products.php">Product</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Brand</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Cart</a></li>
    <li class="nav-item"><a class="nav-link" href="Contrat.php">Contact</a></li>
  
 </ul>
               </div>
       
               </div>
                
            </div>
            </div>
        