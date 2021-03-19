<!DOCTYPE html>
<html>
<head>
	<title>Terminal Report</title>
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
				<input style="width:160px;margin-left:2em" type = "text" class = "form-control"   id = "date1"/>
				<input style="width:160px;margin-left:.5em" type = "text" class = "form-control"  id = "date2"/>
				<button type = "button" class = "btn btn-primary" id = "btn_search" style="padding:6px "><span class="ion-ios-search"></span></button>
				<button type="button" class="btn" name="search" id ="btn_search" style="width:50px;height:50px; font-size:2vw; border-radius:50%; background:none"><span  style=""></span></button>
            <h3 style="margin-left:6em;font-family: 'Source Sans Pro';">TERMINAL REPORT</h3>
        </ul>
    </div>
    <div style=" width:100%; margin-left:-6.5em">
	<div class="container" style="padding-top:7em;">
	<div style="height:90%;"></div>
	<div class=""  style=" width:107%;">
		<div style="height:10px" ></div>
				<table class="table table-striped table-bordered table-hover"  >
						<thead style="display: block; overflow: hidden; word-break: break-word;border-bottom:1px solid white; padding-bottom:8px; padding-top:8px">
                                <th style="width:9%">TERMINAL</th>
                                <th style="width:9%">DATE</th>
                                <th style="width:9%">TOTAL TRIPS <br> (Per Day)</th>
                                <th style="width:9%">TOTAL ARRIVED BUS <br> (Per Day)</th>
								<th style="width:9%">TOTAL DEPARTED BUS <br> (Per Day)</th>
						</thead>
						<tbody style="display: block;overflow:auto; width: 100%;height: 550px; word-break: break-word; scrollbar-width: none; border-bottom:1px solid white">
							<?php
								include('conn.php');
								
								$query=mysqli_query($conn,"SELECT  a.que_id as que_id, d.descrip as ter_descrip
								FROM que_details a, ter_details d
								WHERE a.ter_id = d.ter_id
								ORDER BY que_id desc ");
								 
								while($row=mysqli_fetch_array($query)){
									?>
									<tr style="border-bottom:1px solid white;margin-bottom:5px;height:50px">
                                        <td style="width:9%"><?php echo $row['que_id']; ?></td>
                                        <td style="width:9%"><?php echo $row['ter_descrip']; ?></td>
										<td style="width:9%"><?php echo $row['']; ?></td>
										<td style="width:9%"><?php echo $row['']; ?></td>
										<td style="width:8%"><?php echo $row['']; ?></td>
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
                        


</body>
</html>