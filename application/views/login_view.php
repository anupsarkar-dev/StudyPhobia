<!DOCTYPE html>
<html lang="en">
<head>
  <title>Study Phobia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url(); ?>Resources/bootstrap/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="<?php echo base_url(); ?>Resources/bootstrap/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>Resources/bootstrap/js/bootstrap.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

  <script src="<?php echo base_url(); ?>Resources/bootstrap/js/modernizr.js" type="text/javascript"></script>

    <link rel="stylesheet" href=" <?php echo base_url(); ?>Resources/css/style.css">
       <link rel="shortcut icon" href="<?php echo base_url(); ?>Resources/icon.ico">


  <link rel="stylesheet" href="<?php echo base_url(); ?>Resources/custom.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">

  <div class="container">
    <div class="navbar-header" name="shadow" >
      

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="glyphicon glyphicon-th" ></span></button>
    <a class="navbar-brand" href="#myPage"> STUDY PHOBIA</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" onclick="window.location='<?php echo site_url('welcome'); ?>' ">HOME</a></li>

        <li ><a  href="#services" onclick="window.location='<?php echo site_url('welcome/download'); ?>' ">STUDY MATERIALS</a></li>
        <li><a href="#portfolio" onclick="window.location='<?php echo site_url('welcome/tutorial'); ?>' ">TUTORIALS</a></li>
        <li><a href="#pricing" onclick="window.location='<?php echo site_url('welcome/codes'); ?>' ">CODES</a></li>

        <li><a href="#contact" onclick="window.location='<?php echo site_url('welcome/contact'); ?>' ">CONTACT</a></li>
       
          <li>

           

 <div  class="glyphicon glyphicon-user" id="myBtn" class="login_style"></div>



  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span>Login to StudyPhobia</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <div class="container ">
     <div class="row">
          
          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open("welcome/user_login", $attributes);?>
          <fieldset style="border:0">
              
               <div class="form-group">
               <div class="row colbox">
               <div >
                    <label for="txt_username" class="control-label"><span class="glyphicon glyphicon-user"></span> Username</label>
               </div>
               <div >
                    <input class="form-control" id="txt_username" name="txt_username" placeholder="Username" type="text" value="<?php echo set_value('txt_username'); ?>" style="width:48%" />
                    <span class="text-danger"><?php echo form_error('txt_username'); ?></span>
               </div>
               </div>
               </div>
               
               <div class="form-group">
               <div class="row colbox">
               <div >
               <label for="txt_password" class="control-label"> <span class="glyphicon glyphicon-qrcode"></span> Password</label>
               </div>
               <div  >
                    <input class="form-control" id="txt_password"  style="width:48%" name="txt_password" placeholder="Password" type="password" value="<?php echo set_value('txt_password'); ?>" />
                    <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
               </div>
               </div>
               </div>
                              
               <div class="form-group">
               <div >
                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Login" />
                   
               </div>
               </div>
        
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
         </fieldset>
     </div>
</div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#" style="color:red">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div>

 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>


       
       </li>
           <li> 
  
  





 
 <div  class="glyphicon glyphicon-log-in" id="myBtn" onclick="window.location='<?php echo site_url('welcome/register'); ?>' "></div>
  





        </li>
        <li> 
  
  





 
 <div  class="glyphicon glyphicon-cloud-upload" id="myBtn" onclick="window.location='<?php echo site_url('welcome/upload'); ?>' "></div>
  





        </li>


                   <li> 
  
  





 
 <div  class="glyphicon glyphicon-download" id="myBtn" onclick="window.location='<?php echo site_url('welcome/download'); ?>' "></div>
  





        </li>
      </ul>
    </div>
  </div>
</nav>
</br>
</br>


<div class="container">
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <?php echo $this->session->flashdata('verify_msg'); ?>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Connect To StudyPhobia Now </h4>
            </div>
            <div class="panel-body">


   
          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open("welcome/user_login", $attributes);?>
          <fieldset>
               <legend>Login</legend>
               <div class="form-group">
               <div class="row colbox">
               <div >
                    <label for="txt_username" class="control-label" style="padding-left:30px; "><span class="glyphicon glyphicon-user"> Username</label>
               </div>
               <div  <div style="padding-right:20px;padding-left:30px">
                    <input class="form-control" id="txt_username" name="txt_username" placeholder="Username" type="text" value="<?php echo set_value('txt_username'); ?>" />
                    <span class="text-danger"><?php echo form_error('txt_username'); ?></span>
               </div>
               </div>
               </div>
               
               <div class="form-group">
               <div class="row colbox">
               <div >
               <label for="txt_password" class="control-label" style="padding-left:30px;"><span class="glyphicon glyphicon-qrcode"> Password</label>
               </div>
               <div style="padding-right:20px;padding-left:30px">
                    <input class="form-control" id="txt_password" name="txt_password" placeholder="*******" type="password" value="<?php echo set_value('txt_password'); ?>" />
                    <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
               </div>
               </div>
               </div>
                              
               <div class="form-group">
               <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Login" />
                    <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-default" value="Cancel" />
               </div>
               </div>
          </fieldset>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
          </div>
     
</div>

 <div class="container">
          
          <p>Not a member? <a href="#" style="color:red">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
</div>
</div>

</hr>

<div class="container-fluid" >
    <footer class="container-fluid text-center">
        <a href="#myPage" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <div class="copy">
            <img src="<?php echo base_url(); ?>Resources/sp.png" alt="Image"  width="80" height="80">
</br>
            <p>The Ultimate Tutorial Zone &nbsp; | <a href="#" style="color:#000000"> <b>&nbsp;© StudyPhobia.com</b></a></p>


            <div class="buttons">
                <a class="twitter" href="#"><img src="<?php echo base_url(); ?>Resources/images/twitter.png"></a>
                <a class="facebook" href="#"><img src="<?php echo base_url(); ?>Resources/images/facebook.png"></a>
                <a class="dribble" href="#"><img src="<?php echo base_url(); ?>Resources/images/dribble.png"></a>
                <a class="rss" href="#"><img src="<?php echo base_url(); ?>Resources/images/rss.png"></a>
            </div>
        </div>
        <div class="clear"></div>


    </footer>
</div>
<script>
    $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });

        $(window).scroll(function() {
            $(".slideanim").each(function(){
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    })
</script>

</body>
</html>


