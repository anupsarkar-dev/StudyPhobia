<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ultimate Study Materials Zone</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>Resources/css/site.min.css">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>Resources/favicon2.ico">
    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

    <link rel="stylesheet" href="<?php echo base_url(); ?>Resources/css/style.css">


   <link rel="stylesheet" href="<?php echo base_url(); ?>Resources/css/style2.css">

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




<div class="container-fluid text-center"  >

    <div class="row content" style="padding:0">

        <div class="col-sm-2 sidenav" style="padding:0" >
            <div class="well">
                <img src="<?php echo base_url(); ?>Resources/spMac.png" class="img-responsive center-block" height="160px" width="160px">
            </div>
            <nav class="navbar navbar-inverse" style="background-color:transparent;padding:0">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Navbar">
                            <span class="glyphicon glyphicon-menu-down" ></span>

                        </button>
                        <p class="text-primary">TOPICS</p>
                    </div>
                    <div class="collapse navbar-collapse" id="Navbar" style="padding:0">
                        <div class="list-group">
                            <a href="#" class="list-group-item text-center" style="background-color: #E9573F;color: white;font-size: 140%;font-style: italic;margin-bottom: 5px;">LIBRARIES</a>

                            <a href="#" class="list-group-item active">C++</a>
                            <a href="#" class="list-group-item">C</a>
                            <a href="#" class="list-group-item">Python</a>
                            <a href="#" class="list-group-item">JAVA</a>
                            <a href="#" class="list-group-item">Python</a>
                            <a href="#" class="list-group-item"><span class="badge badge-primary">8</span>Andoid</a>
                            <a href="#" class="list-group-item">HTML</a>
                            <a href="#" class="list-group-item">Microp. 8085</a>
                            <a href="#" class="list-group-item">Raptor</a>
                            <a href="#" class="list-group-item">Javascript</a>
                            <a href="#" class="list-group-item">PHP</a>
                            <a href="#" class="list-group-item"><span class="badge badge-primary">20</span>None</a>
                            <a href="#" class="list-group-item">index</a>
                            <a href="#" class="list-group-item">History</a>
                            <a href="#" class="list-group-item">Loop</a>
                            <a href="#" class="list-group-item">HTML</a>
                            <a href="#" class="list-group-item">C++</a>
                            <a href="#" class="list-group-item"><span class="badge badge-primary">38</span>C</a>

                        </div>

                    </div>
                </div>
            </nav>
        </div>
        <div class="col-sm-8 text-left">

            <h4 class="bg-primary text-center">DOWNLOADS</h4>


            <div class="col-md-12">
                <ol class="breadcrumb breadcrumb-arrow">
                    <li><a href="#"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Library</a></li>
                    <li class="active"><span><i class="glyphicon glyphicon-download"></i> Download</span></li>
                </ol>
            </div>





</br>


</style>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

<style type="text/css">

.atag : hover
{
    color: grey;
}
.color-item
{
    background-color:transparent;
    border:1px solid black;
    margin:2px;
    color: black;
}
.atag
{
    color: black;
}
.color-item:hover
{
    background-color: #19B5FE;
    color: white;
}



</style>


<script type="text/javascript">
    $(document).ready(function(){
        $('.tooltip-demo').tooltip({
        selector: "a[rel=tooltip]",
        placement: "bottom"
})
 });
</script>



            <div class="color-wrap clearfix">
               <?php
   
 
            foreach ($upload as $item)
            {
                  $url=base_url();
     $name=$item->Name; 
     $file=$item->File_name;
     $category=$item->Category;
     $topic=$item->Topic;
     $course=$item->Course_name;
     $type=$item->type;
     $tag=$item->Tags;
     $date=$item->Date;
     $size=$item->Size;
     
 $tooltip='<p1>Caterory:' . $category . 
            '</p1></br><p1>Topic: ' . $topic .
            '</p1></br><p1>Tags: ' . $tag .
              '<p1></br></p1>Size: ' . $size .'KB' ;

                 echo '
                <div class="color-picker" >
                    <div class="color-item" >
                      <a href="" data-toggle="tooltip" class="atag" data-placement="bottom" title=" ' .$tooltip . ' " data-html="true"  rel="tooltip"  ><u>' .$name . ' </u></a>
                        <div class="container-fluid">
                        
                        </br>
                            <a href="'.$url.'download.php?filename='.$file.'
                            " class="button">
                                Download
                                <span class="glyphicon glyphicon-download-alt"></span></a>
                            </div>
                         </div>
                </div> ';
            }
 
               ?>


            </div>



















            <div class="row example-pagination">
                <div class="col-md-12">
                    <ul class="pager">
                        <li class="previous"><a href="#">Previous</a></li>
                        <li class="next"><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-2 sidenav">

            <nav class="navbar navbar-inverse" style="background-color:transparent;padding:0">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Navbar2">
                            <span class="glyphicon glyphicon-menu-down" ></span>

                        </button>
                        <p class="text-primary">ALL SUBJECTS</p>

                    </div>
                    <div class="collapse navbar-collapse" id="Navbar2" style="padding:0">
                        <div class="list-group">
                            <a href="#" class="list-group-item" style="background-color: #E9573F;color: white;font-size: 140%;font-style: italic;margin-bottom: 5px;">CATEGORIES</a>
                            <a href="#" class="list-group-item active">PPT</a>
                            <a href="#" class="list-group-item">PDF</a>
                            <a href="#" class="list-group-item">WORD</a>
                            <a href="#" class="list-group-item">Term Papers</a>
                            <a href="#" class="list-group-item">Projects</a>
                            <a href="#" class="list-group-item"><span class="badge badge-primary">8</span>Codes</a>
                            <a href="#" class="list-group-item">Snippets</a>
                            <a href="#" class="list-group-item">Lecture Notes</a>
                            <a href="#" class="list-group-item">Videos</a>
                            <a href="#" class="list-group-item">Javascript</a>
                            <a href="#" class="list-group-item">PHP</a>
                            <a href="#" class="list-group-item"><span class="badge badge-primary">20</span>None</a>
                            <a href="#" class="list-group-item">index</a>
                            <a href="#" class="list-group-item">History</a>
                            <a href="#" class="list-group-item">Loop</a>
                            <a href="#" class="list-group-item">HTML</a>
                            <a href="#" class="list-group-item">C++</a>
                            <a href="#" class="list-group-item"><span class="badge badge-primary">38</span>C</a>
                        </div>

                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
</div>


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


