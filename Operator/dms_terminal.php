<!DOCTYPE html>
<html>
<head>
    <title>Route & Terminal</title>
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

<div class="row" >
    <div class="col-md-2">
        <?php include 'nav.php';?> 
    </div>
    <div class="col-md-10" style="height:650px;">
        <div >
            <ul class="menu-bar">
				<li  style="font-family: 'Source Sans Pro';"><a href="dms_user.php">User Details</a></li>
				<li  style="font-family: 'Source Sans Pro';"><a href="dms_bus.php">Bus Details</a></li>
				<li  style="font-family: 'Source Sans Pro';"><a href="dms_status.php">Bus & User Status</a></li>
				<li  style="font-family: 'Source Sans Pro';"><a href="dms_terminal.php">Terminal & Route</a></li>
                <h3 style="left:20em;font-family: 'Source Sans Pro';">TERMINAL AND ROUTE DETAILS</h3>
            </ul>
        </div>
    <div class="col-md-2" style="margin-top:7em; witdth:90%;height:330px" >
        <div class="col-md-6" style="left:-5.5em">
            <div class="container" style="padding-top:0em;left:9em">
            <div style="height:9%;"></div>
            <div class="" style=" width:50.1%; ">
                <div style="height:10px;"></div>
				    <table class="table table-striped table-bordered table-hover" >
						<thead style="display: block; overflow: hidden; word-break: break-word;border-bottom:1px solid white;padding-bottom:10px; padding-top:10px">
								<th style="width:30%">TERMINAL NAME</th>
								<th style="width:10%">ACTION</th>
						</thead>
						<tbody style="display: block;overflow:auto; width: 100%;height: 405px; word-break: break-word; scrollbar-width: none;border-bottom:1px solid white ">
							<?php
								include('conn.php');
								
								$query=mysqli_query($conn,"select * from `ter_details` ORDER BY ter_id desc");
								while($row=mysqli_fetch_array($query)){
									?>
									<tr class="<?php echo $row['ter_id']; ?>"style="border-bottom:1px solid white;margin-bottom:5px">
										<td style="width:30%"><?php echo $row['descrip']; ?></td>
										<td style="width:10%">
											<a style="font-size:1.5vw" href="#edit_ter<?php echo $row['ter_id']; ?>" data-toggle="modal" class="btn "><span class="ion-edit"></span> </a> |
											<a style="font-size:1.5vw" href="#del_ter<?php echo $row['ter_id']; ?>" data-toggle="modal" class="btn "><span class="ion-trash-b"></span></a>
											<?php include('action/action_ter_route.php'); ?>
										</td>
									</tr>
									<?php
								}
							
							?>
						</tbody>
				</table>
		</div>
		<?php include('modal/add_ter_modal.php'); ?>
</div>
</div>		
        <div class="col-md-6"style="margin-left:37.9em; top:-34.7em;">
        <div class="container" style="padding-top:0em;">
        <div style=" "></div>
            <div class="" style=" width:50.1%; ">
            
                <div style="height:10px; "></div>
				    <table class="table table-striped table-bordered table-hover" >
						<thead style="display: block; overflow: hidden; word-break: break-word;border-bottom:1px solid white;padding-bottom:10px; padding-top:10px">
								<th style="width:30%">ROUTE NAME</th>
								<th style="width:10%">ACTION</th>
						</thead>
						<tbody style="display: block;overflow:auto; width: 100%;height: 405px; word-break: break-word; scrollbar-width: none;border-bottom:1px solid white ">
							<?php
								include('conn.php');
								
								$query=mysqli_query($conn,"SELECT route_id, f_descrip, l_descrip, CONCAT(f_descrip,' - ', l_descrip) as descrip FROM `route_details` ORDER BY route_id desc");
								while($row=mysqli_fetch_array($query)){
									?>
									<tr class="<?php echo $row['route_id']; ?>" style="border-bottom:1px solid white;margin-bottom:5px">
										<td style="width:30%"><?php echo $row['f_descrip']; ?> - <?php echo $row['l_descrip']; ?></td>
										<td style="width:10%">
											<a style="font-size:1.5vw" href="#edit_route<?php echo $row['route_id']; ?>" data-toggle="modal" class="btn "><span class="ion-edit"></span> </a> |
											<a style="font-size:1.5vw" href="#del_route<?php echo $row['route_id']; ?>" data-toggle="modal" class="btn "><span class="ion-trash-b"></span></a>
											<?php include('action/action_ter_route.php'); ?>
										</td>
									</tr>
									<?php
								}
							
							?>
						</tbody>
				</table>
		</div>
		<?php include('modal/add_ter_modal.php'); ?>
</div>
</div>

</div>
</div>
</div>
              </div>

<div class="row" style="margin-top:-2.7em;" >
	<div class="col-md-10" style="margin-left:0em;position: fixed ; ">
    <section class="card_content" style="margin-left:14.6em; width:87%; height:30px;margin-top:.0em;position: fixed ;padding-right:10px">
          <div class="row">
		 			<div class="col-lg-2 col-xs-2" style="padding-right:5px ;padding-left:9px">
                    <div class="small-box bg-aqua"  style="height:125px;padding-top:1.05em">
                        <div class="inner">
                          <?php
                            include('conn.php');                
                            $query=mysqli_query($conn,"SELECT COUNT('user_id') AS TotalUser FROM user;");
                                while($row=mysqli_fetch_array($query)){
                          ?>
                        	<h3><?php echo $row['TotalUser']; ?></h3>
							<h4>No. Of Users</h4>
								<?php
																					}
								?>
                        </div>
                        <div class="icon">
                        	<i class="ion ion-person-stalker"></i>
                    	</div>
                    </div>
                    </div>
               
			  		<div class="col-lg-2 col-xs-2" style="padding-right:5px ;padding-left:9px">
                    <div class="small-box bg-aqua"  style="height:125px;padding-top:1.05em">
                        <div class="inner">
                        <?php
                          include('conn.php');                
                          $query=mysqli_query($conn,"SELECT COUNT('user_id') AS TotalDri FROM user WHERE type_id = 7;");
                              while($row=mysqli_fetch_array($query)){
                        ?>
                        	<h3><?php echo $row['TotalDri']; ?></h3>
							<h4>No. Of Driver</h4>
								<?php
																					}
								?>
                        </div>
                        <div class="icon">
                        	<i class="ion ion-person"></i>
                    	</div>
                    </div>
					</div>		
           
			  		<div class="col-lg-2 col-xs-2" style="padding-right:5px ;padding-left:9px">
                    <div class="small-box bg-aqua"  style="height:125px;padding-top:1.05em">
                        <div class="inner">
                        <?php
                          include('conn.php');                
                          $query=mysqli_query($conn,"SELECT COUNT('user_id') AS TotalCon FROM user WHERE type_id = 8;");
                              while($row=mysqli_fetch_array($query)){
                        ?>
                        	<h3><?php echo $row['TotalCon']; ?></h3>
							<h4>No. Of Conductor</h4>
								<?php
																					}
								?>
                        </div>
                        <div class="icon">
                        	<i class="ion ion-person"></i>
                    	</div>
                    </div>
					</div>
					
			  		<div class="col-lg-2 col-xs-2" style="padding-right:5px ;padding-left:9px">
                    <div class="small-box bg-aqua"  style="height:125px;padding-top:1.05em">
                        <div class="inner">
								<?php
									include('conn.php');                
									$query=mysqli_query($conn,"SELECT COUNT('route_id') AS TotalRoute FROM route_details;");
											while($row=mysqli_fetch_array($query)){
								?>
                        	<h3><?php echo $row['TotalRoute']; ?></h3>
							<h4>No. Of Route</h4>
								<?php
																					}
								?>
                        </div>
                        <div class="icon">
							<i class="ion"></i><ion-icon name="analytics" style="font-size: 75px;" ></ion-icon>
                    	</div>
                    </div>
					</div>
					
			  		<div class="col-lg-2 col-xs-2" style="padding-right:5px ;padding-left:9px">
                    <div class="small-box bg-aqua"  style="height:125px;padding-top:1.05em">
                        <div class="inner">
								<?php
									include('conn.php');                
									$query=mysqli_query($conn,"SELECT COUNT('ter_id') AS TotalTer FROM ter_details ;");
											while($row=mysqli_fetch_array($query)){
								?>
                        	<h3><?php echo $row['TotalTer']; ?></h3>
							<h4>No. Of Terminal</h4>
								<?php
																					}
								?>
                        </div>
                        <div class="icon">
							<i class="ion"></i><ion-icon name="storefront" style="font-size: 75px;" ></ion-icon>
                    	</div>
                    </div>
					</div>
					
					<div class="col-lg-2 col-xs-2" style="padding-right:5px ;padding-left:9px">
                    <div class="small-box bg-aqua"  style="height:125px;padding-top:1.05em">
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

    </section>
</div>
							</div>

</body>
</html>