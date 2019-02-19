
<?php include "head.php";
include "login.php";
?>
 <div id="myCarousel" class="carousel slide" style="position:relative;top:50px;border:solid #222222 5px;" data-ride="carousel"  data-interval="4000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>  
   </ol>

    <!-- Wrapper for slides -->
  <div class="carousel-inner" style="height:28em">
      <div class="item active">
        <img src="work0.png" alt="hackaton" style="width:100%;height:28em;">
      </div>

      <div class="item">
        <img src="work1.jpg" alt="handcrafts" style="width:100%;height:28em;">
      </div>
    <div class="item">
        <img src="work2.jpg" alt="all items" style="width:100%;height:28em;">
      </div>
  <div class="item">
        <img src="work3.jpg" alt="mats and saries" style="width:100%;height:28em;">
      </div>
<div class="item">
        <img src="work4.jpg" alt="" style="width:100%;height:28em;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
 <div class="wel ">
	<h1><u>Need A Job?...</u></h1>
	<p class="des"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   Then here is a plat form where you can communicate with the ownner and get a job..
	select the category to get a job click here to<center><a href="login_register.php" class="sig"> signup/login </a></center></p>
 </div>
 <div class="syc"><center><h1><u>select your category</u></h1></center></p></div>
	 <div class="container">
	 
	 <div class="row bg">
		<div class="col-md-4 col-xs-4">
		 <a href="#"data-toggle="modal" data-target="#mymodal"><img src="contractor.png" class="img-responsive imgresize img-thumbnail">
		 <center><b>Contractor</b></center> </a>
		</div>
		<div class="col-md-4 col-xs-4">
		 <a href="jobsearch.php"><img src="electrical.jpg" class="img-responsive imgresize img-thumbnail">
		 <center><b>Electrician</b></center> </a>
		</div>
		<div class="col-md-4 col-xs-4">
		 <a href="#" data-toggle="modal" data-target="#mymodal"><img src="labour.png" class="img-responsive imgresize img-thumbnail">
		 <center><b>Labour</b></center> </a>
		</div>
		<div class="col-md-4 col-xs-4">
		 <a href="#" data-toggle="modal" data-target="#mymodal"><img src="plumber.jpg" class="img-responsive imgresize img-thumbnail">
		 <center><b>Plumber</b></center> </a>
		</div>
		<div class="col-md-4 col-xs-4">
		 <a href="#" data-toggle="modal" data-target="#mymodal"><img src="welder.jpg" class="img-responsive imgresize img-thumbnail">
		 <center><b>Welder</b></center> </a>
		</div>
		<div class="col-md-4 col-xs-4">
		 <a href="#" data-toggle="modal" data-target="#mymodal"><img src="cleaner.png" class="img-responsive imgresize img-thumbnail">
		 <center><b>Cleaner</b></center> </a>
		</div>
		<div class="col-md-4 col-xs-4">
		 <a href="" data-toggle="modal" data-target="#mymodal"><img src="marblepoliher.jpg" class="img-responsive imgresize img-thumbnail">
		 <center><b>marble polishing</b></center> </a>
		</div>
		<!--<button> <a href="jobsearch.php"> clich here</a></button>-->
	</div>
	 </div>
	  <?php 
		include "foot.php";
	  ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
