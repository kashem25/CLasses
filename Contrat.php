<?php include('header.php'); ?>
    <body class="full-body"> 
         <div class="container">
        <div class="row"> 
        <div class="col-md-10 col-md-offset-2"> 
          <div class="contact_head">
        <form action="#" name="contact_form" onsubmit="return(valid());">
        <label> Your Name </label><br/>
      <input type="text" name="f_name" class="control" id="firstnumber" placeholder="First number" required><br><br>
   
  
     <label> Your  Contact Number </label><br/>
      <input type="tel" name="number" class="con_fm" id="Num_n_emai" placeholder="Phone Number -optional"> <br><br>
      <label> Your Email Address </label><br/>
      <input type="Email" name="email" class="con_fm" id="Num_n_emai" placeholder=" Your Email"> <br><br>
      <label> Write your Message Here </label> <br> 
     
      <textarea type=" test" name="report" class="Report" id="Message" placeholder=" Message Goes here"> </textarea> <br>
   
    <br>
    
      
    <button type="submit">Submit </button> 
       

  </form>
          <script>
            function valid(){
                if(document.contact_form.f_name.value=="")
                {
                    alert( 'please Enter your Phone number');
                return false;
                    
                   }
            }
            </script>
           </div>
           </div>
           </div>
           </div>
           
           
            
    <?php include('footer.php'); ?>
