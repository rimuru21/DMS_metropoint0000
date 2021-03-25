
<div class="modal fade" id="addnew_torno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width:40%; margin-top:5em">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">ADD TORNO</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid" style="margin-left:1em">
				<form method="POST" action="addnew_torno.php">
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">TRIP #</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="trip_n" name="trip_no" readonly />
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">BUS #</label>
						</div>
						<div class="col-lg-8">
							<select class="form-control" id="bus_n" name="bus_no" palceholder="" required>
								<option value="">Select Bus Number</option> 
								<?php 
								include('conn.php');
								$sql =  mysqli_query($conn, "SELECT * FROM bus_details WHERE trip_stat_id = 0 ");
								$rows = mysqli_num_rows($sql);
									if($rows>0)
									{
										while($data = mysqli_fetch_array($sql))
										{
								?>
								<option id="bus_" value="<?php echo $data['bus_no']; ?>"> <?php echo $data['bus_no']; ?> </option>
								<?php
										}
									} /*if condition*/
								?>
							</select>
						</div>
					</div>
                    
					<div style="height:5px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">ASSIGNED DRIVER:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">ASSIGNED CONDOCTOR:</label>
						</div>
						<div class="col-lg-6">
							<select class="form-control" id="dri_" name="dri_id" placeholder="" value="<?php echo $row['dri_id']; ?>">
								<option  value="" disable>Select Driver</option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT CONCAT(l_name,' ',f_name) as dname, dri_id FROM user_dri WHERE trip_stat_id = 0 AND stat_id IN (1,2) ");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
                                        {
                                ?>
                                <option value="<?php echo $data['dri_id']; ?>"> <?php echo $data['dname']; ?> </option>
                                <?php
                                        }
                                    } /*if condition*/
                                ?>
                            </select>
						</div>
						<div class="col-lg-6">
							<select class="form-control" id="con_" name="con_id" placeholder="" value="<?php echo $row['con_id']; ?>">
								<option value="">Select Conductor</option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT CONCAT(l_name,' ',f_name) as cname, con_id  FROM user_con WHERE trip_stat_id = 0 AND stat_id IN (1,2)");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
                                        {
                                ?>
								
                                <option value="<?php echo $data['con_id']; ?>"> <?php echo $data['cname']; ?> </option>
                                <?php
                                        }
                                    } /*if condition*/
                                ?>
                            </select>
						</div>
					</div>
					<div style="height:5px;"></div>
					<div class="row">
						<div class="col-lg-8">
							<label class="control-label" style="position:relative; top:7px;">BUS TYPE:</label>
						</div>
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">SEATER CAP.:</label>
						</div>
                        
						<div class="col-lg-8">
							<select class="form-control" id="bus_type" name="bus_type_id" placeholder="" value="<?php echo $data['bus_type_id']; ?>" readonly>
								<option  value=""></option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT * FROM bus_type");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
                                        {
                                ?>
                                <option  value="<?php echo $data['bus_type_id']; ?>"> <?php echo $data['abbr']; ?> </option>
                                <?php
                                        }
                                    } /*if condition*/
                                ?>
                            </select>
						</div>
						<div class="col-lg-4">
                            <input type="number" class="form-control" id="seat_ca" name="seat_cap" readonly />
						</div>
					</div>
                    <div style="height:5px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">FROM TERMINAL:</label>
						</div>
						<div class="col-lg-6">
						<label class="control-label" style="position:relative; top:7px;">TO TERMINAL:</label>
						</div>
                        <div style="height:10px;"></div>
						<div class="col-lg-6">
						  	<input type="text" class="form-control" id="from_te" name="from_ter" value="<?php echo $ter_['descrip']; ?>" placehoder="<?php echo $ter_['descrip']; ?>"  readonly/>	
						</div>
						<div class="col-lg-6">
							<select class="form-control" id="to_te" name="to_ter" placeholder="" >
								<option  value="">---select terminal---</option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT * FROM ter_details");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
                                        {
                                ?>
                                <option  value="<?php echo $data['descrip']; ?>"> <?php echo $data['descrip']; ?> </option>
                                <?php
                                        }
                                    } /*if condition*/
                                ?>
                            </select>
						</div>
					</div>
                    <div style="height:5px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">TORNO TIME:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">TORNO DATE:</label>
						</div>
						<div class="col-lg-6">
                            <input type="time" class="form-control" id="qued_time" name="que_time" value=""/>
						</div>
						<div class="col-lg-6">
                            <input type="date" class="form-control" id="qued_date" name="que_date" value=""/>
						</div>
					</div>
					
                    </div>
					
				</div>
				
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="padding:6px 8px 6px 8px"><span ></span> Cancel</button>
					<button type="submit"  class="btn btn-success" style="padding:6px 8px 6px 8px"><span ></span>TORNO</a>
				</div>
			
				</form>
                </div>
				
            </div>
        </div>
	</div>



<script>
$("#bus_n").on( 'change', function () {
	var al = $("#bus_n").val();
	let currentDate = new Date();
	let cDay = currentDate.getDate();
	let cMonth = currentDate.getMonth() + 1;
	let cYear = currentDate.getFullYear();
	let time = currentDate.getHours() + "" +currentDate.getMinutes() + "" +currentDate.getSeconds();
	console.log();
		var form_data = {
			bus_no : al
		};
                $.ajax({
                    url: "modal/sample_get.php",
                    type: "post",
                    data: form_data, // serializes the form's elements.
					dataType: "json",
                    success: function(data) {
						$('#trip_n').val(data['descrip'] + '-' + cDay + cMonth + cYear + time );
						$('#dri_').val(data['dri_id']);
						$('#con_').val(data['con_id']);
						$('#bus_type').val(data['bus_type_id']);
						$('#seat_ca').val(data['seat_cap']);
						
                    }
                });
				
});


$("#to_te").on( 'change', function () {
	var al = $("#bus_n").val();
	var to_ter = $("#to_te").val();
	let currentDate = new Date();
	let cDay = currentDate.getDate();
	let cMonth = currentDate.getMonth() + 1;
	let cYear = currentDate.getFullYear();
	let time = currentDate.getHours() + "" +currentDate.getMinutes() + "" +currentDate.getSeconds();
	console.log();
		var form_data = {
			bus_no : al
		};
                $.ajax({
                    url: "modal/sample_get.php",
                    type: "post",
                    data: form_data, // serializes the form's elements.
					dataType: "json",
                    success: function(data) {
						$('#trip_n').val(data['descrip'] + '-' + cDay + cMonth + cYear + time + "-" + to_ter);
						$('#dri_').val(data['dri_id']);
						$('#con_').val(data['con_id']);
						$('#bus_type').val(data['bus_type_id']);
						$('#seat_ca').val(data['seat_cap']);
						
                    }
                });
	
	
});

var date = new Date();

var day = date.getDate(),
    month = date.getMonth() + 1,
    year = date.getFullYear(),
    hour = date.getHours(),
    min  = date.getMinutes();

month = (month < 10 ? "0" : "") + month;
day = (day < 10 ? "0" : "") + day;
hour = (hour < 10 ? "0" : "") + hour;
min = (min < 10 ? "0" : "") + min;

var today = year + "-" + month + "-" + day,
    displayTime = hour + ":" + min; 

document.getElementById('qued_date').value = today;      
document.getElementById("qued_time").value = displayTime;
</script>