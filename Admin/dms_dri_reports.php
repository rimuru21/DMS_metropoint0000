<!DOCTYPE html>
<html>
<head>
	<title>Driver Report</title>
    <link href="" rel="stylesheet">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/png" href="images/icons/dashboard.ico"/>
	<script src="js/jquery.crud.min.js"></script>
	<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.crud.min.css" />
    <link rel="stylesheet" href="css/main.css" />
	<link href="css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
	<script src="js/bootstrap.crud.min.js"></script>
</head>
<body>
<div class="row">
	<div class="col-md-2">
		<?php include 'nav.php';?>
	</div>
	<div class="col-md-10">
	<div>
	<ul class="menu-bar">
			<li  style="font-family: 'Source Sans Pro';"><a href="dms_reports.php">BUS</a></li>
            <li style="left:1em;font-family: 'Source Sans Pro';"><a href="dms_trip_reports.php">TRIP</a></li>
            <li style="left:.5em;font-family: 'Source Sans Pro';"><a href="dms_dri_reports.php">DRIVER</a></li>
            <li style="left:.4em;font-family: 'Source Sans Pro';"><a href="dms_con_reports.php">CONDUCTOR</a></li>
            <li style="left:.4em;font-family: 'Source Sans Pro';"><a href="dms_ter_reports.php">TERMINAL</a></li>
				<input style="width:160px;margin-left:7em" type = "date" class = "form-control"   id = "date1"/>
				<input style="width:160px;margin-left:.5em" type = "date" class = "form-control"  id = "date2"/>
				<button type = "button" class = "btn btn-primary" id = "btn_search1" style="margin-left:.5em; padding:2px;  padding-left:10px; padding-right:10px; font-size:1.5vw"><span class="ion-ios-search"></span></button>
				<button type = "button" class = "btn btn-warning" id = "reset1" style="margin-left:.5em; padding:2px;  padding-left:10px; padding-right:10px; font-size:1.5vw"><span class="ion-android-refresh"></span></button>
            <h3 style="margin-left:4em;font-family: 'Source Sans Pro';">DRIVER REPORT</h3>
        </ul>
    </div>
    <div  style=" width:100%; margin-left:-6.5em">
	<div class="container" style="padding-top:7em;">
	<div style="height:90%;"></div>
	<div class=""  style=" width:107%;">
		<div style="height:10px" ></div>
				<table class="table table-striped table-bordered table-hover"  >
						<thead style="display: block; overflow: hidden; word-break: break-word;border-bottom:1px solid white; padding-bottom:8px; padding-top:8px">
                                <th style="width:10%">NAME</th>
                                <th style="width:9%">TRIP #</th>
                                <th style="width:9%">BUS #</th>
                                <th style="width:10.5%;text-align:center">ROUTE</th>
								<th style="width:9%">TORNO TIME</th>
								<th style="width:9%">DEPARTURE TIME</th>
								<th style="width:9%">DEPARTURE DATE</th>
								<th style="width:9%">ARRIVAL TIME</th>
								<th style="width:9.5%">ARRIVAL DATE</th>
						</thead>
						<tbody style="display: block;overflow:auto; width: 100%;height: 550px; word-break: break-word; scrollbar-width: none; border-bottom:1px solid white">
							<?php
								include('conn.php');  
								$query=mysqli_query($conn,"SELECT a.trip_no as trip_no, a.bus_no as bus_no, a.ass_dri as ass_dri, a.ass_con as ass_con, b.stat_id as stat_id, b.descrip as stat, a.seat_cap as seat_cap, a.from_ter as from_ter, a.to_ter as to_ter, a.que_time as que_time, a.que_date as que_date, a.dep_time as dep_time, a.dep_date as dep_date, a.arr_time as arr_time, a.arr_date as arr_date
								FROM que_details a, user_stat b
								GROUP BY ass_dri
								ORDER BY que_id desc  ");
								while($row=mysqli_fetch_array($query)){
									?>
									<tr style="border-bottom:1px solid white;margin-bottom:5px;height:50px">
										<td style="width:10%"><?php echo $row['ass_dri']; ?></td>
                                        <td style="width:9%"><?php echo $row['trip_no']; ?></td>
										<td style="width:9%"><?php echo $row['bus_no']; ?></td>
                                        <td style="width:11%"><?php echo $row['from_ter']; ?> - <?php echo $row['to_ter']; ?></td>
                                        <td style="width:9%"><?php echo $row['que_time']; ?></td>
										<td style="width:9%"><?php echo $row['dep_time']; ?></td>
										<td style="width:9%"><?php echo $row['dep_date']; ?></td>
										<td style="width:9%"><?php echo $row['arr_time']; ?></td>
										<td style="width:8%"><?php echo $row['arr_date']; ?></td>
										
									</tr>
									<?php
								}
							
							?>
						</tbody>
				</table>
				</div>
		<?php include('modal/add_user_modal.php'); ?>
</div>
</div>
</div>
<script>

</script>
<script src = "date/js/jquery-3.1.1.js"></script>
<script src = "date/js/jquery-ui.js"></script>
<script src = "date/js/ajax.js"></script>
</body>
</html>
