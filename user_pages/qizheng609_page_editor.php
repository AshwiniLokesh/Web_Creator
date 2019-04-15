<!DOCTYPE html>
<html lang="en">
<head>
<title>User Editor</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.control {
  height: 100%;
  width: 400px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: whitesmoke;
  overflow-x: hidden;
}
.display {
  margin-left: 400px;
  padding: 10px;
  border: 1px solid;
}
h2{
  color: skyblue;	
}
.panel{
	padding: 5px;
    text-align: left;
    background-color: #e5eecc;
    border: solid 1px #c3c3c3;
	display: none;
}
.button{
	background-color: LightSlateGrey;
    border: 1px solid;
    color: white;
    padding: 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    width: 300px;
    display: block;
}
.button:hover {
    background-color: #637383;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  background-image:url('');
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  height: 400px;
  padding: 10px;
  overflow: auto;
}
.column_img{
  height: 250px;
  width: 350px;
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

<div class="control">
				<fieldset>
						<center><h2> Control Panel </h2></center>
						<hr>
						<br> <center> <div class = "but" id = "button1"> <button class ="button"> Modify Header </button> </div> </center>
						<div id= "panel1" class = "panel">
							<form class = "style">
								Change Content: <input type="text" class = "change_content" placeholder= "Enter new content" name = "header_content" id = "header_content" value = "HEADER">
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<button class = "change" onclick= "changeHeaderContent()"> Change </button>
								<br>
								<br>
							</form>
							
							<form class = "style">
								Change Color:   <select id = "header_color" class = "change_content" name = "header_color">
													<option value="skyblue">Sky Blue</option>
													<option value="red">Red</option>
													<option value="green">Green</option>
													<option value="blue">Blue</option>
													<option value="yellow">Yellow</option>
													<option value="brown">Brown</option>
													<option value="black">Black</option>
												</select> 
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<button class = "change" onclick = "changeHeaderColor()"> Change </button>
								<br>
								<br>
							</form>
							
							<form class = "style">
								Change Font Size:  <input type="number" class = "change_content" id = "header_size" min="50" max="60" placeholder= "Size" name = "header_size" value = "50">
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<button class = "change" onclick = "changeHeaderSize()"> Change </button>
								<br>
								<br>
							</form>
							
							<form class = "style">
								Change Font Style:  <select name="header_style" id = "header_style" class = "change_content">
															<option value="normal">normal</option>
															<option value="italic">italic</option>
													</select> 
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<button class = "change" onclick = "changeHeaderStyle()"> Change </button>
								<br>
								<br>
							</form>
								
							<form class = "style">	
								Change Font Weight:  <select name="header_weight" id = "header_weight" class = "change_content">
															<option value="bold">bold</option>
															<option value="normal">normal</option>
													</select> 
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<button class = "change" onclick = "changeHeaderWeight()"> Change </button>
								<br>
							</form>	
							<hr>
							<form class = "background">								
								Change Background: <span> <input type="file" name="header_background" id = "header_background"> </span>
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<br><br>
								<button input type = "submit" class = "change" onclick = "changeHeaderBackground()"> Confirm </button>
							</form>
							<hr>
						</div>
						<br>
						
						<br> <center> <div class = "but" id = "button2"> <button class ="button"> Modify Left Column </button> </div> </center>						
						<div id= "panel2"class = "panel">
							<form class = "style">
								Change Content: <textarea rows = "5" cols = "30" class = "change_content" placeholder= "Enter new content" name = "left_content" id = "left_content" value = "Column">
								</textarea>
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<button class = "change" onclick= "changeLeftContent()"> Change </button>
								<br>
								<br>
							</form>
							
							<form class = "style">
								Change Color:   <select id = "left_color" class = "change_content" name = "left_color">
													<option value="black">Black</option>
													<option value="green">Green</option>
													<option value="blue">Blue</option>
													<option value="yellow">Yellow</option>
													<option value="brown">Brown</option>
													<option value="orange">Orange</option>
												</select> 
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<button class = "change" onclick = "changeLeftColor()"> Change </button>
								<br>
								<br>
							</form>
							
							<form class = "style">
								Change Font Size:  <input type="number" class = "change_content" id = "left_size" min="11" max="20" placeholder= "Size" name = "left_size" value = "15">
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<button class = "change" onclick = "changeLeftSize()"> Change </button>
								<br>
								<br>
							</form>
							
							<form class = "style">
								Change Font Style:  <select name="left_style" id = "left_style" class = "change_content">
															<option value="normal">normal</option>
															<option value="italic">italic</option>
													</select> 
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<button class = "change" onclick = "changeLeftStyle()"> Change </button>
								<br>
								<br>
							</form>
								
							<form class = "style">	
								Change Font Weight:  <select name="left_weight" id = "left_weight" class = "change_content">
															<option value="normal">normal</option>
															<option value="bold">bold</option>
													</select> 
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<button class = "change" onclick = "changeLeftWeight()"> Change </button>
							</form>
							<hr>
							<form class = "background">								
								Change Background: <span> <input type="file" name="left_background" id = "left_background"> </span>
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<br><br>
								<button input type = "submit" class = "change" onclick = "changeLeftBackground()"> Confirm </button>
							</form>
							<br>
							<hr>
							<br>
							<form class = "background">								
								Add Photo: <span> <input type="file" name="left_photo" id = "left_photo"> </span>								
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<span><button input type = "submit" class = "change" onclick = "changeLeftPhoto()"> Add </button></span>
							</form>
							<hr>
						</div>
						<br>
						<br>
						
						<center> <div class = "but" id = "button3"> <button class ="button"> Modify Middle Column </button> </div> </center>
						<div id= "panel3" class = "panel">
							<form class = "style">
								Change Content: <textarea rows = "5" cols = "30" class = "change_content" placeholder= "Enter new content" name = "middle_content" id = "middle_content" value = "Column">
								</textarea>
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<button class = "change" onclick= "changeMiddleContent()"> Change </button>
								<br>
								<br>
							</form>
							
							<form class = "style">
								Change Color:   <select id = "middle_color" class = "change_content" name = "middle_color">
													<option value="black">Black</option>
													<option value="green">Green</option>
													<option value="blue">Blue</option>
													<option value="yellow">Yellow</option>
													<option value="brown">Brown</option>
													<option value="orange">Orange</option>
												</select> 
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<button class = "change" onclick = "changeMiddleColor()"> Change </button>
								<br>
								<br>
							</form>
							
							<form class = "style">
								Change Font Size:  <input type="number" class = "change_content" id = "middle_size" min="11" max="20" placeholder= "Size" name = "middle_size" value = "15">
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<button class = "change" onclick = "changeMiddleSize()"> Change </button>
								<br>
								<br>
							</form>
							
							<form class = "style">
								Change Font Style:  <select name="middle_style" id = "middle_style" class = "change_content">
															<option value="normal">normal</option>
															<option value="italic">italic</option>
													</select> 
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<button class = "change" onclick = "changeMiddleStyle()"> Change </button>
								<br>
								<br>
							</form>
								
							<form class = "style">	
								Change Font Weight:  <select name="middle_weight" id = "middle_weight" class = "change_content">
															<option value="normal">normal</option>
															<option value="bold">bold</option>
													</select> 
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<button class = "change" onclick = "changeMiddleWeight()"> Change </button>
							</form>
							<hr>
							<form class = "background">								
								Change Background: <span> <input type="file" name="middle_background" id = "middle_background"> </span>
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<br><br>
								<button input type = "submit" class = "change" onclick = "changeMiddleBackground()"> Confirm </button>
							</form>
							<br>
							<hr>
							<br>
							<form class = "background">								
								Add Photo: <span> <input type="file" name="middle_photo" id = "middle_photo"> </span>								
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<span><button input type = "submit" class = "change" onclick = "changeMiddlePhoto()"> Add </button></span>
							</form>
							<hr>
						</div>
						<br> 
						<br>
						
						<center> <div class = "but" id = "button4"> <button class ="button"> Modify Right Column </button> </div> </center>
						<div id= "panel4" class = "panel">
							<form class = "style">
								Change Content: <textarea rows = "5" cols = "30" class = "change_content" placeholder= "Enter new content" name = "right_content" id = "right_content" value = "Column">
								</textarea>
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<button class = "change" onclick= "changeRightContent()"> Change </button>
								<br>
								<br>
							</form>
							
							<form class = "style">
								Change Color:   <select id = "right_color" class = "change_content" name = "right_color">
													<option value="black">Black</option>
													<option value="green">Green</option>
													<option value="blue">Blue</option>
													<option value="yellow">Yellow</option>
													<option value="brown">Brown</option>
													<option value="orange">Orange</option>
												</select> 
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<button class = "change" onclick = "changeRightColor()"> Change </button>
								<br>
								<br>
							</form>
							
							<form class = "style">
								Change Font Size:  <input type="number" class = "change_content" id = "right_size" min="11" max="20" placeholder= "Size" name = "right_size" value = "15">
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<button class = "change" onclick = "changeRightSize()"> Change </button>
								<br>
								<br>
							</form>
							
							<form class = "style">
								Change Font Style:  <select name="right_style" id = "right_style" class = "change_content">
															<option value="normal">normal</option>
															<option value="italic">italic</option>
													</select> 
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<button class = "change" onclick = "changeRightStyle()"> Change </button>
								<br>
								<br>
							</form>
								
							<form class = "style">	
								Change Font Weight:  <select name="right_weight" id = "right_weight" class = "change_content">
															<option value="normal">normal</option>
															<option value="bold">bold</option>
													</select> 
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<button class = "change" onclick = "changeRightWeight()"> Change </button>
							</form>
							<hr>
							<form class = "background">								
								Change Background: <span> <input type="file" name="right_background" id = "right_background"> </span>
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<br><br>
								<button input type = "submit" class = "change" onclick = "changeRightBackground()"> Confirm </button>
							</form>
							<br>
							<hr>
							<br>
							<form class = "background">								
								Add Photo: <span> <input type="file" name="right_photo" id = "right_photo"> </span>								
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<span><button input type = "submit" class = "change" onclick = "changeRightPhoto()"> Add </button></span>
							</form>
							<hr>
						</div>
						<br>
						<br>
						
						<center> <div class = "but" id = "button5"> <button class ="button"> Modify Footer </button> </div> </center>
						<div id= "panel5" class = "panel">
							<form class = "style">
								Change Content: <input type="text" class = "change_content" placeholder= "Enter new content" name = "footer_content" id = "footer_content" value = "Footer">
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<button class = "change" onclick= "changeFooterContent()"> Change </button>
								<br>
								<br>
							</form>
							
							<form class = "style">
								Change Color:   <select id = "footer_color" class = "change_content" name = "footer_color">
													<option value="skyblue">Sky Blue</option>
													<option value="red">Red</option>
													<option value="green">Green</option>
													<option value="blue">Blue</option>
													<option value="yellow">Yellow</option>
													<option value="brown">Brown</option>
													<option value="black">Black</option>
												</select> 
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<button class = "change" onclick = "changeFooterColor()"> Change </button>
								<br>
								<br>
							</form>
							
							<form class = "style">
								Change Font Size:  <input type="number" class = "change_content" id = "footer_size" min="20" max="45" placeholder= "Size" name = "footer_size" value = "20">
								<button class = "change" onclick = "changeFooterSize()"> Change </button>
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<br>
								<br>
							</form>
							
							<form class = "style">
								Change Font Style:  <select name="footer_style" id = "footer_style" class = "change_content">
															<option value="normal">normal</option>
															<option value="italic">italic</option>
													</select> 
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<button class = "change" onclick = "changeFooterStyle()"> Change </button>
								<br>
								<br>
							</form>
								
							<form class = "style">	
								Change Font Weight:  <select name="footer_weight" id = "footer_weight" class = "change_content">
															<option value="normal">normal</option>
															<option value="bold">bold</option>
													</select> 
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<button class = "change" onclick = "changeFooterWeight()"> Change </button>
							</form>
							<hr>
							<form class = "background">								
								Change Background: <span> <input type="file" name="footer_background" id = "footer_background"> </span>
								<?php 
									$user_id = $_POST['user_id'];
									echo "<input type = 'hidden' name = 'user_id' value = ".$user_id.">";
								?>
								<br><br>
								<button input type = "submit" class = "change" onclick = "changeFooterBackground()"> Confirm </button>
							</form>
							<br>
						</div>
						<br>
						<br>
						<?php
							if (isset($_POST['user_id'])){
								$user_id = $_POST['user_id'];
								echo "<form action = '".$user_id."_page_review.php' method = 'post'>
										<input type = 'hidden' name = 'user_id' value = ".$user_id.">
										<center><button type='submit' class='button'> REVIEW </button></center>
									  </form>";
							}
						?>
				</fieldset>
</div>

<div class = "display">
	<div class = "header" id = "header_back">
		<h2 id = "header"> HEADER </h2>
	</div>
	
	<div class="row">
	  <div class="column" style="background-color:#aaa;" id = "left_column">
		<div id = "left_img" class = "column_img">
			
		</div>
		<p id = "left">Column</p>
	  </div>
	  <div class="column" style="background-color:#bbb;" id = "middle_column">
		<div id = "middle_img" class = "column_img">
			
		</div>
		<p id = "middle">Column</p>
	  </div>
	  <div class="column" style="background-color:#ccc;" id = "right_column">
		<div id = "right_img" class = "column_img">
			
		</div>
		<p id = "right">Column</p>
	  </div>
	</div>

	<div class="footer" id = "footer_back">
	  <p id = "footer">Footer</p>
	</div>
	
</div>

</body>
</html>
<script>
// show control panel
$(document).ready(function(){
  $("#button1").click(function(){
    $("#panel1").slideToggle("slow");
  });
  $("#button2").click(function(){
    $("#panel2").slideToggle("slow");
  });
  $("#button3").click(function(){
    $("#panel3").slideToggle("slow");
  });
  $("#button4").click(function(){
    $("#panel4").slideToggle("slow");
  });
  $("#button5").click(function(){
    $("#panel5").slideToggle("slow");
  });
});
// header modification
var header_Color = "";
var header_FontSize = "";
var header_FontStyle = "";
var header_FontWeight = "";
function changeHeaderContent(){
    var input = document.getElementById("header_content").value;
	document.getElementById("header").innerHTML = input;
}
function changeHeaderColor(){
	var userInput = document.getElementById("header_color").value;
	header_Color = "color: "+userInput+";";
	document.getElementById("header").setAttribute("style", header_Color + header_FontSize + header_FontStyle + header_FontWeight);
}
function changeHeaderSize(){
	var userInput = document.getElementById("header_size").value;
	header_FontSize = "font-size: "+userInput+"px;";
	document.getElementById("header").setAttribute("style", header_Color + header_FontSize + header_FontStyle + header_FontWeight);
}
function changeHeaderStyle(){
	var userInput = document.getElementById("header_style").value;
	header_FontStyle = "font-style: "+userInput+";";
	document.getElementById("header").setAttribute("style", header_Color + header_FontSize + header_FontStyle + header_FontWeight);
}
function changeHeaderWeight(){
	var userInput = document.getElementById("header_weight").value;
	header_FontWeight = "font-weight: "+userInput+";";
	document.getElementById("header").setAttribute("style", header_Color + header_FontSize + header_FontStyle + header_FontWeight);
}
// change header background
document.getElementById("header_background").addEventListener('change', changeHeaderBackground, true);
function changeHeaderBackground(){
   var file = document.getElementById("header_background").files[0];
   var reader = new FileReader();
   reader.onloadend = function(){
      document.getElementById('header_back').style.backgroundImage = "url(" + reader.result + ")";        
   }
   if(file){
      reader.readAsDataURL(file);
    }else{
    }
}
changeHeaderBackground();
// left column modification
var left_Color = "";
var left_FontSize = "";
var left_FontStyle = "";
var left_FontWeight = "";
function changeLeftContent(){
    var input = document.getElementById("left_content").value;
	document.getElementById("left").innerHTML = input;
}
function changeLeftColor(){
	var userInput = document.getElementById("left_color").value;
	left_Color = "color: "+userInput+";";
	document.getElementById("left").setAttribute("style", left_Color + left_FontSize + left_FontStyle + left_FontWeight);
}
function changeLeftSize(){
	var userInput = document.getElementById("left_size").value;
	left_FontSize = "font-size: "+userInput+"px;";
	document.getElementById("left").setAttribute("style", left_Color + left_FontSize + left_FontStyle + left_FontWeight);
}
function changeLeftStyle(){
	var userInput = document.getElementById("left_style").value;
	left_FontStyle = "font-style: "+userInput+";";
	document.getElementById("left").setAttribute("style", left_Color + left_FontSize + left_FontStyle + left_FontWeight);
}
function changeLeftWeight(){
	var userInput = document.getElementById("left_weight").value;
	left_FontWeight = "font-weight: "+userInput+";";
	document.getElementById("left").setAttribute("style", left_Color + left_FontSize + left_FontStyle + left_FontWeight);
}
// change left column background
document.getElementById("left_background").addEventListener('change', changeLeftBackground, true);
function changeLeftBackground(){
   var file = document.getElementById("left_background").files[0];
   var reader = new FileReader();
   reader.onloadend = function(){
      document.getElementById('left_column').style.backgroundImage = "url(" + reader.result + ")";        
   }
   if(file){
      reader.readAsDataURL(file);
    }else{
    }
}
changeLeftBackground();
// add left column photo
document.getElementById("left_photo").addEventListener('change', changeLeftPhoto, true);
function changeLeftPhoto(){
   var file = document.getElementById("left_photo").files[0];
   var reader = new FileReader();
   reader.onloadend = function(){
      document.getElementById('left_img').style.backgroundImage = "url(" + reader.result + ")";  
   }
   if(file){
      reader.readAsDataURL(file);
    }else{
    }
}
changeLeftPhoto();
// middle column modification
var middle_Color = "";
var middle_FontSize = "";
var middle_FontStyle = "";
var middle_FontWeight = "";
function changeMiddleContent(){
    var input = document.getElementById("middle_content").value;
	document.getElementById("middle").innerHTML = input;
}
function changeMiddleColor(){
	var userInput = document.getElementById("middle_color").value;
	middle_Color = "color: "+userInput+";";
	document.getElementById("middle").setAttribute("style", middle_Color + middle_FontSize + middle_FontStyle + middle_FontWeight);
}
function changeMiddleSize(){
	var userInput = document.getElementById("middle_size").value;
	middle_FontSize = "font-size: "+userInput+"px;";
	document.getElementById("middle").setAttribute("style", middle_Color + middle_FontSize + middle_FontStyle + middle_FontWeight);
}
function changeMiddleStyle(){
	var userInput = document.getElementById("middle_style").value;
	middle_FontStyle = "font-style: "+userInput+";";
	document.getElementById("middle").setAttribute("style", middle_Color + middle_FontSize + middle_FontStyle + middle_FontWeight);
}
function changeMiddleWeight(){
	var userInput = document.getElementById("middle_weight").value;
	middle_FontWeight = "font-weight: "+userInput+";";
	document.getElementById("middle").setAttribute("style", middle_Color + middle_FontSize + middle_FontStyle + middle_FontWeight);
}
// change middle column background
document.getElementById("middle_background").addEventListener('change', changeMiddleBackground, true);
function changeMiddleBackground(){
   var file = document.getElementById("middle_background").files[0];
   var reader = new FileReader();
   reader.onloadend = function(){
      document.getElementById('middle_column').style.backgroundImage = "url(" + reader.result + ")";        
   }
   if(file){
      reader.readAsDataURL(file);
    }else{
    }
}
changeMiddleBackground();
// add middle photo
document.getElementById("middle_photo").addEventListener('change', changeMiddlePhoto, true);
function changeMiddlePhoto(){
   var file = document.getElementById("middle_photo").files[0];
   var reader = new FileReader();
   reader.onloadend = function(){
      document.getElementById('middle_img').style.backgroundImage = "url(" + reader.result + ")";  
   }
   if(file){
      reader.readAsDataURL(file);
    }else{
    }
}
changeMiddlePhoto();
// right column modification
var right_Color = "";
var right_FontSize = "";
var right_FontStyle = "";
var right_FontWeight = "";
function changeRightContent(){
    var input = document.getElementById("right_content").value;
	document.getElementById("right").innerHTML = input;
}
function changeRightColor(){
	var userInput = document.getElementById("right_color").value;
	middle_Color = "color: "+userInput+";";
	document.getElementById("right").setAttribute("style", middle_Color + middle_FontSize + middle_FontStyle + middle_FontWeight);
}
function changeRightSize(){
	var userInput = document.getElementById("right_size").value;
	middle_FontSize = "font-size: "+userInput+"px;";
	document.getElementById("right").setAttribute("style", middle_Color + middle_FontSize + middle_FontStyle + middle_FontWeight);
}
function changeRightStyle(){
	var userInput = document.getElementById("right_style").value;
	middle_FontStyle = "font-style: "+userInput+";";
	document.getElementById("right").setAttribute("style", middle_Color + middle_FontSize + middle_FontStyle + middle_FontWeight);
}
function changeRightWeight(){
	var userInput = document.getElementById("right_weight").value;
	middle_FontWeight = "font-weight: "+userInput+";";
	document.getElementById("right").setAttribute("style", middle_Color + middle_FontSize + middle_FontStyle + middle_FontWeight);
}
// change right column background
document.getElementById("right_background").addEventListener('change', changeRightBackground, true);
function changeRightBackground(){
   var file = document.getElementById("right_background").files[0];
   var reader = new FileReader();
   reader.onloadend = function(){
      document.getElementById('right_column').style.backgroundImage = "url(" + reader.result + ")";        
   }
   if(file){
      reader.readAsDataURL(file);
    }else{
    }
}
changeRightBackground();
// add right photo
document.getElementById("right_photo").addEventListener('change', changeRightPhoto, true);
function changeRightPhoto(){
   var file = document.getElementById("right_photo").files[0];
   var reader = new FileReader();
   reader.onloadend = function(){
      document.getElementById('right_img').style.backgroundImage = "url(" + reader.result + ")";  
   }
   if(file){
      reader.readAsDataURL(file);
    }else{
    }
}
changeRightPhoto();
// footer modification
var footer_Color = "";
var footer_FontSize = "";
var footer_FontStyle = "";
var footer_FontWeight = "";
function changeFooterContent(){
    var input = document.getElementById("footer_content").value;
	document.getElementById("footer").innerHTML = input;
}
function changeFooterColor(){
	var userInput = document.getElementById("footer_color").value;
	middle_Color = "color: "+userInput+";";
	document.getElementById("footer").setAttribute("style", middle_Color + middle_FontSize + middle_FontStyle + middle_FontWeight);
}
function changeFooterSize(){
	var userInput = document.getElementById("footer_size").value;
	middle_FontSize = "font-size: "+userInput+"px;";
	document.getElementById("footer").setAttribute("style", middle_Color + middle_FontSize + middle_FontStyle + middle_FontWeight);
}
function changeFooterStyle(){
	var userInput = document.getElementById("footer_style").value;
	middle_FontStyle = "font-style: "+userInput+";";
	document.getElementById("footer").setAttribute("style", middle_Color + middle_FontSize + middle_FontStyle + middle_FontWeight);
}
function changeFooterWeight(){
	var userInput = document.getElementById("footer_weight").value;
	middle_FontWeight = "font-weight: "+userInput+";";
	document.getElementById("footer").setAttribute("style", middle_Color + middle_FontSize + middle_FontStyle + middle_FontWeight);
}
// change footer background
document.getElementById("footer_background").addEventListener('change', changeFooterBackground, true);
function changeFooterBackground(){
   var file = document.getElementById("footer_background").files[0];
   var reader = new FileReader();
   reader.onloadend = function(){
      document.getElementById('footer_back').style.backgroundImage = "url(" + reader.result + ")";        
   }
   if(file){
      reader.readAsDataURL(file);
    }else{
    }
}
changeFooterBackground();

var user_id = <?php echo json_encode($user_id) ?>
// jQuery & Ajax 
$(function() {
            $('form.style').bind('submit', function(){
                $.ajax({
                    type: 'post',
                    url: user_id + "_page_change.php",
                    data: $("form.style").serialize(),
                    success: function() {
                    }
                });
                return false;
            });
        });
		
$("form.background").submit(function(e) {
    e.preventDefault();    
    var formData = new FormData(this);

    $.ajax({
        url: user_id + "_page_change.php",
        type: 'POST',
        data: formData,
        success: function (data) {
        },
        cache: false,
        contentType: false,
        processData: false
    });
});
</script>