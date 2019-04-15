<?php
//Connect to database
$db_host = 'localhost';
$db_username = 'root';
$db_pass = '';
$db_name = 'web_creator';

$db = new mysqli($db_host, $db_username, $db_pass,$db_name) or die("Can't connect to MySQL Server");

if(isset($_POST['user_id'])){	
	$queryId = mysqli_query($db, "select user_id from user") or die("Could not work!");
	$count = 0;
	while($row = mysqli_fetch_assoc($queryId)){
		if($_POST['user_id'] == $row['user_id']){
			$count++;
		}
	}
	if($count != 0){
		echo "<center><b style = 'color: red;'> The id you created is existed in the system, please make another id or login your account.</b></center>";
	}
	else{
		$id = $_POST['user_id'];
		$psw = $_POST['password'];
		$queryAddInfor = mysqli_query($db,"Insert into user values('$id', '$psw')") or die("could not work");
		echo "<center><p style = 'color: green'>You have signed up successfully. Please log in to your account.</p></center>";
		
		$myfile1 = (string)$id;
		$myfile1 = "user_pages/".$myfile1."_page_editor.php";
		$handle1 = fopen($myfile1, 'w') or die('Cannot open file:  '.$myfile1); 
		copy('tem_webpage.php', $myfile1);
		
		
		$myfile2 = (string)$id;
		$myfile2 = "user_pages/".$myfile2."_page_change.php";
		$handle2 = fopen($myfile2, 'w') or die('Cannot open file:  '.$myfile2); 
		copy('page_change.php', $myfile2);
		
		$myfile3 = (string)$id;
		$myfile3 = "user_pages/".$myfile3."_page_review.php";
		$handle3 = fopen($myfile3, 'w') or die('Cannot open file:  '.$myfile3); 
		copy('page_review.php', $myfile3);
		$queryAddPage = mysqli_query($db,"Insert into web_page values('$id','$myfile1', '$myfile2', '$myfile3')") or die("could not work");
		$queryAddHeader = mysqli_query($db,"Insert into header values('$id','', '', '', '', '', '')") or die("could not work");
		$queryAddLeft = mysqli_query($db,"Insert into left_column values('$id','', '', '', '', '', '', '')") or die("could not work");
		$queryAddMiddle = mysqli_query($db,"Insert into middle_column values('$id','', '', '', '', '', '', '')") or die("could not work");
		$queryAddRight = mysqli_query($db,"Insert into right_column values('$id','', '', '', '', '', '', '')") or die("could not work");
		$queryAddFooter = mysqli_query($db,"Insert into footer values('$id','', '', '', '', '', '')") or die("could not work");
	}
}
?>