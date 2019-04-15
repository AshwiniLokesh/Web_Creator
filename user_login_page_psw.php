<?php include 'login_verification_id.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Login Page </title>
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
      <a class="navbar-brand" href="#">User Login Page</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
    </ul>
  </div>
</nav>

<div class="container">    
  <div class="row">
	<div class="col-sm-4">  </div>
    <div class="col-sm-4" id = "login_area"> 
		<div class="container-fluid">
		<center><h2>User Login</h2></center>
		  <form action = "user_login_success.php" method = "post">	
			<div class="form-group">
			  <label for="pwd">Password:</label>
			  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="user_pwd">
			  <input type = "hidden" name = "user_id" value = <?php echo $_POST['user_id'];?>>
			</div>
			<div class="checkbox">
			  <label><input type="checkbox" name="remember"> Remember me</label>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		  </form>
		  <br>
		  <p>Do not have account? Create new account <a href = "user_create_account_page.php"><b>HERE</b></a></p>
		</div>
    </div>
    <div class="col-sm-4">  </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <br>
  <b>Designed by <i>Qizheng Ren</i></b><br>
  <br><i> qizheng.ren609@topper.wku.edu</i>
  <br>
</footer>

</body>
</html>