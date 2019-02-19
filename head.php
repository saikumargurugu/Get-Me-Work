<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>   
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>labour welfare</title>

    <!-- Bootstrap -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body >
  <style>

.navbar{
	width:100%;
}
.Select {
    position: absolute;
    z-index: 10;
    width: 168px;
    height: 34px;
    border: 1px solid #000;
}
.tex{
	color:black; 
	  }
.pro{
	padding:10px;
}
.booo:hover{
	background-color:red;
}
.firma-card{
  background: #fff;
  border: 1px solid;
  border-color: #c7bdbd40;
  margin: 1rem auto;
  border-radius: 5px;
  box-shadow: 0 4px 6px -1px rgb(198, 207, 234);
  margin-bottom: 1.6%;
  overflow: hidden;
}
.firma-resim{
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-size: cover;
  background-position: center;
  transition: -webkit-transform .2s;
  transition: transform .2s;
  background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg);
}
.firmalar{
  background: #f1f4f5c7;
}

@media (max-width: 768px) {

  .firma-logo{
        width: calc(33.66667% - .75rem);
        height: 6.5rem;
        margin: 5px .375rem;
  }
  .firma-resim {
    position: relative;
    z-index: 0;
    height: 200px;
  }
  .img-padding-no{
    padding-right: 0px;
    padding-left: 0px;
  }
}

.des{
	font-size:20px;
}
.imgresize{
height:170px;
width:200px;
margin:20px;
}
.fot{
	background-color: black;
	color:white;
	width=400px;
	padding-left:50%;
	padding-bottom:2%;
	padding-top:40px;
}
body{
background-color:white;
}
.col-md-4{
text-align:center;
}
.col-md-4:hover .imgresize{
box-shadow:0 16px 250px;
padding:6%;
}
.navi{
padding-bottom:10px;
padding-top:10px;
}
.bg{
	padding-top:20px;
}
.dropdown-menu{
color: white;
}
.but{
	padding-top:10px;
	margin-left:10%;
	color:white;
}
.sig{
	
	color:#333;
	font-size:30px;
}
.wel{
	font-family:Charlemagne Std;
	width:100%;
	padding-top:12%;
	padding-left:12px;
		padding-bottom:3%;
	background-color:#77778a;
	color:black;
}
.syc{
	font-family:Charlemagne Std;
	color:black;
	}
.nai{
	
padding:10px;
}
.imf-fluid{
	padding-left:5px;
}
  </style>
  <script>	function validatePass() {

    var user =  document.getElementById("phone").value;
    var pass = document.getElementById("password").value;


    if (password != confirmPassword)
        document.getElementById("spantext").innerHTML = "Passwords do not match!";
    else
        document.getElementById("spantext").innerHTML = "Passwords match!";
}</script>
  <div class="row">
  <div class="col-ms">
    <nav class="navbar navbar-inverse navbar-fixed-top nai" style="position:fixed;z-index:10000002">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  	   <a href="http://localhost/project2/"><img class="navbar-brand" src="logo.png"></img></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
	  <li style="margin-left:300px;"></li>
	  <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Category<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/showitems.php?category=Shirts">recent</a></li>
            <li><a href="/showitems.php?category=Sarees">my account</a></li>
            <li><a href="/showitems.php?category=Menwear">contact us</a></li>
          
          </ul>
        </li>
 <li style="padding-top:12px; "id="google_translate_element"></li>
		</ul>
    <ul class="nav navbar-nav navbar-right" id="signup-status">
      	  <li><a href="login_register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php" data-toggle="modal" data-target="#mymodal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
	  <form class="navbar-form navbar-center">
      <div class="input-group" id="form-search-box">
        <input type="text" class="form-control"  id="form-search-box" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    </div>
   </div>
</nav>
	 </div>
	 </div>
