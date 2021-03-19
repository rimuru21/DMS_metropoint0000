<!DOCTYPE html>
<html>
<head>
	<title>User Accounts</title>
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
					<input style="width:200px;margin-left:7em" type = "text" class = "form-control" id="myInput" onkeyup="myFunction()" placeholder="Type name...">
					<button type = "button" class = "btn btn-warning" id = "reset2" style="margin-left:.5em; padding:2px;  padding-left:10px; padding-right:10px; font-size:1.5vw"><span class="ion-android-refresh"></span></button>
                <h3 style="left:7em;font-family: 'Source Sans Pro';">USER DETAILS</h3>
        </ul>
	</div>
	<div class="container" style="padding-top:7em;">
	<div style="height:90%;"></div>
	<div class="" style=" width:90%;">
		<span class="pull-right"><a style="padding:8px; margin-right:.5em; border-radius:4px  "href="#addnew_ad" data-toggle="modal" class="btn btn-primary"><span class="ion-plus-round" style="padding-right:.5em"></span> Add Admin</a></span>

		<span class="pull-right"><a style="padding:8px; margin-right:.5em; margin-bottom:.5em; border-radius:4px  "href="#addnew_t_ad" data-toggle="modal" class="btn btn-primary" style="padding-right:.5em"><span class="ion-plus-round"></span> Add Top Admin</a></span>
		
		<div style="height:10px" ></div>
				<table class="table table-striped table-bordered table-hover" id="myTable" >
						<thead style="display: block; overflow: hidden; word-break: break-word;border-bottom:1px solid white; padding-bottom:10px; padding-top:10px">
								<th style="width:8%">NAME</th>
								<th style="width:6.5%">
								<select style="background-color:transparent; border:none">
									<option class="hr_dropdown">USER TYPE</option>
									<option class="hr_dropdown">Top Admin</option>
									<option class="hr_dropdown">Admin</option>
								</select>
								</th>
								<th style="width:8%">USERNAME</th>
								<th style="width:6.5%">
								<select style="background-color:transparent; border:none">
									<option class="hr_dropdown">STATUS</option>
									<option class="hr_dropdown">Regular</option>
									<option class="hr_dropdown">Casual</option>
									<option class="hr_dropdown">Terminated</option>
									<option class="hr_dropdown">Suspended</option>
								</select>
								</th>

								<th style="width:8%">TERMINAL</th>
						</thead>
						<tbody style="display: block;overflow:auto; width: 100%;height: 405px; word-break: break-word; scrollbar-width: none; border-bottom:1px solid white">
							<?php
								include('conn.php');
								
								$query=mysqli_query($conn,"SELECT  a.user_id as user_id, CONCAT(a.l_name,', ',a.f_name,
								' ' ,a.sufx,' ',a.m_intl,'.') as name,  a.u_name as u_name, b.descrip as stat_descrip, c.descrip as type_descrip, d.descrip as ter_descrip
								FROM user a, user_stat b, user_type c, ter_details d
								WHERE c.type_id IN (1,2) AND a.stat_id = b.stat_id AND a.type_id = c.type_id AND a.ter_id =d.ter_id
								ORDER BY user_id desc ");
								 
								while($row=mysqli_fetch_array($query)){
									?>
									<tr style="border-bottom:1px solid white;margin-bottom:5px;height:50px">
										<td style="width:10%"><?php echo $row['name']; ?></td>
										<td style="width:10%"><?php echo $row['type_descrip']; ?></td>
										<td style="width:10%"><?php echo $row['u_name']; ?></td>
										<td style="width:10%"><?php echo $row['stat_descrip']; ?></td>
										<td style="width:9%"><?php echo $row['ter_descrip']; ?></td>
										
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
	<div class="col-md-10" style="margin-left:0em; position:fixed; margin-top:-.5em">
    <section class="card_content" style="margin-left:17.5em; width:100%; height:30px;margin-top:.0em; position:fixed;padding-right:10px">
          <div class="row">
		 			<div class="col-lg-2 col-xs-2" style="padding-right:5px ;padding-left:9px">
                    <div class="small-box bg-aqua"  style="height:125px;padding-top:1.1em">
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
                    <div class="small-box bg-aqua"  style="height:125px;padding-top:1.1em">
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
                    <div class="small-box bg-aqua"  style="height:125px;padding-top:1.1em">
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
                    <div class="small-box bg-aqua"  style="height:125px;padding-top:1.1em">
                        <div class="inner">
								<?php
									include('conn.php');                
									$query=mysqli_query($conn,"SELECT COUNT('user_id') as TotalUser FROM user WHERE type_id = 7 AND ( stat_id = 1 OR stat_id= 2);");
											while($row=mysqli_fetch_array($query)){
								?>
                        	<h3><?php echo $row['TotalUser']; ?></h3>
							<h4>Available Driver</h4>
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
                    <div class="small-box bg-aqua"  style="height:125px;padding-top:1.1em">
                        <div class="inner">
								<?php
									include('conn.php');                
									$query=mysqli_query($conn,"SELECT COUNT('user_id') as TotalUser FROM user WHERE type_id = 8 AND ( stat_id = 1 OR stat_id= 2);");
											while($row=mysqli_fetch_array($query)){
								?>
                        	<h3><?php echo $row['TotalUser']; ?></h3>
							<h4>Available Conductor</h4>
								<?php
																					}
								?>
                        </div>
                        <div class="icon">
                        	<i class="ion ion-person"></i>
                    	</div>
                    </div>
					</div>
					
					

    </section>
</div>
							</div>

</body>
</html>