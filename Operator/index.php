<?php include('auth.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="crud/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="crud/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="crud/css/main.css">
</head>
<body onload="updateClock(); setInterval('updateClock()', 1000 )">
	<div class="limiter col-lg-12" style="">
		<div class="container-login100" style="width:103.5%;left:-3em;background-image: url('images/banner1.jpg');">
		<div style="margin-right:-10em;" class="col-lg-6">		
			<div style="right:15em;margin-top:1.2em;padding-top:5px;width:90%;backgound-color:white;"> 	
			<h1  style="font-family:Agency FB;font-size:13vw;text-align:left;color:#222222"><span id="clock">&nbsp;</span><span style="margin-left:-.4em;font-family:Agency FB;font-size:6.5vw;text-color:#222222"id="clock2">&nbsp;</span></h1>
			<!-- <h1  style="font-family:Agency FB;font-size:13vw;text-align:left;padding-right: 40px;color:#222222"><span id="clock1">&nbsp;</span><span style="font-family:Agency FB;font-size:4vw;text-color:#222222"id="clock2">&nbsp;</span></h1> -->
			<h2  style="font-family:Agency FB;margin-top:-.5em;font-size:3vw;text-align:left;padding-left: 60px;color:#222222"></h2>&nbsp;
				
			</div>
			<script>
            var objToday = new Date(),
              weekday = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'),
              dayOfWeek = weekday[objToday.getDay()],
              // domEnder = function() { var a = objToday; if (/1/.test(parseInt((a + "").charAt(0)))) return "th"; a = parseInt((a + "").charAt(1)); return 1 == a ? "st" : 2 == a ? "nd" : 3 == a ? "rd" : "th" }(),
              dayOfMonth = today + ( objToday.getDate() < 10) ? '0' + objToday.getDate() + domEnder : objToday.getDate() ,
              months = new Array('Jan.', 'Feb', 'March', 'April', 'May', 'June', 'July', 'Aug.', 'Sept.', 'Oct.', 'Nov.', 'Dec.'),
              curMonth = months[objToday.getMonth()],
              curYear = objToday.getFullYear();
				   var today = dayOfWeek + ", " + curMonth + " " + dayOfMonth +  "," +" "+ curYear;
				document.getElementsByTagName('h2')[0].textContent = today;

				function init ( )
				{
				timeDisplay = document.createTextNode ( "" );
				document.getElementById("clock").appendChild ( timeDisplay );
				}
				function updateClock ( )
				{
					var currentTime = new Date ( );
					var currentHours = currentTime.getHours ( );
					var currentMinutes = currentTime.getMinutes ( );
					var currentSeconds = currentTime.getSeconds ( );
					currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
					currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;
					var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";
					currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;
					currentHours = ( currentHours == 0 ) ? 12 : currentHours;
					currentHours = ( currentHours < 10 ? "0" : "" ) + currentHours;
					var currentTimeString = currentHours + ":" + currentMinutes + " " ;
					var currentTimeString2 =  timeOfDay;
					document.getElementById("clock").firstChild.nodeValue = currentTimeString;
					document.getElementById("clock2").firstChild.nodeValue = currentTimeString2;
				}
			</script>
		</div>
			<div class="wrap-login100 col-lg-6" style="">
				<form class="login100-form" method="post" action="index.php">
				<?php include('errors.php'); ?>
					<span>
						<img class="login100-form-logo" src="images/logo.jpg"/>
					</span>
					<span class="login100-form-title">
						MetroPoint
					</span>

					<div class="wrap-input100" data-validate = "Enter username">
						<input class="input100" type="text" name="u_name" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<br><br><br>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" class="btn" name="login_user">
							Login
						</button>
					</div>
					<br>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="crud/js/main.js"></script>

</body>
</html>