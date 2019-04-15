<?php
//Connect to database
$db_host = 'localhost';
$db_username = 'root';
$db_pass = '';
$db_name = 'web_creator';

$db = new mysqli($db_host, $db_username, $db_pass,$db_name) or die("Can't connect to MySQL Server");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Review Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

h2{
  color: skyblue;	
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  height: 450px;
  padding: 10px;
  overflow: auto;
}
.column_img{
  height: 320px;
  width: 490px;
  margin: auto;
  border: solid 1px #c3c3c3;
  background-color: whitesmoke;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>

<body>
<?php	
		$id = $_POST['user_id'];
		$queryHeader = mysqli_query($db,"select header_content, header_color, header_size, header_style, header_weight, header_background from header WHERE user_id = '$id';") or die("could not work");
		$row = mysqli_fetch_assoc($queryHeader);
		$resultHeaderContent = $row['header_content'];
		$resultHeaderColor = $row['header_color'];
		$resultHeaderSize = $row['header_size'];
		$resultHeaderStyle = $row['header_style'];
		$resultHeaderWeight = $row['header_weight'];
		$resultHeaderBackground = $row['header_background'];
	echo "<div class = 'header' style = 'background-image:url(".$resultHeaderBackground.");'>";
		echo "<h2 id = 'header' style = 'color:".$resultHeaderColor."; font-size:".$resultHeaderSize."px; 
		      font-style:".$resultHeaderStyle."; font-weight:".$resultHeaderWeight.";'>".$resultHeaderContent."</h2>";
    echo "</div>";
?>
	
<div class="row">
<?php
		$queryLeft = mysqli_query($db,"select left_content, left_color, left_size, left_style, left_weight, left_background, left_photo from left_column WHERE user_id = '$id';") or die("could not work");
		$row = mysqli_fetch_assoc($queryLeft);
		$resultLeftContent = $row['left_content'];
		$resultLeftColor = $row['left_color'];
		$resultLeftSize = $row['left_size'];
		$resultLeftStyle = $row['left_style'];
		$resultLeftWeight = $row['left_weight'];
		$resultLeftBackground = $row['left_background'];
		$resultLeftPhoto = $row['left_photo'];
		echo "<div class='column' style='background-color:#aaa; background-image:url(".$resultLeftBackground.");' id = 'left_column'>
				<div id = 'left_img' style = 'background-image:url(".$resultLeftPhoto.");' class = 'column_img'>
			
				</div>
			  <p id = 'left' style = 'color:".$resultLeftColor."; font-size:".$resultLeftSize."px; 
		      font-style:".$resultLeftStyle."; font-weight:".$resultLeftWeight.";'>".$resultLeftContent."</p>
			  </div>";
?>

<?php
		$queryMiddle = mysqli_query($db,"select middle_content, middle_color, middle_size, middle_style, middle_weight, middle_background, middle_photo from middle_column WHERE user_id = '$id';") or die("could not work");
		$row = mysqli_fetch_assoc($queryMiddle);
		$resultMiddleContent = $row['middle_content'];
		$resultMiddleColor = $row['middle_color'];
		$resultMiddleSize = $row['middle_size'];
		$resultMiddleStyle = $row['middle_style'];
		$resultMiddleWeight = $row['middle_weight'];
		$resultMiddleBackground = $row['middle_background'];
		$resultMiddlePhoto = $row['middle_photo'];
	    echo "<div class='column' style='background-color:#bbb; background-image:url(".$resultMiddleBackground.");' id = 'middle_column'>
				<div id = 'middle_img' style = 'background-image:url(".$resultMiddlePhoto.");' class = 'column_img'>
			
				</div>
				<p id = 'middle' style = 'color:".$resultMiddleColor."; font-size:".$resultMiddleSize."px; 
		      font-style:".$resultMiddleStyle."; font-weight:".$resultMiddleWeight.";'>".$resultMiddleContent."</p>
			  </div>";

?>	  

<?php   
        $queryRight = mysqli_query($db,"select right_content, right_color, right_size, right_style, right_weight, right_background, right_photo from right_column WHERE user_id = '$id';") or die("could not work");
		$row = mysqli_fetch_assoc($queryRight);
		$resultRightContent = $row['right_content'];
		$resultRightColor = $row['right_color'];
		$resultRightSize = $row['right_size'];
		$resultRightStyle = $row['right_style'];
		$resultRightWeight = $row['right_weight'];
		$resultRightBackground = $row['right_background'];
		$resultRightPhoto = $row['right_photo'];
		echo "<div class='column' style='background-color:#ccc; background-image:url(".$resultRightBackground.");' id = 'right_column'>
				<div id = 'right_img' style = 'background-image:url(".$resultRightPhoto.");' class = 'column_img'>
							
				</div>
				<p id = 'right' style = 'color:".$resultRightColor."; font-size:".$resultRightSize."px; 
		      font-style:".$resultRightStyle."; font-weight:".$resultRightWeight.";'>".$resultRightContent."</p>
			  </div>";
?>	  
</div>
<?php
		$queryFooter = mysqli_query($db,"select footer_content, footer_color, footer_size, footer_style, footer_weight, footer_background from footer WHERE user_id = '$id';") or die("could not work");
		$row = mysqli_fetch_assoc($queryFooter);
		$resultFooterContent = $row['footer_content'];
		$resultFooterColor = $row['footer_color'];
		$resultFooterSize = $row['footer_size'];
		$resultFooterStyle = $row['footer_style'];
		$resultFooterWeight = $row['footer_weight'];
		$resultFooterBackground = $row['footer_background'];
		echo "<div class='footer' style='background-image:url(".$resultFooterBackground.");' id = 'footer_back'>
				<p id = 'footer' style = 'color:".$resultFooterColor."; font-size:".$resultFooterSize."px; 
		      font-style:".$resultFooterStyle."; font-weight:".$resultFooterWeight.";'>".$resultFooterContent."</p>
			  </div>";
?>	
</body>