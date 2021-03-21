<!DOCTYPE html>
<html>
<head>
	<title>Bus Report</title>
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
				<input style="width:200px;margin-left:10em" type = "number" class = "form-control" id="myInput" onkeyup="myFunction()" placeholder="Type bus number...">
            <h3 style="margin-left:12em;font-family: 'Source Sans Pro';">BUS TORNO AVAILABILITY REPORT</h3>
        </ul>
    </div>
    <div style=" width:100%; margin-left:-6.5em">
	<div class="container" style="padding-top:7em;">
	<div style="height:90%;"></div>
	<div class=""  style=" width:107%;">
		<div style="height:10px" ></div>
				<table class="table table-striped table-bordered table-hover" id="myTable" >
						<thead style="display: block;overflow:auto; width: 100%; word-break: break-word; scrollbar-width: none; border-bottom:1px solid white">
                                <th style="width:9%;">BUS #</th>
								<th style="width:9%">PLATE #</th>
                                <th style="width:9%;">BUS TYPE</th>
								<th style="width:10%">DRIVER</th>
                                <th style="width:10%;">CONDUCTOR</th>
                                <th style="width:8.5%;" >SEATERS CAP</th>
								<th style="width:10%;" >STATUS</th>
						</thead>
						<tbody  id = "load_data" style="display: block;overflow:auto; width: 100%;height: 550px; word-break: break-word; scrollbar-width: none; border-bottom:1px solid white">
							<?php
								include('conn.php');  
								$query=mysqli_query($conn,"SELECT a.bus_id as bus_id, a.bus_no as bus_no, b.abbr as abbr, b.bus_type_id as aaa, a.ass_dri as ass_dri, a.ass_con as ass_con, e.descrip as eng_id,e.eng_id as aab , a.plate_no as plate_no, a.sap_code as sap_code,  a.seat_cap as seat_cap, d.descrip as descrip, d.bus_stat_id as aad FROM bus_details a, bus_type b, route_details c, bus_stat d, bus_eng_type e WHERE b.bus_type_id = a.bus_type_id AND c.route_id = a.route_id AND d.bus_stat_id = a.bus_stat_id AND a.eng_id = e.eng_id  GROUP BY bus_id ");
								 
								while($row=mysqli_fetch_array($query)){
									?>
									<tr style="border-bottom:1px solid white;margin-bottom:5px;height:50px">
                                        <td style="width:9%;"><?php echo $row['bus_no']; ?></td>
                                        <td style="width:9%"><?php echo $row['plate_no']; ?></td>
										<td style="width:9%;"><?php echo $row['abbr']; ?></td>
										<td style="width:10%;"><?php echo $row['ass_dri']; ?></td>
										<td style="width:10%;"><?php echo $row['ass_con']; ?></td>
                                        <td style="width:6%;text-align:center"><?php echo $row['seat_cap']; ?></td>
										<td style="width:6%;"><?php echo $row['descrip']; ?></td>
										<td style="width:6%"><?php echo $row['descrip']; ?></td>
										
										
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
</body>
</html>

