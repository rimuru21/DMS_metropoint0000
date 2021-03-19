<?php
$date1 = date("Y-m-d", strtotime($_POST['date1']));
$date2 = date("Y-m-d", strtotime($_POST['date2']));
include('conn.php');
if(!$conn){
	die("Fatal Error: Connection Error!");
}
	
$sql = $conn->query("SELECT * FROM que_details a, bus_type b WHERE a.bus_type_id = b.bus_type_id AND a.que_date BETWEEN '$date1' AND '$date2' ORDER BY a.que_date ASC") or die(mysqli_error());
$mysqli = $sql->num_rows;
if($mysqli > 0){
	while($row = $sql->fetch_array()){
	?>
	<table class="table table-striped table-bordered table-hover"  >
						<tbody  id = "load_data" style="display: block;overflow:auto; width: 100%;height: 550px; word-break: break-word; scrollbar-width: none; border-bottom:1px solid white">
									<tr style="border-bottom:1px solid white;margin-bottom:5px;height:50px">
                                        <td style="width:8.5%"><?php echo $row['trip_no']; ?></td>
                                        <td style="width:8%"><?php echo $row['bus_no']; ?></td>
										<td style="width:8%"><?php echo $row['abbr']; ?></td>
										<td style="width:8%"><?php echo $row['ass_dri']; ?></td>
										<td style="width:9%"><?php echo $row['ass_con']; ?></td>
                                        <td style="width:10%"><?php echo $row['from_ter']; ?> - <?php echo $row['to_ter']; ?></td>
                                        <td style="width:7%"><?php echo $row['que_time']; ?></td>
										<td style="width:7%"><?php echo $row['dep_time']; ?></td>
										<td style="width:7%"><?php echo $row['dep_date']; ?></td>
										<td style="width:7%"><?php echo $row['arr_time']; ?></td>
										<td style="width:7%"><?php echo $row['arr_date']; ?></td>
										
										
									</tr>
						</tbody>
				</table>
	<?php
	}
}else{
		echo '
		<tr>
			<td colspan = "10"><center>Record Not Found</center></td>
		</tr>
		';
}
	?>
                                        