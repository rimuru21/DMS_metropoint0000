<!DOCTYPE html>
<html>
<head>
	<title>Bus Details</title>
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
	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	 <link rel="stylesheet" href="./src/ipInput.css">
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
				<li  style="font-family: 'Source Sans Pro';"><a href="dms_user.php">User Details</a></li>
				<li  style="font-family: 'Source Sans Pro';"><a href="dms_bus.php">Bus Details</a></li>
				<li  style="font-family: 'Source Sans Pro';"><a href="dms_status.php">Bus & User Status</a></li>
				<li  style="font-family: 'Source Sans Pro';"><a href="dms_terminal.php">Terminal & Route</a></li>
					<input style="width:200px;margin-left:7em" type = "number" class = "form-control" id="myInput" onkeyup="myFunction()" placeholder="Type bus number...">
					<button type = "button" class = "btn btn-warning" id = "reset2" style="margin-left:.5em; padding:2px;  padding-left:10px; padding-right:10px; font-size:1.5vw"><span class="ion-android-refresh"></span></button>
                <h3 style="left:7em;font-family: 'Source Sans Pro';">BUS DETAILS</h3>
        </ul>
	</div>
	
	<div class="container" style="padding-top:7em;">
    <div classc="col-md-12" >
	<div classc="col-md-8" style=" width:60%;">
		<span class="pull-left"><a style="padding:8px; border-radius:4px ;margin-bottom:.5em; "href="#addnew_bus" data-toggle="modal" class="btn btn-primary"><span class="ion-plus-round" style="padding-left:.5em"></span> Add Bus</a></span>
		<span class="pull-left"><a style="padding:8px; border-radius:4px ;margin-bottom:.5em; margin-left:.5em; "href="#addnew_eng_type" data-toggle="modal" class="btn btn-primary"><span class="ion-plus-round" style="padding-left:.5em"></span> Add Bus Eng. Type</a></span>
		<span class="pull-left"><a style="padding:8px; border-radius:4px ;margin-bottom:.5em; margin-left:.5em; "href="#addnew_bus_type" data-toggle="modal" class="btn btn-primary" ><span class="ion-plus-round" style="padding-left:.5em"></span> Add Bus Type</a></span>
		
		<div style="height:10px;"></div>
				<table class="table table-striped table-bordered table-hover" id="myTable">
						<thead style="display: block; overflow: hidden; word-break: break-word;border-bottom:1px solid white;padding-bottom:10px; padding-top:10px">
								<th style="width:10.5%">BUS #</th>
								<th style="width:10%">PLATE #</th>
								<th style="width:10%">BUS TYPE</th>
								<th style="width:10%">SEATERS CAPACITY</th>
								<th style="width:10%">BUS STATUS</th>
								<th style="width:9%; text-align:center">ACTION</th>
						</thead>
						<tbody style="display: block;overflow:auto; width: 100%;height: 380px; word-break: break-word; scrollbar-width: none; border-bottom:1px solid white">
							<?php
								include('conn.php');
								
								$query=mysqli_query($conn,"SELECT a.bus_id as bus_id, a.bus_no as bus_no, b.abbr as bus_type_id, b.bus_type_id as aaa, e.descrip as eng_id,e.eng_id as aab , a.plate_no as plate_no, a.sap_code as sap_code, CONCAT(f_descrip,' - ',l_descrip) as route_id,  CONCAT(f.l_name,' ',f.f_name) as dri,CONCAT(g.l_name,' ',g.f_name) as con, c.route_id as aac, a.seat_cap as seat_cap, d.descrip as bus_stat_id, d.bus_stat_id as aad FROM bus_details a, bus_type b, route_details c, bus_stat d, bus_eng_type e, user_dri f, user_con g WHERE a.dri_id = f.dri_id AND a.con_id = g.con_id AND b.bus_type_id = a.bus_type_id AND c.route_id = a.route_id AND d.bus_stat_id = a.bus_stat_id AND a.eng_id = e.eng_id  GROUP BY bus_id");
								while($row=mysqli_fetch_array($query)){
									?>
									<tr class="<?php echo $row['bus_id']; ?>" style="border-bottom:1px solid white;margin-bottom:5px;height:50px">
										<td style="width:10%"><?php echo $row['bus_no']; ?></td>
										<td style="width:10%"><?php echo $row['plate_no']; ?></td>
										<td style="width:10%"><?php echo $row['bus_type_id']; ?></td>
										<td style="width:10%; padding-left:4.5em"><?php echo $row['seat_cap']; ?></td>
										<td style="width:10%"><?php echo $row['bus_stat_id']; ?></td>
										<td style="width:7%; text-align:center">
											<a style="font-size:1.5vw" href="#view_bus<?php echo $row['bus_id']; ?>" data-toggle="modal" class="btn "><span class="ion-eye"></span> </a> |
											<a style="font-size:1.5vw" href="#edit_bus<?php echo $row['bus_id']; ?>"  data-toggle="modal" class="btn "><span class="ion-edit"></span> </a> 
											
											<?php include('action/action_bus.php'); ?>
										</td>
									</tr>
									<?php
								}
							
							?>
						</tbody>
				</table>
		</div>
		<?php include('modal/add_bus_modal.php'); ?>
</div>

<div class="col-md-4">
<div>
	<div style="width:100%;margin-left:50em;margin-top:-34.6em; margin-bottom:0em">
		<div style="height:10px;"></div>
				<table class="table table-striped table-bordered table-hover" id="myTable">
						<thead style="display: block; overflow: hidden; word-break: break-word;border-bottom:1px solid white;padding-bottom:10px; padding-top:10px">
								<th style="width:10.5%">Engine Type</th>
								<th style="width:9%; text-align:center">ACTION</th>
						</thead>
						<tbody style="display: block;overflow:auto; width: 100%;height: 160px; word-break: break-word; scrollbar-width: none; border-bottom:1px solid white">
							<?php
								include('conn.php');
								
								$query=mysqli_query($conn,"SELECT * FROM `bus_eng_type` ORDER BY eng_id desc");
								while($row=mysqli_fetch_array($query)){
									?>
									<tr  style="border-bottom:1px solid white;margin-bottom:5px;height:50px">
										<td style="width:10%"><?php echo $row['descrip']; ?></td>
										
										<td style="width:7%; text-align:center">
											<a style="font-size:1.5vw" href="#view_bus<?php echo $row['bus_id']; ?>" data-toggle="modal" class="btn "><span class="ion-eye"></span> </a> |
											<a style="font-size:1.5vw" href="#edit_bus<?php echo $row['bus_id']; ?>"  data-toggle="modal" class="btn "><span class="ion-edit"></span> </a> 
											
											<?php include('action/action_bus.php'); ?>
										</td>
									</tr>
									<?php
								}
							
							?>
						</tbody>
				</table>
		</div>
		<?php include('modal/add_bus_modal.php'); ?>
</div>
<div>
	<div style="width:100%;margin-left:50em;margin-top:-.2em">
		<div style="height:10px;"></div>
				<table class="table table-striped table-bordered table-hover" id="myTable">
						<thead style="display: block; overflow: hidden; word-break: break-word;border-bottom:1px solid white;padding-bottom:10px; padding-top:10px">
								<th style="width:10.5%">Bus Type</th>
								<th style="width:9%; text-align:center">ACTION</th>
						</thead>
						<tbody style="display: block;overflow:auto; width: 100%;height: 160px; word-break: break-word; scrollbar-width: none; border-bottom:1px solid white">
							<?php
								include('conn.php');
								
								$query=mysqli_query($conn,"SELECT * FROM `bus_type` ORDER BY bus_type_id desc");
								while($row=mysqli_fetch_array($query)){
									?>
									<tr style="border-bottom:1px solid white;margin-bottom:5px;height:50px">
										<td style="width:10%"><?php echo $row['abbr']; ?></td>
										
										<td style="width:7%; text-align:center">
											<a style="font-size:1.5vw" href="#view_bus<?php echo $row['bus_id']; ?>" data-toggle="modal" class="btn "><span class="ion-eye"></span> </a> |
											<a style="font-size:1.5vw" href="#edit_bus<?php echo $row['bus_id']; ?>"  data-toggle="modal" class="btn "><span class="ion-edit"></span> </a> 
											
											<?php include('action/action_bus.php'); ?>
										</td>
									</tr>
									<?php
								}
							
							?>
						</tbody>
				</table>
		</div>
		<?php include('modal/add_bus_modal.php'); ?>
</div>
</div>
</div>
</div>
</div>

</div>

<script src = "date/js/jquery-3.1.1.js"></script>
<script src = "date/js/jquery-ui.js"></script>
<script src = "date/js/ajax.js"></script>
		
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>	

<div class="row" style=" position:fixed; " >
	<div class="col-md-10" style="margin-left:0em; position:fixed; margin-top:-.3em">
    <section class="card_content" style="margin-left:17.5em; width:100%; height:30px;margin-top:.0em; position:fixed;padding-right:10px">
          <div class="row">
		  			<div class="col-lg-2 col-xs-2" style="padding-right:5px ;padding-left:9px">
                    <div class="small-box bg-aqua"  style="height:125px;padding-top:1.1em">
                        <div class="inner">
							<?php
									include('conn.php');                
									$query=mysqli_query($conn,"SELECT COUNT('bus_id') AS TotalBus FROM bus_details ;");
											while($row=mysqli_fetch_array($query)){
								?>
                        	<h3><?php echo $row['TotalBus']; ?></h3>
							<h4>No. Of Buses</h4>
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
                    <div class="small-box bg-aqua"  style="height:125px;padding-top:1.1em">
                        <div class="inner">
								<?php
									include('conn.php');                
									$query=mysqli_query($conn,"SELECT COUNT('bus_id') AS TotalBus FROM bus_details WHERE bus_stat_id = 1;");
											while($row=mysqli_fetch_array($query)){
								?>
                        	<h3><?php echo $row['TotalBus']; ?></h3>
							<h4>Available Bus</h4>
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
                    <div class="small-box bg-aqua"  style="height:125px;padding-top:1.1em">
                        <div class="inner">
								<?php
									include('conn.php');                
									$query=mysqli_query($conn,"SELECT COUNT('bus_id') AS TotalBus FROM bus_details WHERE bus_stat_id = 2;");
											while($row=mysqli_fetch_array($query)){
								?>
                        	<h3><?php echo $row['TotalBus']; ?></h3>
							<h4>In-Active Bus</h4>
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
                    <div class="small-box bg-aqua"  style="height:125px;padding-top:1.1em">
                        <div class="inner">
								<?php
									include('conn.php');                
									$query=mysqli_query($conn,"SELECT COUNT('bus_id') AS TotalBus FROM bus_details WHERE bus_stat_id = 3;");
											while($row=mysqli_fetch_array($query)){
								?>
                        	<h3><?php echo $row['TotalBus']; ?></h3>
							<h4>Rental Bus</h4>
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
                    <div class="small-box bg-aqua"  style="height:125px;padding-top:1.1em">
                        <div class="inner">
								<?php
									include('conn.php');                
									$query=mysqli_query($conn,"SELECT COUNT('bus_id') AS TotalBus FROM bus_details WHERE bus_stat_id = 4;");
											while($row=mysqli_fetch_array($query)){
								?>
                        	<h3><?php echo $row['TotalBus']; ?></h3>
							<h4>On Shop Bus</h4>
								<?php
																					}
								?>
                        </div>
                        <div class="icon">
                        	<i class="ion ion-android-bus"></i>
                    	</div>
                    </div>
					</div>
					

    </section>
</div>
							</div>

</body>
</html>