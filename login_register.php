<?php include "head.php";
?>
<style>
body{
background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(image.jpg);
background-size:cover;
background-position:center;
}
.login-box{
max-width:700px;
float:none;
margin:150px auto;
}
.login-left{
background: rgba(211,211,211,0.5);
padding: 30px;
}

.login-right{
background:#fff;
padding: 30px;
}
.form-control{
background-color:transparent !important;
}
</style>

<div class="container">
<table>
<col width="7300">
<div class="login-box">
<div class="row bg">
	<tr>	<td><div class="col-md-4 col-xs-4">
		 <a href="autopopup.php"><img src="autp pic.jpg" class="img-responsive imgresize img-thumbnail">
		 <center><b class="tex">AUTO SIGN UP</b></center> </a><br><br><br><br>
		</div>
		

		</div>
<div class="row">

<div class="col-md-6 login-left">

<h2> Login Here </h2>
<form action="vaidation.php" method="post">

<div class="form-group">
<label>Phone Number</label>
<input type="number" name="phone" class="form-control" required>
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="pass" class="form-control" required>
</div>
<button type="submit" class="btn btn-primary"> Login </button>

</form>

</div>
<div class="col-md-6 login-right">

<h2> Register Here </h2>
<form action="registration.php" method="post">
<div class="form-group">
<label>firstname</label>
<input type="text" name="firstname" class="form-control" required>
</div>
<div class="form-group">
<label>lastname</label>
<input type="text" name="lastname" class="form-control" required>
</div>
<div>
	<label>Gender: &nbsp</label>
<select id= "list" name="gender" >
	<option value="m">male</option>
	<option value="f">female</option>
</select>
</div><br>
<div class="form-group">
<label>aadharnumber</label>
<input type="text" name="aadharnumber" class="form-control" required>
</div>
<div class="form-group">
<label>email</label>
<input type="text" name="email" class="form-control" required>
</div>
<div class="form-group">
<label>phone</label>
<input type="number" name="phone" class="form-control" required>
</div>
<div class="form-group">
<label>dob</label>
<input type="text" name="dob" class="form-control" required>
</div>
<div class="form-group">
<label>usertype</label>
<input type="number" name="usertype" class="form-control" required>
</div>
<div class="form-group">
<label>password</label>
<input type="password" id = "pass" name="pass" class="form-control" placeholder="this is a mandatory field" required>
</div>
<div class="form-group">
<label>confirm password</label>
<input type="password" id = "pass1" name="pass1" class="form-control" onfocusout= 'validatePass()' required>
</div>
<span id = "spantext"></span>
<div class="form-group">
<button type="submit" class="btn btn-primary"> Registration </button>
</form>
</td>
</div>

</div>
</tr>
</div>
</div>
</table>
</div>
<?php include "foot.php";?>
