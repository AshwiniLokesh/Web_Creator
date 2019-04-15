<?php
//Connect to database
$db_host = 'localhost';
$db_username = 'root';
$db_pass = '';
$db_name = 'web_creator';

$db = new mysqli($db_host, $db_username, $db_pass,$db_name) or die("Can't connect to MySQL Server");

if(isset($_POST['user_id'])){
	$id = $_POST['user_id'];
	
	if(isset($_POST['header_content'])){
			$content = $_POST['header_content'];
			$queryUpdate = mysqli_query($db,"UPDATE header SET header_content = '$content' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_POST['header_color'])){
			$color = $_POST['header_color'];
			$queryUpdate = mysqli_query($db,"UPDATE header SET header_color = '$color' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_POST['header_size'])){
			$size = $_POST['header_size'];
			$queryUpdate = mysqli_query($db,"UPDATE header SET header_size = '$size' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_POST['header_style'])){
			$style = $_POST['header_style'];
			$queryUpdate = mysqli_query($db,"UPDATE header SET header_style = '$style' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_POST['header_weight'])){
			$weight = $_POST['header_weight'];
			$queryUpdate = mysqli_query($db,"UPDATE header SET header_weight = '$weight' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_FILES['header_background'])){
			$file = $_FILES['header_background'];
			$name = $file['name'];
			$path = "img/" . basename($name);
			if (move_uploaded_file($file['tmp_name'], $path)) {
				$queryUpdate = mysqli_query($db,"UPDATE header SET header_background = '$path' WHERE user_id = '$id';") or die("could not work");
			} 
			else {
				echo "Not work.";
			}
	}
	
	if(isset($_POST['left_content'])){
			$content = $_POST['left_content'];
			$queryUpdate = mysqli_query($db,"UPDATE left_column SET left_content = '$content' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_POST['left_color'])){
			$color = $_POST['left_color'];
			$queryUpdate = mysqli_query($db,"UPDATE left_column SET left_color = '$color' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_POST['left_size'])){
			$size = $_POST['left_size'];
			$queryUpdate = mysqli_query($db,"UPDATE left_column SET left_size = '$size' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_POST['left_style'])){
			$style = $_POST['left_style'];
			$queryUpdate = mysqli_query($db,"UPDATE left_column SET left_style = '$style' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_POST['left_weight'])){
			$weight = $_POST['left_weight'];
			$queryUpdate = mysqli_query($db,"UPDATE left_column SET left_weight = '$weight' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_FILES['left_background'])){
			$file = $_FILES['left_background'];
			$name = $file['name'];
			$path = "img/" . basename($name);
			if (move_uploaded_file($file['tmp_name'], $path)) {
				$queryUpdate = mysqli_query($db,"UPDATE left_column SET left_background = '$path' WHERE user_id = '$id';") or die("could not work");
			} 
			else {
				echo "Not work.";
			}
	}
	if(isset($_FILES['left_photo'])){
			$file = $_FILES['left_photo'];
			$name = $file['name'];
			$path = "img/" . basename($name);
			if (move_uploaded_file($file['tmp_name'], $path)) {
				$queryUpdate = mysqli_query($db,"UPDATE left_column SET left_photo = '$path' WHERE user_id = '$id';") or die("could not work");
			} 
			else {
				echo "Not work.";
			}
	}
	
	if(isset($_POST['middle_content'])){
			$content = $_POST['middle_content'];
			$queryUpdate = mysqli_query($db,"UPDATE middle_column SET middle_content = '$content' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_POST['middle_color'])){
			$color = $_POST['middle_color'];
			$queryUpdate = mysqli_query($db,"UPDATE middle_column SET middle_color = '$color' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_POST['middle_size'])){
			$size = $_POST['middle_size'];
			$queryUpdate = mysqli_query($db,"UPDATE middle_column SET middle_size = '$size' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_POST['middle_style'])){
			$style = $_POST['middle_style'];
			$queryUpdate = mysqli_query($db,"UPDATE middle_column SET middle_style = '$style' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_POST['middle_weight'])){
			$weight = $_POST['middle_weight'];
			$queryUpdate = mysqli_query($db,"UPDATE middle_column SET middle_weight = '$weight' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_FILES['middle_background'])){
			$file = $_FILES['middle_background'];
			$name = $file['name'];
			$path = "img/" . basename($name);
			if (move_uploaded_file($file['tmp_name'], $path)) {
				$queryUpdate = mysqli_query($db,"UPDATE middle_column SET middle_background = '$path' WHERE user_id = '$id';") or die("could not work");
			} 
			else {
				echo "Not work.";
			}
	}
	if(isset($_FILES['middle_photo'])){
			$file = $_FILES['middle_photo'];
			$name = $file['name'];
			$path = "img/" . basename($name);
			if (move_uploaded_file($file['tmp_name'], $path)) {
				$queryUpdate = mysqli_query($db,"UPDATE middle_column SET middle_photo = '$path' WHERE user_id = '$id';") or die("could not work");
			} 
			else {
				echo "Not work.";
			}
	}
	
	if(isset($_POST['right_content'])){
			$content = $_POST['right_content'];
			$queryUpdate = mysqli_query($db,"UPDATE right_column SET right_content = '$content' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_POST['right_color'])){
			$color = $_POST['right_color'];
			$queryUpdate = mysqli_query($db,"UPDATE right_column SET right_color = '$color' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_POST['right_size'])){
			$size = $_POST['right_size'];
			$queryUpdate = mysqli_query($db,"UPDATE right_column SET right_size = '$size' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_POST['right_style'])){
			$style = $_POST['right_style'];
			$queryUpdate = mysqli_query($db,"UPDATE right_column SET right_style = '$style' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_POST['right_weight'])){
			$weight = $_POST['right_weight'];
			$queryUpdate = mysqli_query($db,"UPDATE right_column SET right_weight = '$weight' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_FILES['right_background'])){
			$file = $_FILES['right_background'];
			$name = $file['name'];
			$path = "img/" . basename($name);
			if (move_uploaded_file($file['tmp_name'], $path)) {
				$queryUpdate = mysqli_query($db,"UPDATE right_column SET right_background = '$path' WHERE user_id = '$id';") or die("could not work");
			} 
			else {
				echo "Not work.";
			}
	}
	if(isset($_FILES['right_photo'])){
			$file = $_FILES['right_photo'];
			$name = $file['name'];
			$path = "img/" . basename($name);
			if (move_uploaded_file($file['tmp_name'], $path)) {
				$queryUpdate = mysqli_query($db,"UPDATE right_column SET right_photo = '$path' WHERE user_id = '$id';") or die("could not work");
			} 
			else {
				echo "Not work.";
			}
	}
	
	if(isset($_POST['footer_content'])){
			$content = $_POST['footer_content'];
			$queryUpdate = mysqli_query($db,"UPDATE footer SET footer_content = '$content' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_POST['footer_color'])){
			$color = $_POST['footer_color'];
			$queryUpdate = mysqli_query($db,"UPDATE footer SET footer_color = '$color' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_POST['footer_size'])){
			$size = $_POST['footer_size'];
			$queryUpdate = mysqli_query($db,"UPDATE footer SET footer_size = '$size' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_POST['footer_style'])){
			$style = $_POST['footer_style'];
			$queryUpdate = mysqli_query($db,"UPDATE footer SET footer_style = '$style' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_POST['footer_weight'])){
			$weight = $_POST['footer_weight'];
			$queryUpdate = mysqli_query($db,"UPDATE footer SET footer_weight = '$weight' WHERE user_id = '$id';") or die("could not work");
	}
	
	if(isset($_FILES['footer_background'])){
			$file = $_FILES['footer_background'];
			$name = $file['name'];
			$path = "img/" . basename($name);
			if (move_uploaded_file($file['tmp_name'], $path)) {
				$queryUpdate = mysqli_query($db,"UPDATE footer SET footer_background = '$path' WHERE user_id = '$id';") or die("could not work");
			} 
			else {
				echo "Not work.";
			}
	}
}	
?>