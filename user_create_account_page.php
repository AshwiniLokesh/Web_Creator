<!DOCTYPE html>
<html lang="en">
<head>
  <title> Create Account Page </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/cssStyle.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1> Web-Based Website Creator </h1>  
	<br>	
    <h2><i>WELCOME</i></h2>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Create New Account</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
    </ul>
  </div>
</nav>

<div class="container">    
  <div class="row">
	<div class="col-sm-3">  </div>
    <div class="col-sm-6" id = "login_area"> 
		<div class="container-fluid">
		<center><h2>Create Account</h2></center><br>
		  <form name = "signUp" action="user_login_page_id.php" method = "post" onsubmit = "return signUpValidation();">				
				<div class="form-group">
					<label for="id">User ID:</label>
					<input type="text" class="form-control" placeholder="User id" name="user_id" required>
					<p id="phoneErr" style="color: red"> </p>
				</div>
				<br>
				<div class="form-group">
					<label for="psw">Password:</label>
					<input type="text" class="form-control" id="id" placeholder="Password" name = "password" required>
					<p id="passErr" style="color: red"> </p>
				</div>
				<br>
				<div class="form-group">
					<label for="psw">Repeat Password:</label>
					<input type="text" class="form-control" id="id" placeholder="Password" name = "repassword" required>
					<p id="repassErr" style="color: red"> </p>
				</div>
			<br><center><button type="submit" class="btn btn-primary">Submit</button></center>
		  </form>
		  <br>
		  <center><p>Already have account? Sign in <a href = "user_login_page.php"><b>HERE</b></a></p><center>
		</div>
    </div>
    <div class="col-sm-6">  </div>
  </div>
</div><br><br>



<footer class="container-fluid text-center">
  <br>
  <b>Designed by <i>Qizheng Ren</i></b><br>
  <br><i> qizheng.ren609@topper.wku.edu</i>
  <br>
</footer>
<script>
	
	function signUpValidation(){
		if (validatePass() == true){
				return true;
		}
        else{
			return false;
		}			
	}
	
	function validatePass(){
		var x = document.forms["signUp"]["password"].value;
		var y = document.forms["signUp"]["repassword"].value;

		if(x != y){
			document.getElementById("repassErr").innerHTML = "Repeated password must be the same as password above!";
			return false;
		}
		else{
			document.getElementById("passErr").style.visibility = "hidden";
			return true;
		}
	}
</script>
</body>
</html>