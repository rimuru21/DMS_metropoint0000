<!DOCTYPE html>
<html>
<head>
	<title>Torno</title>
	<script src="js/jquery.crud.min.js"></script>
    <link rel="icon" type="image/png" href="crud/images/icons/file.ico"/>
	<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/bootstrap.crud.min.css" />
	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
	<script src="js/bootstrap.crud.min.js"></script>
</head>
<body>
<div class="row">
	<div class="col-md-2">
		<?php include 'nav.php';?>
	</div>
	<div class="col-md-10">
	<div class="container" style="padding-top:3em;margin-left:-2.5em">
	<div style="height:90%;"></div>
	<div class="" style=" width:100%;">

		<span class="pull-right"><a style="padding:8px; margin-right:0em; margin-bottom:.5em; border-radius:4px "href="#addnew_torno" data-toggle="modal" class="btn btn-primary"><span class="ion-plus-round" style="padding-right:.5em"></span> ADD TORNO</a></span>
		
		<div style="height:10px;"></div>
				<table class="table table-striped table-bordered table-hover" >
						<thead style="display: block; overflow: hidden; word-break: break-word ">
								<th style="width:10%; padding-top:10px; padding-bottom:10px ">TRIP #</th>
								<th style="width:9%; padding-top:10px; padding-bottom:10px">BUS #</th>
								<th style="width:9.5%; padding-top:10px; padding-bottom:10px">DRIVER</th>
								<th style="width:10%; padding-top:10px; padding-bottom:10px">CONDOCTOR</th>
                                <th style="width:9.5%; padding-top:10px; padding-bottom:10px">FROM TER.</th>
                                <th style="width:10%; padding-top:10px; padding-bottom:10px">TO TER.</th>
                                <th style="width:10%; padding-top:10px; padding-bottom:10px">TIMED TORNO</th>
                                <th style="width:10%; padding-top:10px; padding-bottom:10px">DATE TORNO</th>
								<th style="width:11%; text-align:center; padding-top:10px; padding-bottom:10px">ACTION</th>
						</thead>
						<tbody style="display: block;overflow:auto; width: 100%;height: 280px; word-break: break-word; scrollbar-width: none; ">
							<?php
								include('conn.php');  
								$query=mysqli_query($conn,"SELECT a.que_id as que_id, a.trip_no as trip_no, a.bus_no as bus_no, a.ass_dri as ass_dri, a.ass_con as ass_con, b.bus_type_id as bus_type_id, b.abbr as abbr, a.seat_cap as seat_cap, a.from_ter as from_ter, a.to_ter as to_ter, a.que_time as que_time, a.que_date as que_date, a.ip_add as ip_add, a.ip_add1 as ip_add1, a.ip_add2 as ip_add2, a.ip_add3 as ip_add3, a.que_date as que_date, a.que_time as que_time
								FROM que_details a, bus_type b
								WHERE a.bus_type_id = b.bus_type_id AND que_stat_id = 4 AND from_ter = 'Tagum'
								ORDER BY que_id asc ");
								 
								while($row=mysqli_fetch_array($query)){
									?>
									<tr>
										<td style="width:10%"><?php echo $row['trip_no']; ?></td>
										<td style="width:9%"><?php echo $row['bus_no']; ?></td>
										<td style="width:10%"><?php echo $row['ass_dri']; ?></td>
										<td style="width:10%"><?php echo $row['ass_con']; ?></td>
                                        <td style="width:10%"><?php echo $row['from_ter']; ?></td>
										<td style="width:10%"><?php echo $row['to_ter']; ?></td>
                                        <td style="width:10%"><?php echo $row['que_time']; ?></td>
                                        <td style="width:10%"><?php echo $row['que_date']; ?></td>
										<td style="width:10%; text-align:center">
											<a style="font-size:1.5vw" href="#view_que<?php echo $row['que_id']; ?>" data-toggle="modal" class="btn "><span class="ion-eye"></span> </a> |
											<a style="font-size:1.5vw" href="#edit_que<?php echo $row['que_id']; ?>" data-toggle="modal" class="btn "><span class="ion-edit"></span> </a> |
											<a style="font-size:1.5vw" href="#del_que<?php echo $row['que_id']; ?>" data-toggle="modal" class="btn "><span class="ion-trash-b"></span></a>
											<?php include('action/action_torno.php'); ?>
										</td>
									</tr>
									<?php
								}
							
							?>
							
						</tbody>
						<thead style="display: block; overflow: hidden; word-break: break-word ">
								<th style="width:1020px; padding-top:10px; padding-bottom:10px ">DEPARTED BUS</th>
								<th style=" text-align:left; padding-right:.3em;padding-top:10px; padding-bottom:10px">DEPARTED TIME</th>
						</thead>
						<tbody style="display: block;overflow:auto; width: 100%;height: 240px; word-break: break-word; scrollbar-width: none; ">
							<?php
								include('conn.php');  
								$query=mysqli_query($conn,"SELECT a.trip_no as trip_no, a.bus_no as bus_no, a.ass_dri as ass_dri, a.ass_con as ass_con, b.bus_type_id as bus_type_id, b.abbr as abbr, a.seat_cap as seat_cap, a.from_ter as from_ter, a.to_ter as to_ter, a.que_time as que_time, a.que_date as que_date, a.ip_add as ip_add, a.ip_add1 as ip_add1, a.ip_add2 as ip_add2, a.ip_add3 as ip_add3, a.que_date as que_date, a.que_time as que_time, a.dep_time as dep_time
								FROM que_details a, bus_type b
								WHERE a.bus_type_id = b.bus_type_id AND que_stat_id = 2 AND from_ter = 'Tagum'
								ORDER BY que_id desc ");
								 
								while($row=mysqli_fetch_array($query)){
									?>
									<tr>
										<td style="width:10%"><?php echo $row['trip_no']; ?></td>
										<td style="width:9%"><?php echo $row['bus_no']; ?></td>
										<td style="width:10%"><?php echo $row['ass_dri']; ?></td>
										<td style="width:10%"><?php echo $row['ass_con']; ?></td>
                                        <td style="width:10%"><?php echo $row['from_ter']; ?></td>
										<td style="width:10%"><?php echo $row['to_ter']; ?></td>
                                        <td style="width:10%"><?php echo $row['que_time']; ?></td>
                                        <td style="width:10%"><?php echo $row['que_date']; ?></td>
										<td style="width:10%;text-align:center"><?php echo $row['dep_time']; ?></td>
									</tr>
									<?php
								}
							
							?>
							
						</tbody>
				</table>
		</div>
		<?php include('modal/add_torno_modal.php'); ?>
</div>
</div>
</div>





</body>
</html>