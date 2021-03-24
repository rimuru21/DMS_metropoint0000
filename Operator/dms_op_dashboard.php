<?php
require('conn.php');
include('auth.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Operator Dashboard</title>
    <link href="" rel="stylesheet">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/png" href="images/icons/dashboard.ico"/>
	<script src="js/jquery.crud.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.crud.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link href="css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
  
	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
	<script src="js/bootstrap.crud.min.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
</head>
<body  onload="updateClock(); setInterval('updateClock()', 1000 )">
<div class="row" >
    <div class="col-lg-12" style="position:fixed; background-color:rgba(255,255,255,0.3);left:.8em;margin-top:.5em;width:98.5%;"> 
    <h1 class="col-lg-3 ion-calendar" style="font-size:2vw;text-align:left;margin-top:15px"></h1>
    <h1 class="col-lg-6" style="font-size:2vw;text-align:center;padding:0px;margin-top:15px"><b>MetroPoint</b> - <i><?php echo "" .$_SESSION['u_name']; ?></i></h1>
    <h1 class="col-lg-3" style="font-size:2.2vw;text-align:right;padding-right: 20px;margin-top:15px"><span id="clock">&nbsp;</span></h1>
    </div>
        <script>
                var objToday = new Date(),
                weekday = new Array('Sun', 'Mon', 'Tues', 'Wed', 'Thur', 'Fri', 'Sat'),
                dayOfWeek = weekday[objToday.getDay()],
                // domEnder = function() { var a = objToday; if (/1/.test(parseInt((a + "").charAt(0)))) return "th"; a = parseInt((a + "").charAt(1)); return 1 == a ? "st" : 2 == a ? "nd" : 3 == a ? "rd" : "th" }(),
                dayOfMonth = today + ( objToday.getDate() < 10) ? '0' + objToday.getDate() + domEnder : objToday.getDate() ,
                months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
                curMonth = months[objToday.getMonth()],
                curYear = objToday.getFullYear();
                var today = " "+dayOfWeek +" "+ curMonth + " " + dayOfMonth +  "," +" "+ curYear;
                document.getElementsByTagName('h1')[0].textContent = today;

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
                var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
                document.getElementById("clock").firstChild.nodeValue = currentTimeString;
                }
        </script>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
    <div class="col-md-6" style="margin-top:4.5em; witdth:100%" >
        <div class="col-md-6" style="">
            <div class="container" style="padding-top:0em;left:5em">
            <div style="height:90%;"></div>
            <div class="" style=" width:58.5%;margin-left:1.4em">
                <div style="height:10px;"></div>
				        <table class="table table-striped table-bordered table-hover"  style="" id="myTable">
                        <thead style="display: block; overflow: hidden; word-break: break-word; background-color:rgba(255,255,255,0.2);">
                                <th style="width:50%;border-bottom:none; font-size:1.5vw"><span class="ion-android-bus" style="padding-right:.5em"></span>DEPARTURE</th>
                                <th style="width:10%;border-bottom:none;"></th>
						</thead>
						<thead style="display: block; overflow: hidden; word-break: break-word; background-color:rgba(255,255,255,0.3)">
                                <th style="width:10%">TRIP #</th>
                                <th style="width:10%;text-align: center">BUS #</th>
                                <th style="width:7%">TYPE</th>
                                <th style="width:7%">SEAT CAP</th>
                                <th style="width:10%;text-align: center">TO</th>
                                <th style="width:10%; text-align: center">TIME</th>
                                <th style="width:10%; text-align: center">DATE</th>
								                <th style="width:13%; text-align: center">STATUS</th>
						</thead>
						<tbody style="display: block;overflow:auto; width: 100%;height: 435px; word-break: break-word; scrollbar-width: none; ">
							<?php
								include('conn.php');
								
								$query=mysqli_query($conn,"SELECT a.que_id as que_id, a.trip_no as trip_no, a.bus_no as bus_no,CONCAT(d.l_name,' ',d.f_name) as dri, CONCAT(e.l_name,' ',e.f_name) as con, b.descrip as type_descrip, a.seat_cap, a.from_ter as from_ter, a.to_ter as to_ter, time_format(a.que_time, '%h:%i %p') as que_time, a.que_date as que_date, f.descrip as stat_descrip, f.que_stat_id as que_stat_ FROM que_details a, bus_type b, ter_details c, user_dri d, user_con e, que_stat f WHERE a.que_stat_id = f.que_stat_id AND a.dri_id = d.dri_id AND a.con_id = e.con_id AND  a.bus_type_id = b.bus_type_id AND from_ter = 'Tagum'  GROUP BY que_id ORDER BY que_stat_ desc  ");
								while($row=mysqli_fetch_array($query)){
									?>
								      	<tr mouseclick="href='#view_que<?php echo $row['que_id']; ?>'"  class="<?php echo $row['que_id']; ?>"style="border-bottom:1px solid white;">
                                        <td style="width:12.5%"><?php echo $row['trip_no']; ?></td>
                                        <td style="width:10%"><?php echo $row['bus_no']; ?></td>
                                        <td style="width:7%;"><?php echo $row['type_descrip']; ?></td>
                                        <td style="width:7%"><?php echo $row['seat_cap']; ?></td>
                                        <td style="width:10%"><?php echo $row['to_ter']; ?></td>
                                        <td style="width:10%"><?php echo $row['que_time']; ?></td>
                                        <td style="width:10%"><?php echo $row['que_date']; ?></td>
                                        <td style="width:6%;text-align:center" >
                                             <a style="font-size:1vw;padding:2px;padding-left:8px;padding-right:8px" ><?php echo $row['stat_descrip']; ?></a>
                                            <br>
										                      	<a style="font-size:1vw;padding:2px;" href="#view_que<?php echo $row['que_id']; ?>" data-toggle="modal" class="btn "><ion-icon name="eye"></ion-icon> DETAILS</a>
										                      	<?php include('action/action_op_dash.php'); ?>
									                    	</td>
									</tr>
									<?php
								}
							
							?>
						</tbody>
				</table>
		</div>
		<?php include('modal/add_stat_modal.php'); ?>
</div>
</div>
</div>
        <div class="col-md-6" style="margin-top:4.5em; witdth:100%" >
        <div class="col-md-6" style="">
        <div class="container" style="padding-top:0em;left:4em" >
            <div style="height:90%;"></div>
            <div class="" style=" width:58.5%; margin-left:-1em">
                <div style="height:10px;"></div>
				        <table class="table table-striped table-bordered table-hover"  style="" id="myTable">
                        <thead style="display: block; overflow: hidden; word-break: break-word; background-color:rgba(255,255,255,0.2);">
                                <th style="width:50%;border-bottom:none; font-size:1.5vw"><span class="ion-android-bus" style="padding-right:.5em"></span>ARRIVAL</th>
                                <th style="width:10%;border-bottom:none;"></th>
						</thead>
						<thead style="display: block; overflow: hidden; word-break: break-word; background-color:rgba(255,255,255,0.3)">
                                <th style="width:10%">TRIP #</th>
                                <th style="width:10%;text-align: center">BUS #</th>
                                <th style="width:7%">TYPE</th>
                                <th style="width:7%">SEAT CAP</th>
                                <th style="width:10%;text-align: center">FROM</th>
                                <th style="width:10%; text-align: center">TIME</th>
                                <th style="width:10%; text-align: center">DATE</th>
								                <th style="width:13%; text-align: center">STATUS</th>
						</thead>
						<tbody style="display: block;overflow:auto; width: 100%;height: 435px; word-break: break-word; scrollbar-width: none; " >
							<?php
								include('conn.php');
								$query=mysqli_query($conn,"SELECT a.que_id as que_id, a.trip_no as trip_no, a.bus_no as bus_no,CONCAT(d.l_name,' ',d.f_name) as dri, CONCAT(e.l_name,' ',e.f_name) as con, b.descrip as type_descrip, a.seat_cap, a.from_ter as from_ter, a.to_ter as to_ter, time_format(a.que_time, '%h:%i %p') as que_time, a.que_date as que_date, f.descrip as stat_descrip, f.que_stat_id as que_stat_   FROM que_details a, bus_type b, ter_details c, user_dri d, user_con e, que_stat f WHERE a.que_stat_id = f.que_stat_id AND  a.dri_id = d.dri_id AND a.con_id = e.con_id AND  a.bus_type_id = b.bus_type_id AND to_ter = 'tagum' GROUP BY que_id ORDER BY que_stat_ desc   ");
								while($row=mysqli_fetch_array($query)){
									?>
								      	<tr class="<?php echo $row['que_id']; ?>"style="border-bottom:1px solid white;">
                                        <td style="width:12.5%"><?php echo $row['trip_no']; ?></td>
                                        <td style="width:10%"><?php echo $row['bus_no']; ?></td>
                                        <td style="width:7%;"><?php echo $row['type_descrip']; ?></td>
                                        <td style="width:7%"><?php echo $row['seat_cap']; ?></td>
                                        <td style="width:10%"><?php echo $row['from_ter']; ?></td>
                                        <td style="width:10%"><?php echo $row['que_time']; ?></td>
                                        <td style="width:10%"><?php echo $row['que_date']; ?></td>
                                        <td style="width:10%;text-align:center" >
                                             <a style="font-size:1vw;padding:2px;padding-left:8px;padding-right:8px" class="label-primary">OnRoad</a>
                                            <br>
										                      	<a  style="font-size:1vw; padding:2px;"href="#view_map<?php echo $row['que_id']; ?>" data-toggle="modal" class="btn "><ion-icon name="location"></ion-icon> MAP</a>
										                      	<?php include('action/action_op_dash.php'); ?>
									                    	</td>
									</tr>
									<?php
								}
							
							?>
						</tbody>
				</table>
		</div>
		<?php include('modal/add_stat_modal.php'); ?>
</div>
</div>

</div>
</div>
</div>
<div class="row" >
    <section class="card_content" style="margin-left:8.5em; width:95.5%; height:30px;margin-top:-1em; position:fixed;padding-right:10px">

          <div class="row">
              <div class="col-lg-2 col-xs-2" style="padding-right:5px ;padding-left:9px">
                <div class="small-box bg-aqua" >
                <div class="inner">
                <?php
									include('conn.php');                
									$query=mysqli_query($conn,"SELECT COUNT('que_id') AS TotalBus FROM que_details WHERE que_stat_id = 1 AND to_ter ='Tagum' ;");
											while($row=mysqli_fetch_array($query)){
								?>
                  <h3><?php echo $row['TotalBus']; ?></h3>
                  <h4>ARRIVED BUS</h4>
                  <?php
																					}
							  	?>
                </div>
                <div class="icon">
                <i class="ion ion-android-bus"></i>
                </div>
               
              </div>
            </div>
            <div class="col-lg-2 col-xs-2" style="padding-right:5px ;padding-left:9px">
                <div class="small-box bg-aqua" >
                <div class="inner">
                  <?php
                    include('conn.php');                
                    $query=mysqli_query($conn,"SELECT COUNT('que_id') AS TotalBus FROM que_details WHERE que_stat_id = 2 AND from_ter ='Tagum' ;");
                        while($row=mysqli_fetch_array($query)){
                  ?>
                  <h3><?php echo $row['TotalBus']; ?></h3>
                  <h4>DEPARTED BUS</h4>
                  <?php
																					}
							  	?>
                </div>
                <div class="icon">
                <i class="ion ion-android-bus"></i>
                </div>
               
              </div>
            </div>
            <div class="col-lg-2 col-xs-2" style="padding-right:5px ;padding-left:9px">
                <div class="small-box bg-aqua" >
                <div class="inner">
                 <?php
                    include('conn.php');                
                    $query=mysqli_query($conn,"SELECT COUNT('que_id') AS TotalBus FROM que_details WHERE que_stat_id = 3;");
                        while($row=mysqli_fetch_array($query)){
                  ?>
                  <h3><?php echo $row['TotalBus']; ?></h3>
                  <h4>ON ROAD BUS</h4>
                  <?php
																					}
							  	?>
                </div>
                <div class="icon">
                <i class="ion ion-android-bus"></i>
                </div>
                
              </div>
            </div>
            <div class="col-lg-2 col-xs-2" style="padding-right:5px ;padding-left:9px">
                <div class="small-box bg-aqua" >
                <div class="inner">
                 <?php
                    include('conn.php');                
                    $query=mysqli_query($conn,"SELECT COUNT('que_id') AS TotalBus FROM que_details WHERE que_stat_id = 4 AND from_ter = 'Tagum';");
                        while($row=mysqli_fetch_array($query)){
                  ?> 
                  <h3><?php echo $row['TotalBus']; ?></h3>
                  <h4>TORNO BUS</h4>
                  <?php
																					}
							  	?>
                </div>
                <div class="icon">
                <i class="ion ion-android-bus"></i>
                </div>
                
              </div>
            </div>
            <div class="col-lg-2 col-xs-2" style="padding-right:5px ;padding-left:9px">
                <div class="small-box bg-aqua" >
                <div class="inner">
                  <?php
                    include('conn.php');                
                    $query=mysqli_query($conn,"SELECT COUNT('bus_id') AS TotalBus FROM bus_details WHERE con_id = 0;");
                        while($row=mysqli_fetch_array($query)){
                  ?>
                  <h3><?php echo $row['TotalBus']; ?></h3>
                  <h4>BUS W/OUT CON.</h4>
                  <?php
																					}
							  	?>
                </div>
                <div class="icon">
                <i class="ion ion-android-bus"></i>
                </div>
                
              </div>
            </div>
            <div class="col-lg-2 col-xs-2" style="padding-right:5px ;padding-left:9px">
                <div class="small-box bg-aqua" >
                <div class="inner">
                <?php
                    include('conn.php');                
                    $query=mysqli_query($conn,"SELECT COUNT('bus_id') AS TotalBus FROM bus_details WHERE dri_id = 0;");
                        while($row=mysqli_fetch_array($query)){
                  ?>
                  <h3><?php echo $row['TotalBus']; ?></h3>
                  <h4>BUS W/OUT DRI.</h4>
                  <?php
																					}
							  	?>
                </div>
                <div class="icon">
                <i class="ion ion-android-bus"></i>
                </div>
               
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
    </section>
</div>


<div class="row">
    <div class="col-md-12" style="margin-top:8.35em;left:-.3em;position: fixed">
        <div class="">
        <a style="margin-right:.2em; background-color: white; padding:4px; border-radius: 10%; " href="dms_user.php"> <span style="margin-right:.5em;font-size:1.2vw" class="ion-home" ></span>HOME</a>
            <a style="margin-left:84em;background-color: white; padding:4px; border-radius: 10%;" href="logout.php"><span style="margin-right:.5em;font-size:1.2vw" class="ion-person" ></span>LOGOUT</a>
        </div>
    </div>
</div>


<script type="text/javascript">
$(function() {
  $("#myTable td a").each(function() {
    if ($(this).text() == "Waiting") {
      $(this).css('color', 'white');
      $(this).css('background-color', 'red');
    }
	else if ($(this).text() == "Departed") {
      $(this).css('color', 'white');
      $(this).css('background-color', 'green');
    }
	else if ($(this).text() == "OnRoad") {
      $(this).css('color', 'black' );
      $(this).css('background-color', 'yellow');
    }
	else if ($(this).text() == "Arrived") {
      $(this).css('color', 'black');
      $(this).css('background-color', 'orange');
    }
  });
});
</script>


</body>
</html>