<!DOCTYPE html>
<html lang="en">

<head>

	<?php include('head.php'); ?>

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
          <h1 class="page-header">Dashboard</h1>
		  
		  <img src="http://fermentationriot.com/images/arduinoPID.jpg" alt="arduino" style="width:600px;height:344px;">
		  <li>
		  Στο πλαίσιο των Κύκλων Εκπαίδευσης έχει αναπτυχθεί το project Diyiot-car στο οποίο έχει κατασκευαστεί ένα αυτοκίνητο εξοπλισμένο με  υπολογιστή raspberry pi συνδεδεμένο με δύο μικροελεγχτές  arduino uno, οι οποίοι ελέγχουν 6 αισθητήρες (3 sonar, 1 ψηφιακό θερμόμετρο & 2 IR distance) και δύο μοτέρ κίνησης.  Το raspberry αποθηκεύει τις μετρήσεις σε απομακρυσμένο  server στο cloud. Επίσης έχει αναπτυχθεί web περιβάλλον για την έναρξη και λήξη της κίνησης του αυτοκινήτου καθώς και την παρουσίαση των μετρήσεων των αισθητήρων & της κίνησης του αυτοκινήτου.Το αυτοκίνητο  μπορεί να κινείται αυτόνομα σε επίπεδο χώρο αποφεύγοντας τα εμπόδια που υπάρχουν στην επιφάνεια κίνησης.
		</div>
	  </div>
	</div>
	
	
	



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
