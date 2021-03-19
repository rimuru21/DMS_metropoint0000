<!DOCTYPE html>
<html>
<head>
	<title>User Conductor</title>
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
				<li  style="font-family: 'Source Sans Pro';"><a href="user_t_admin.php">Top Admin</a></li>
				<li  style="font-family: 'Source Sans Pro';left:1em"><a href="user_admin.php">Admin</a></li>
                <li  style="font-family: 'Source Sans Pro';left:.4em"><a href="user_op.php">Operator</a></li>
                <li  style="font-family: 'Source Sans Pro';left:-.1em"><a href="user_dis.php">Dispatcher</a></li>
                <li  style="font-family: 'Source Sans Pro';left:-.6em"><a href="user_dri.php">Driver</a></li>
                <li  style="font-family: 'Source Sans Pro';left:-1em"><a href="user_con.php">Conductor</a></li>
					<input style="width:200px;margin-left:5em" type = "text" class = "form-control" id="myInput" onkeyup="myFunction()" placeholder="Type name...">
					<button type = "button" class = "btn btn-warning" id = "reset2" style="margin-left:.5em; padding:2px;  padding-left:10px; padding-right:10px; font-size:1.5vw"><span class="ion-android-refresh"></span></button>
                <h3 style="margin-left:8em; font-family: 'Source Sans Pro';">Conductor Details</h3>
        </ul>
	</div>
	<div class="container" style="padding-top:7em;">
	<div style="height:90%;"></div>
	<div class="" style=" width:90%;">
		<div style="height:10px" ></div>
				<table class="table table-striped table-bordered table-hover" id="myTable" >
						<thead style="display: block; overflow: hidden; word-break: break-word;border-bottom:1px solid white; padding-bottom:10px; padding-top:10px">
                        <th style="width:10%">NAME</th>
								<th style="width:8%">Username</th>
								<th style="width:8%">Status</th>
								<th style="width:8%">Terminal</th>
                                <th style="width:9%; text-align:center">Action</th>
						</thead>
						<tbody style="display: block;overflow:auto; width: 100%;height: 440px; word-break: break-word; scrollbar-width: none; border-bottom:1px solid white">
                        <?php
								include('conn.php');
								
								$query=mysqli_query($conn,"SELECT    d.user_id as user_id,a.con_id as con_id, a.l_name as l_name, a.f_name as f_name, a.sufx as sufx, a.m_intl as m_intl, CONCAT(a.l_name,', ',a.f_name,' ' ,a.sufx,' ',a.m_intl,'.') as name,  a.u_name as u_name, b.ter_id as ter_id, b.descrip as ter_descrip, c.stat_id as stat_id, c.descrip as stat_descrip, a.sex as sex, a.cont_no as cont_no, a.emp_date as emp_date
								FROM user_con a, ter_details b, user_stat c, user d
								WHERE a.ter_id = b.ter_id AND a.stat_id = c.stat_id AND a.user_id = d.user_id
								ORDER BY con_id desc ");
								while($row=mysqli_fetch_array($query)){
									?>
									<tr style="border-bottom:1px solid white;margin-bottom:5px;height:50px">
                                        <td style="width:11%"><?php echo $row['name']; ?></td>
										<td style="width:9%"><?php echo $row['u_name']; ?></td>
										<td style="width:9%"><?php echo $row['stat_descrip']; ?></td>
										<td style="width:9%"><?php echo $row['ter_descrip']; ?></td>
										<td style="width:9%; text-align:center">
                                            <a style="font-size:1.5vw" href="#view_user<?php echo $row['con_id']; ?>" data-toggle="modal" class="btn "><span class="ion-eye"></span> </a> |
											<a style="font-size:1.5vw" href="#edit_user<?php echo $row['con_id']; ?>" data-toggle="modal" class="btn "><span class="ion-edit"></span> </a> |
											<a style="font-size:1.5vw" href="#del_user<?php echo $row['con_id']; ?>" data-toggle="modal" class="btn "><span class="ion-trash-b"></span></a>
											<?php include('action/action_user.php'); ?>
										</td>
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
    <section class="card_content" style="margin-left:15em; width:87%; height:30px;margin-top:.0em; position:fixed;padding-right:10px">
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
							<h4>Users</h4>
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
									$query=mysqli_query($conn,"SELECT COUNT('user_id') AS TotalDri FROM user WHERE type_id = 8;");
											while($row=mysqli_fetch_array($query)){
								?>
                        	<h3><?php echo $row['TotalDri']; ?></h3>
							<h4>Conductor</h4>
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
									$query=mysqli_query($conn,"SELECT COUNT('con_id') AS TotalCon FROM user_con WHERE stat_id = 1;");
											while($row=mysqli_fetch_array($query)){
								?>
                        	<h3><?php echo $row['TotalCon']; ?></h3>
							<h4>Regular</h4>
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
									$query=mysqli_query($conn,"SELECT COUNT('con_id') AS TotalCon FROM user_con WHERE stat_id = 2;");
											while($row=mysqli_fetch_array($query)){
								?>
                        	<h3><?php echo $row['TotalCon']; ?></h3>
							<h4>Casual</h4>
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
									$query=mysqli_query($conn,"SELECT COUNT('con_id') AS TotalCon FROM user_con WHERE stat_id = 3;");
											while($row=mysqli_fetch_array($query)){
								?>
                        	<h3><?php echo $row['TotalCon']; ?></h3>
							<h4>Terminated</h4>
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
									$query=mysqli_query($conn,"SELECT COUNT('con_id') AS TotalCon FROM user_con WHERE stat_id = 4;");
											while($row=mysqli_fetch_array($query)){
								?>
                        	<h3><?php echo $row['TotalCon']; ?></h3>
							<h4>Suspended</h4>
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