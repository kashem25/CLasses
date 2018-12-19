<?php include('header.php'); ?>

<div  class="container">
    <div class="user-area">
    <div class="row">
        
        <div class="col-md-2 ">
        
         <ul class="user-menu">
  <li class="nav-item">
    <a class="nav-link active" href="#">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Setings</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="gallery.php">Gallery</a></li>
    <li class="nav-item"><a class="nav-link" href="#">Cart</a></li>
    <li class="nav-item"><a class="nav-link" href="Contrat.php">Contact</a></li>
  
 </ul>
        </div>
         <!--hr class for divider only-->
        <div class="col-md-6 hr">
        <a href="#"><img src="images/profile2.jpg"></a>
        
        </div> 
        <div class="col-md-4 hr"> <div class="upload-section">
           
        <form action="#" method="post">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
             <br/>
    <input type="submit" value="Upload Image" name="submit">
</form></div> </div>
    </div>
   </div>
</div> 
<hr/>
<?php include('footer.php'); ?>
