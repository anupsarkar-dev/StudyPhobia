<?php 

?>
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

  <div class="container" id="nav_margin">
    <div class="navbar-header" name="shadow" >
      

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="glyphicon glyphicon-th" ></span></button>
    <a class="navbar-brand" href="#myPage"> STUDY PHOBIA</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li ><a  href="#services" >DOWNLOADS</a></li>
        <li><a href="#portfolio">TUTORIALS</a></li>
        <li><a href="#pricing">CODES</a></li>
        <li><a href="#contact">CONTACT</a></li>
       
          <li>

           

 <div  class="glyphicon glyphicon-user" id="myBtn" class="login_style"><?php 
 ?></div>



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

<div class="jumbotron text-center">
 <img src="<?php echo base_url(); ?>Resources/logo.png" class="img-responsive center-block"   >

 <h3>What would you like to learn or download?</h3>
</br>
  <form class="form-inline">
    <input type="text" class="form-control" style="height:46px"  size="50" placeholder="Tutorials,Reading Materials,Codes" required >
    <button type="button" class="btn btn-primary btn-sm outline"><span class="glyphicon glyphicon-search"></span>  Search</button>
  </form>

</br>

  <div class="container">
  <span><p1>Suggested:</p1></span>
  <span class="label label-default">PPT</span>
  <span class="label label-primary">C++ Codes</span>
  <span class="label label-success">Term Papers</span>
  <span class="label label-info">Java Notes</span>
  <span class="label label-warning">C Tutorials</span>
  <span class="label label-danger">Android</span>
</div>







</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid" >
   
  <div class="container">
    <h1 class="project-name">HOW STUDY PHOBIA WORKS</h1>
    <div id="timeline">
      <div class="timeline-item">
        <div class="timeline-icon">
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   width="21px" height="20px" viewBox="0 0 21 20" enable-background="new 0 0 21 20" xml:space="preserve">
<path fill="#FFFFFF" d="M19.998,6.766l-5.759-0.544c-0.362-0.032-0.676-0.264-0.822-0.61l-2.064-4.999
  c-0.329-0.825-1.5-0.825-1.83,0L7.476,5.611c-0.132,0.346-0.462,0.578-0.824,0.61L0.894,6.766C0.035,6.848-0.312,7.921,0.333,8.499
  l4.338,3.811c0.279,0.246,0.395,0.609,0.314,0.975l-1.304,5.345c-0.199,0.842,0.708,1.534,1.468,1.089l4.801-2.822
  c0.313-0.181,0.695-0.181,1.006,0l4.803,2.822c0.759,0.445,1.666-0.23,1.468-1.089l-1.288-5.345
  c-0.081-0.365,0.035-0.729,0.313-0.975l4.34-3.811C21.219,7.921,20.855,6.848,19.998,6.766z"/>
</svg>

        </div>
        <div class="timeline-content">
          <h2>LEARN </h2>
          <p>
           Get thousands of interactive up-to-date tutorials & reading materials to enhance your knowledge. 
          </p>
          <a href="#" class="btn" onclick="window.location='<?php echo site_url('welcome/tutorial'); ?>' ">Learn Now</a>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-icon">
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   width="21px" height="20px" viewBox="0 0 21 20" enable-background="new 0 0 21 20" xml:space="preserve">
<g>
  <path fill="#FFFFFF" d="M17.92,3.065l-1.669-2.302c-0.336-0.464-0.87-0.75-1.479-0.755C14.732,0.008,7.653,0,7.653,0v5.6
    c0,0.096-0.047,0.185-0.127,0.237c-0.081,0.052-0.181,0.06-0.268,0.02l-1.413-0.64C5.773,5.183,5.69,5.183,5.617,5.215l-1.489,0.65
    c-0.087,0.038-0.19,0.029-0.271-0.023c-0.079-0.052-0.13-0.141-0.13-0.235V0H2.191C1.655,0,1.233,0.434,1.233,0.97
    c0,0,0.025,15.952,0.031,15.993c0.084,0.509,0.379,0.962,0.811,1.242l2.334,1.528C4.671,19.905,4.974,20,5.286,20h10.307
    c1.452,0,2.634-1.189,2.634-2.64V4.007C18.227,3.666,18.12,3.339,17.92,3.065z M16.42,17.36c0,0.464-0.361,0.833-0.827,0.833H5.341
    l-1.675-1.089h10.341c0.537,0,0.953-0.44,0.953-0.979V2.039l1.459,2.027V17.36L16.42,17.36z"/>
</g>
</svg>

        </div>
        <div class="timeline-content right">
          <h2>ANYTIME , ANYWHERE , ANY DEVICE</h2>
          <p>
            Browse our responsive website simply form anymoment, anywhere also from Many mobile devices.
          </p>
          <a href="#" class="btn">Enjoy ! </a>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-icon">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   width="21px" height="20px" viewBox="0 0 21 20" enable-background="new 0 0 21 20" xml:space="preserve">
<path fill="#FFFFFF" d="M19.998,6.766l-5.759-0.544c-0.362-0.032-0.676-0.264-0.822-0.61l-2.064-4.999
  c-0.329-0.825-1.5-0.825-1.83,0L7.476,5.611c-0.132,0.346-0.462,0.578-0.824,0.61L0.894,6.766C0.035,6.848-0.312,7.921,0.333,8.499
  l4.338,3.811c0.279,0.246,0.395,0.609,0.314,0.975l-1.304,5.345c-0.199,0.842,0.708,1.534,1.468,1.089l4.801-2.822
  c0.313-0.181,0.695-0.181,1.006,0l4.803,2.822c0.759,0.445,1.666-0.23,1.468-1.089l-1.288-5.345
  c-0.081-0.365,0.035-0.729,0.313-0.975l4.34-3.811C21.219,7.921,20.855,6.848,19.998,6.766z"/>
</svg>

        </div>
        <div class="timeline-content">
          <h2>DOWNLOAD STUDY RESOURCES</h2>
          <p>
            StudyPhobia provides you thousand of study material such as lecture notes,ppt,pdf, term papers etc. Just download & share. 
            Also you can upload your own study materials
          </p>
          <a href="#" class="btn" onclick="window.location='<?php echo site_url('welcome/download'); ?>' ">Download</a>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline-icon">
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   width="21px" height="20px" viewBox="0 0 21 20" enable-background="new 0 0 21 20" xml:space="preserve">
<g>
  <path fill="#FFFFFF" d="M17.92,3.065l-1.669-2.302c-0.336-0.464-0.87-0.75-1.479-0.755C14.732,0.008,7.653,0,7.653,0v5.6
    c0,0.096-0.047,0.185-0.127,0.237c-0.081,0.052-0.181,0.06-0.268,0.02l-1.413-0.64C5.773,5.183,5.69,5.183,5.617,5.215l-1.489,0.65
    c-0.087,0.038-0.19,0.029-0.271-0.023c-0.079-0.052-0.13-0.141-0.13-0.235V0H2.191C1.655,0,1.233,0.434,1.233,0.97
    c0,0,0.025,15.952,0.031,15.993c0.084,0.509,0.379,0.962,0.811,1.242l2.334,1.528C4.671,19.905,4.974,20,5.286,20h10.307
    c1.452,0,2.634-1.189,2.634-2.64V4.007C18.227,3.666,18.12,3.339,17.92,3.065z M16.42,17.36c0,0.464-0.361,0.833-0.827,0.833H5.341
    l-1.675-1.089h10.341c0.537,0,0.953-0.44,0.953-0.979V2.039l1.459,2.027V17.36L16.42,17.36z"/>
</g>
</svg>

        </div>
        <div class="timeline-content right">
          <h2>NO MORE FEAR TO STUDY !!</h2>
          <p>
            With StudyPhobia say bye bye to fear of failing , phobia of study.
            With StudyPhobia say bye bye to fear of failing , phobia of study.
          </br>
          </br>
          </br>
          </p>
        
        </div>
      </div>

    </div>
  
    
        


</div>
</div>
<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>STUDY RESOURCES</h2>
  
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <img src="<?php echo base_url(); ?>Resources/img/icons/notes.png">
      <h5 style="font-size:130%"><i>LECTURE NOTES</i></h5>
      <p>Get thousands of class lecture notes</p>
    </div>
    <div class="col-sm-4">
      <img src="<?php echo base_url(); ?>Resources/img/icons/ppt.png">
      <h5 style="font-size:130%"><i>SLIDE SHOWS(PPT)</i></h5>
      <p>Get thousands of class ppt files</p>
    </div>
    <div class="col-sm-4">
      <img src="<?php echo base_url(); ?>Resources/img/icons/pdf.png">
      <h5 style="font-size:130%"><i>PDF</i></h5>
      <p>Get thousands of class pdf reading materials as well as books</p>
    </div>
  </div>
  
  <div class="row slideanim">
    <div class="col-sm-4">
      <img src="<?php echo base_url(); ?>Resources/img/icons/tm.png">
    <h5 style="font-size:130%"><i>TERM PAPERS</i></h5>
      <p>Get term papers which may help you </p>
    </div>
    <div class="col-sm-4">
      <img src="<?php echo base_url(); ?>Resources/img/icons/projects.png">
      <h5 style="font-size:130%"><i>CAPSTONE PROJECTS</i></h5>
      <p>Get cutting edge projects</p>
    </div>
    <div class="col-sm-4">
      <img src="<?php echo base_url(); ?>Resources/img/icons/upload.png">
     <h5 style="font-size:130%"><i>UPLOAD YOURS !</i></h5>
      <p>you can upload and share your reading materials here</p>
    </div>
  </div>
</br>
   <button type="button" class="btn btn-primary btn-sm outline  btn-block"  onclick="window.location='<?php echo site_url('welcome/download'); ?>' "> <span class="glyphicon glyphicon-th"></span>  Download All Reading Materials</button>

</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Tutorials</h2><br>
 
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="<?php echo base_url(); ?>Resources/images/2.png" alt="Paris" width="400" height="300">
        <p><strong>C Programming  </strong></p>
         <a href="#" class="btn"  onclick="window.location='<?php echo site_url('welcome/tutorial'); ?>' ">Learn Now</a>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="<?php echo base_url(); ?>Resources/images/3.png" alt="New York" width="400" height="300">
        <h1><strong>C++ Programmung</strong></h1>
         <a href="#" class="btn"  onclick="window.location='<?php echo site_url('welcome/tutorial'); ?>' ">Learn Now</a>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="<?php echo base_url(); ?>Resources/images/1.png" alt="San Francisco" width="400" height="300">
        <h1><strong>HTML</strong></h1>
         <a href="#" class="btn"  onclick="window.location='<?php echo site_url('welcome/tutorial'); ?>' ">Learn Now</a>
      </div>
    </div>


    <div class="container">

  
  </div>
  </div><br>

  <div class="container">

  <button type="button" class="btn btn-primary btn-sm outline  btn-block" onclick="window.location='<?php echo site_url('welcome/tutorial'); ?>' "> <span class="glyphicon glyphicon-th"></span>  Browse All Tutorials</button>

  </div>
  </br>
  <h2>News Feeds</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"New awesome Android Tutorials coming soon!"<br><span style="font-style:normal;">15 August ,2016</span></h4>
      </div>
      <div class="item">
        <h4>"Lovely Professional University soon joining with us!!"<br><span style="font-style:normal;">17 Nov 2016</span></h4>
      </div>
      <div class="item">
        <h4>"StudyPhobia going to organize a Coding Competition"<br><span style="font-style:normal;">18 jan 2017</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid text-center">
  <h2>CODE ARENA</h2>
  
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
            <h5 style="font-size:130%"><i>C Programs</i></h5>
      <p>Get thousands of C Codes</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
       <h5 style="font-size:130%"><i>C++ Codes</i></h5>
      <p>Get thousands of C++ Codes/Programs</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
       <h5 style="font-size:130%"><i>Raptor/Algorithm </i></h5>
      <p>Get thousands of class Raptor Codes/Programs</p>
    </div>
  </div>
  
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
       <h5 style="font-size:130%"><i>Java Programs</i></h5>
      <p>Get Java Codes/Programs </p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
       <h5 style="font-size:130%"><i>Android Programs</i></h5>
      <p>Get cutting edge Android Codes/Programs</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-upload logo-small"></span>
       <h5 style="font-size:130%"><i>Upload Code</i></h5>
      <p>you can upload and share your Codes here</p>
    </div>
  </div>
</br>
  <button type="button" class="btn btn-primary btn-sm outline  btn-block"  onclick="window.location='<?php echo site_url('welcome/codes'); ?>' "> <span class="glyphicon glyphicon-th"></span>  Browse All Codes/Programs</button>

</div>
    
  



<div class="container-fluid bg-3 text-center">
  <h1>Join The Crowd</h1><br>
  <h5>StudyPhobia has impacted over a million students from 237  </h5>
    <h5>countries.Read how these students learn by doing</h5>
    <h5> with Code School courses and screencasts. </h5>
</br>
</br>
</br>
  <div class="row">
    <div class="col-sm-4">
      <p>“I had never tried to learn code before out of fear that I wasn’t ‘techy enough’ and probably not smart enough — I was a Mathlete, but I spent most of my time making doodles with the DRAW function of my TI89. Every time I finish a Code School lesson, I feel like I prove that fear wrong. I truly appreciate you making an accessible resource for the sake of all."</p>
    </br>
      <img src="<?php echo base_url(); ?>Resources/anup.jpg" alt="Image" class="img-circle" width="140" height="140">

      <h5>Anup Sarkar</h5>
    </div>
    <div class="col-sm-4">
      <p>“StudyPhobia has provided me the foundational knowledge I need to start planning my own web applications. I am passionate about programming, and actually started a career in Ruby on Rails development thanks to Code School. Solving problems and making lives easier with code is really exciting. Thanks for providing great material and making a real change in people’s lives!” </p>
    </br>
      <img src="<?php echo base_url(); ?>Resources/rohit.jpg" alt="Image" class="img-circle" width="140" height="140">

      <h5>Rohit Kashyap</h5>
    </div>
    <div class="col-sm-4">
      <p>“StudyPhobia allowed me to leave my dead-end job of 11 years and find a great job as a front-end/UI developer. I still keep my subscription active and enjoy the variety of courses you offer. Grateful for sites like this that teach people real-world skills in a market that is highly in demand.Thanks for providing great material and making a real change in people’s lives!” </p>
    </br>
  
      <img src="<?php echo base_url(); ?>Resources/nishant.jpg" alt="Image" class="img-circle" width="140" height="140">
      <h5>Nishant</h5>
    </div>
  </div>
</div>




















<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Jalandar,Punjab,India</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 9915066564</p>
      <p><span class="glyphicon glyphicon-envelope"></span> studyphobia@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="googleMap" style="height:400px;width:100%;"></div>

<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD_OCXAE1KPKaE_sSG-HGNJHRRhUQTjLtk"></script>
<script>
var myCenter = new google.maps.LatLng(31.253752, 75.690861);

function initialize() {
var mapProp = {
  center:myCenter,
  zoom:12,
  scrollwheel:false,
  draggable:false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

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


