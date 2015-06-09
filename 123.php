<!DOCTYPE html>
<html lang="en">

<head>

	<?php include('head.php'); ?>

	  <style>
      ul {         
          padding:0 0 0 0;
          margin:0 0 0 0;
      }
      ul li {     
          list-style:none;
          margin-bottom:25px;           
      }
      ul li img {
          cursor: pointer;
      }
      .modal-body {
          padding:5px !important;
      }
      .modal-content {
          border-radius:0;
      }
      .modal-dialog img {
          text-align:center;
          margin:0 auto;
      }
    .controls{          
        width:50px;
        display:block;
        font-size:11px;
        padding-top:8px;
        font-weight:bold;          
    }
    .next {
        float:right;
        text-align:right;
    }
      /*override modal for demo only*/
      .modal-dialog {
          max-width:500px;
          padding-top: 90px;
      }
      @media screen and (min-width: 768px){
          .modal-dialog {
              width:500px;
              padding-top: 90px;
          }          
      }
      @media screen and (max-width:1500px){
          #ads {
              display:none;
          }
      }
  </style>
</head>

<body id="page-top" class="index">

    <?php include('navbar.php'); ?>


  	<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="photos.php">Photos</a></li>
            <li><a href="team.php">Team Members</a></li>
            <li><a href="video.php">Video</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="design.php">Design</a></li>
            <li><a href="hardware.php">Hardware</a></li>
			</ul>
      
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="margin-top: 100px;">
          <h1 class="page-header">Our Team</h1>
        <div class="row" style="text-align:center; border-bottom:1px dashed #ccc;  padding:0 0 20px 0; margin-bottom:40px;">
            <h3 style="font-family:arial; font-weight:bold; font-size:30px;">
     
        <ul class="row">
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-174908-rocking-the-night-away-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-287182-blah-blah-blah-yellow-road-sign-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-460760-colors-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-461673-retro-party-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-514834-touchscreen-technology-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-916206-legal-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-1062948-nature-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-1471528-insant-camera-kid-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-2255072-relaxed-man-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-2360379-colors-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-2360571-jump-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-2361384-culture-for-business-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-2441670-spaghetti-with-tuna-fish-and-parsley-s.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-2943363-budget-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-3444921-street-art-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-3552322-insurance-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-3807845-food-s.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-3835655-down-office-worker-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-4619216-ui-control-knob-regulators-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-5771958-health-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-268693-businesswoman-using-laptop-outdoors-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-352207-search-of-code-s.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-247190-secret-email-xs.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
                <img class="img-responsive" src="images/photodune-682990-online-search-xs.jpg">
            </li>
          </ul>             
		</div>
	  </div>
	</div>
	
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">         
          <div class="modal-body">                
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
	



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>
