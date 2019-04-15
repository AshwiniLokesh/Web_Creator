<?php
//Connect to database
$db_host = 'localhost';
$db_username = 'root';
$db_pass = '';
$db_name = 'web_creator';
$cookie_name = 'user';
$db = new mysqli($db_host, $db_username, $db_pass,$db_name) or die("Can't connect to MySQL Server");

// login as user
if(isset($_POST['user_id'])){
		//id
		$idIn = mysqli_real_escape_string($db, $_POST['user_id']);
		//password
		$password = mysqli_real_escape_string($db, $_POST['user_pwd']);
		$sql = "SELECT * FROM user WHERE user_id='$idIn' AND psw ='$password'";
		//Query database
		$result = mysqli_query($db, $sql);
		//Get associated values
		$row = mysqli_fetch_assoc($result);

		$temppass = $row["psw"];
		$temId = $row["user_id"];

        $dbId = $row["user_id"];
		//Verify password and id
		if ($password == $temppass && $idIn == $temId){
			$_SESSION['id'] = $dbId;
			//If remember checkbox is selected
			if(isset($_POST['remember'])){
				//Create cookie for email
				setcookie($cookie_name,$emailIn,time()+84600*30);	
			}else{
				//Delete email cookie
				setcookie($cookie_name,'', time()-84600);
			}
		}
		//Otherwise return to index with a failure value set
		else
		{	
			header("Location: login_error_page.php");
			exit();
		}
}
?>