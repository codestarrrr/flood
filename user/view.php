<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>Flood Monitoring System
</title>
<script type="text/javascript" charset="utf-8" src="cordova.js"></script>
<script>

document.addEventListener("deviceready", onDeviceReady, false);
    function onDeviceReady() {
        document.addEventListener("backbutton", function (e) {
            e.preventDefault();
        }, false );
}
</script>
<style>
h2 {
	background-color:#e6e600;
	padding:15px;
	color:#000;
}
.myButton {
width:95%;
    opacity:0.8;
	-moz-box-shadow:inset 0px 1px 0px 0px #cf866c;
	-webkit-box-shadow:inset 0px 1px 0px 0px #cf866c;
	box-shadow:inset 0px 1px 0px 0px #cf866c;
	background-color:#FFF;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #942911;
	display:inline-block;
	cursor:pointer;
	color:#000000;
	font-family:Arial;
	font-size:15px;
	padding:15px;
	text-decoration:none;
	text-shadow:0px 1px 0px #854629;
}


@import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700);

html, body,form  {
color:#000;
height:100%;
}
body {
  background: #999;
  
  padding: 20px;
  font-family: "Open Sans Condensed", sans-serif;
}

#bg {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: url(img/bg.jpg) no-repeat center center fixed;
  background-size: cover;
  -webkit-filter: blur(5px);    
}

form {
  position: relative;
  width: 90%;
  height:100%;
  margin: 0 auto;
  background: rgba(130,130,130,.3);
  padding: 20px 22px;
  border: 1px solid;
  border-top-color: rgba(255,255,255,.4);
  border-left-color: rgba(255,255,255,.4);
  border-bottom-color: rgba(60,60,60,.4);
  border-right-color: rgba(60,60,60,.4);
}

form input, form button {
  width: 87%;
  border: 1px solid;
  border-bottom-color: rgba(255,255,255,.5);
  border-right-color: rgba(60,60,60,.35);
  border-top-color: rgba(60,60,60,.35);
  border-left-color: rgba(80,80,80,.45);
  background-color: rgba(0,0,0,.2);
  background-repeat: no-repeat;
  padding: 8px 24px 8px 10px;
  font: bold .875em/1.25em "Open Sans Condensed", sans-serif;
  letter-spacing: .075em;
  color: #fff;
  text-shadow: 0 1px 0 rgba(0,0,0,.1);
  margin-bottom: 19px;
}

form input:focus { background-color: rgba(0,0,0,.4); }



::-webkit-input-placeholder { color: #ccc; text-transform: uppercase; }
::-moz-placeholder { color: #ccc; text-transform: uppercase; }
:-ms-input-placeholder { color: #ccc; text-transform: uppercase; }

form button[type=submit] {
  width: 248px;
  margin-bottom: 0;
  color: #3f898a;
  letter-spacing: .05em;
  text-shadow: 0 1px 0 #133d3e;
  text-transform: uppercase;
  background: #225556;
  border-top-color: #9fb5b5;
  border-left-color: #608586;
  border-bottom-color: #1b4849;
  border-right-color: #1e4d4e;
  cursor: pointer;
}
form button {
  width: 248px;
  margin-bottom: 0;
  color: #3f898a;
  letter-spacing: .05em;
  text-shadow: 0 1px 0 #133d3e;
  text-transform: uppercase;
  background: #225556;
  border-top-color: #9fb5b5;
  border-left-color: #608586;
  border-bottom-color: #1b4849;
  border-right-color: #1e4d4e;
  cursor: pointer;
}
p {
color:#FFF;
}
h1 {
color:#FFF;

}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
		<link type="text/css" rel="stylesheet" href="css/demo.css" />
		<link type="text/css" rel="stylesheet" href="dist/core/css/jquery.mmenu.all.css" />

		<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript" src="dist/core/js/jquery.mmenu.min.all.js"></script>
		<script type="text/javascript">
			$(function() {
				$('nav#menu').mmenu({
					extensions	: [ 'effect-slide-menu', 'pageshadow' ],
					searchfield	: false,
					counters	: false,
				
					navbars		: [
						 {
							position	: 'top',
							content		: [
								'prev',
								'close'
							]
						}, {
							position	: 'bottom',
							content		: [
									'<a href="../logout.php"  style="text-align:left;padding-left:20px;font-weight:normal;color:#000">Logout</a>'
							]
						}
					]
				});
			});
		</script>
	</head>
	<body style="background-image:url('images/background.jpg');background-size:100% 100%;background-repeat:no-repeat;background-attachment:fixed">
		<div id="page">
		<style>
		#slideshow { 
		    
	position:relative;
		}
		
		#slideshow > div { 
		    position: absolute; 
		    top: 15px; 
		    left: 0px; 
		    right: 0px; 
		    bottom: 0px; 
    
		}

p {
	color:#FFF;
}
	</style>
	<script>

		$(function() {
		
			$("#slideshow > div:gt(0)").hide();
	
			setInterval(function() { 
			  $('#slideshow > div:first')
			    .fadeOut(2000)
			    .next()
			    .fadeIn(2000)
			    .end()
			    .appendTo('#slideshow');
			},  2000);
			
		});

	</script>

			<div class="header"  style="background-color:#e6e600;color:#000;">
				<a href="#menu"></a>
				<center>
				Evacuation
			</div>
			
			 <div class="content">
			 <center>
		<?php
			include('../connect.php');
			$id = $_GET['id'];
			$result = mysql_query("SELECT * FROM evacuation WHERE id='$id'");
			while($row = mysql_fetch_array($result))
			{
				$name =$row['name'];
				$classroom =$row['classroom'];
				$toilet =$row['toilet'];
				$water =$row['water'];
				$lightning =$row['lightning'];
				$contact =$row['contact'];
				$person =$row['person'];
			}
			?>
			 <h2><?php  echo $name ?></h2>
			 <br>
			<table style="width:90%;color:#FFF;font-size:18px">
				<tr>
					<td>Number of Classroom:</td>
					<td>&nbsp;</td>
					<td><?php  echo $classroom ?></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>Status of Toilet:</td>
					<td>&nbsp;</td>
					<td><?php  echo $toilet ?></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>Status of Water:</td>
					<td>&nbsp;</td>
					<td><?php  echo $water ?></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>Status of Lightning:</td>
					<td>&nbsp;</td>
					<td><?php  echo $lightning ?></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>Contact Number:</td>
					<td>&nbsp;</td>
					<td><a href="tel:<?php  echo $contact ?>" style="color:lightblue"><?php  echo $contact ?></a></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>Contact Person:</td>
					<td>&nbsp;</td>
					<td><?php  echo $person ?></td>
				</tr>
			</table>
		<br><br>
		
			</div>
	<nav id="menu" style="background-color:#e6e600;top:0px">
			
				<ul  >
				<center>
				</center>
					<li  onclick="window.location='index.php'"><a href="index.php" style="color:#000">Home</a></li>
					<li  onclick="window.location='flood.php'"><a href="flood.php" style="color:#000">Flood Level</a></li>
					<li  onclick="window.location='evacuation.php'"><a href="evacuation.php" style="color:#000">Evacuation</a></li>
					<li  onclick="window.location='contact.php'"><a href="contact.php" style="color:#000">Contact</a></li>
					<li  onclick="window.location='about.php'"><a href="about.php" style="color:#000">About</a></li>
						
					</ul>
						</nav>
		</div>
	</body>
</html>