
<div class="modal fade" id="addnew_torno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width:40%">
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
							<input type="text" class="form-control" id="trip_no" name="trip_no" readonly />
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">BUS #</label>
						</div>
						<div class="col-lg-8">
							<select class="form-control" id="bus_no" name="bus_no" palceholder="" required>
                                        <option value="">Select Bus</option>
                                        <?php foreach ($bus_id as $bus_id): ?>
                                        <option value="<?= $bus_id->bus_id; ?>"><?= $bus_no->bus_no; ?></option>
                                        <?php endforeach; ?>
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
						<select class="form-control" id="ass_dri" name="ass_dri" placeholder="" value="<?php echo $row['ass_dri']; ?>">
								<option value=""></option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT CONCAT(l_name,' ',f_name) as name FROM user_dri");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
                                        {
                                ?>
                                <option value="<?php echo $data['name']; ?>"> <?php echo $data['name']; ?> </option>
                                <?php
                                        }
                                    } /*if condition*/
                                ?>
                            </select>
						</div>
						<div class="col-lg-6">
							<select class="form-control" id="ass_con" name="ass_con" placeholder="" value="<?php echo $row['ass_con']; ?>">
								<option value="">---select conductor---</option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT CONCAT(l_name,' ',f_name) as name FROM user_con");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
                                        {
                                ?>
                                <option value="<?php echo $data['name']; ?>"> <?php echo $data['name']; ?> </option>
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
							<select class="form-control" id="bus_type_id" name="bus_type_id" placeholder="" >
								<option  value="">---select bus type---</option>
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
                            <input type="number" class="form-control" id="seat_cap" name="seat_cap" required />
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
						  	<input type="text" class="form-control" id="from_ter" name="from_ter" value="Tagum" placehoder="Tagum" disabled />	
						</div>
						<div class="col-lg-6">
							<select class="form-control" id="to_ter" name="to_ter" placeholder="" >
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
					<button type="submit" class="btn btn-success" style="padding:6px 8px 6px 8px"><span ></span>TORNO</a>
				</div>
			
				</form>
                </div>
				
            </div>
        </div>
	</div>

<script>
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

<script>
    $(document).ready(function() {
        var now =moment().format('dmmYYYYhmmss');
        console.log(now);
        $("#trip_bus_id").on( 'change', function () {
            var bus_id = this.value;
            if(bus_id !== ""){
                $.ajax({
                    type: "POST",
                    url: "/sample_get/getBusSelected",
                    data: {bus_id : bus_id}, // serializes the form's elements.
                    success: function(data) {
                        var bus_data = JSON.parse(data);
                        $('#trip_no').val(bus_id.bus_type.descrip + '-' + now);
                        $('#bus_type').val(bus_id.bus_type.descrip);
                        $('#seater_cap').val(bus_details.seat_cap);
                        get_driver_assigned(bus_details.ass_dri,'trip_driver');
                        get_driver_assigned(bus_details.ass_con,'trip_conductor');
                        console.log(bus_details);
                    }
                });
            }
        });

        function get_driver_assigned(id,htmlId){
            if(id !== ""){
                $.ajax({
                    type: "POST",
                    url: "/operator/torno/getUserData",
                    data: {id : id}, // serializes the form's elements.
                    success: function(data) {
                        var user_data = JSON.parse(data);
                        $('#'+htmlId).append('<option value='+user_data.id+'>'+user_data.firstname + ' ' + user_data.lastname +'</option>');
                        //console.log(user_data);
                    }
                });
            }
        }
    });
</script>
