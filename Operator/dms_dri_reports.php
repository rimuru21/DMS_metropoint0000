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
            <li style="left:1em;font-family: 'Source Sans Pro';"><a href="dms_dri_reports.php">DRIVER</a></li>
            <li style="left:.6em;font-family: 'Source Sans Pro';"><a href="dms_con_reports.php">CONDUCTOR</a></li>
            <li style="left:.1em;font-family: 'Source Sans Pro';"><a href="dms_trip_reports.php">TRIP</a></li>
				<input style="width:200px;margin-left:10em" type = "text" class = "form-control" id="myInput" onkeyup="myFunction()" placeholder="Type lastname...">
            <h3 style="margin-left:12em;font-family: 'Source Sans Pro';">DRIVER AVAILABILITY REPORT</h3>
        </ul>
    </div>
    <div  style=" width:100%; margin-left:0em">
	<div class="container" style="padding-top:7em;">
	<div style="height:90%;"></div>
	<div class=""  style=" width:90%;">
		<div style="height:10px" ></div>
		<table class="table table-striped table-bordered table-hover" id="myTable" >
						<thead style="display: block; overflow: hidden; word-break: break-word;border-bottom:1px solid white; padding-bottom:10px; padding-top:10px">
                                <th style="width:6%;">LASTNAME</th>
								<th style="width:6%">FIRSTNAME</th>
								<th style="width:8%;">TERMINAL</th>
								<th style="width:8%;  text-align:center;">STATUS</th>
                                <th style="width:9%; text-align:center;padding-left:4em">Action</th>
						</thead>
						<tbody style="display: block;overflow:auto; width: 100%;height: 440px; word-break: break-word; scrollbar-width: none; border-bottom:1px solid white">
							<?php
								include('conn.php');
							
                                $query=mysqli_query($conn,"SELECT   d.user_id as user_id, a.dri_id as dri_id, a.l_name as l_name, a.f_name as f_name, a.sufx as sufx, a.m_intl as m_intl,  a.u_name as u_name, b.ter_id as ter_id, b.descrip as ter_descrip, c.stat_id as stat_id, c.descrip as stat_descrip, a.sex as sex, a.cont_no as cont_no, a.emp_date as emp_date, a.licen_no as licen_no, a.licen_exp as licen_exp, e.descrip as trip_descrip
								FROM user_dri a, ter_details b, user_stat c, user d, trip_stat e 
								WHERE a.ter_id = b.ter_id AND a.stat_id = c.stat_id AND a.user_id = d.user_id AND a.trip_stat_id = e.trip_stat_id
								ORDER BY dri_id desc ");
								 
								while($row=mysqli_fetch_array($query)){
									?>
									<tr style="border-bottom:1px solid white;margin-bottom:5px;height:50px">
										<td style="width:9%;"><?php echo $row['l_name']; ?></td>
										<td style="width:9%"><?php echo $row['f_name']; ?></td>
										<td style="width:9%;"><?php echo $row['ter_descrip']; ?></td>
										<td style="width:9% ; text-align:center"><?php echo $row['stat_descrip']; ?></td>
										<td style="width:9%; text-align:center"><?php echo $row['trip_descrip']; ?></td>
										<td style="width:9%; text-align:center">
                                            <a style="font-size:1.5vw" href="#view_user<?php echo $row['dri_id']; ?>" data-toggle="modal" class="btn "><span class="ion-eye"></span> </a> |
											<a style="font-size:1.5vw" href="#edit_user<?php echo $row['dri_id']; ?>" data-toggle="modal" class="btn "><span class="ion-edit"></span> </a> 
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
<script>

</script>
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
</body>
</html>
