
<div class="modal fade" id="addnew_bus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel"> <b> Add Bus Details</b></h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew_bus.php">
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">BUS #:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="bus_no" name="bus_no" required />
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">PLATE #:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="plate_no" name="plate_no" required />
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">BUS TYPE:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">ENGINE TYPE:</label>
						</div>
						<div class="col-lg-6">
						<select class="form-control" id="bus_type_id" name="bus_type_id" palceholder="" required>
							<option value="">---select bus type---</option> 
							<?php 
							$sql = "SELECT * FROM bus_type";
							$query =  mysqli_query($conn, $sql);
							$rows = mysqli_num_rows($query);
								if($rows>0)
								{
									while($data = mysqli_fetch_array($query))
									{
							?>
							<option value="<?php echo $data['bus_type_id']; ?>"> <?php echo $data['abbr']; ?> </option>
							<?php
									}
								} /*if condition*/
							?>
						</select>
						</div>
						<div class="col-lg-6">
						<select class="form-control" id="eng_id" name="eng_id" palceholder="" required>
							<option value="">---select engine type---</option> 
							<?php 
							$sql = "SELECT * FROM bus_eng_type";
							$query =  mysqli_query($conn, $sql);
							$rows = mysqli_num_rows($query);
								if($rows>0)
								{
									while($data = mysqli_fetch_array($query))
									{
							?>
							<option value="<?php echo $data['eng_id']; ?>"> <?php echo $data['descrip']; ?> </option>
							<?php
									}
								} /*if condition*/
							?>
						</select>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-8">
							<label class="control-label" style="position:relative; top:7px;">SAP CODE:</label>
						</div>
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">SEATERS CAPACITY:</label>
						</div>
						<div class="col-lg-8">
							<input type="number" class="form-control" id="sap_code" name="sap_code" required />
						</div>
						<div class="col-lg-4">
							<input type="number" class="form-control" id="seat_cap" name="seat_cap" required />
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">ASSIGNED DRIVER:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">ASSIGNED CONDUCTOR:</label>
						</div>
						<div class="col-lg-6">
						<select class="form-control" id="dri_id" name="dri_id" palceholder="" >
							<option value="0">---select driver---</option>
							<?php 
							$sql = "SELECT CONCAT(l_name,' ',f_name) as full_name, dri_id as dri_id FROM user_dri";
							$query =  mysqli_query($conn, $sql);
							$rows = mysqli_num_rows($query);
								if($rows>0)
								{
									while($data = mysqli_fetch_array($query))
									{
							?>
							<option value="<?php echo $data['dri_id']; ?>"> <?php echo $data['full_name']; ?> </option>
							<?php
									}
								} /*if condition*/
							?>
						</select>
						</div>
						<div class="col-lg-6">
						<select class="form-control" id="con_id" name="con_id" palceholder="">
							<option value="">---select conductor---</option> 
							<?php 
							$sql = "SELECT CONCAT(l_name,' ',f_name) as name, con_id as con_id FROM user_con";
							$query =  mysqli_query($conn, $sql);
							$rows = mysqli_num_rows($query);
								if($rows>0)
								{
									while($data = mysqli_fetch_array($query))
									{
							?>
							<option value="<?php echo $data['con_id']; ?>"> <?php echo $data['name']; ?> </option>
							<?php
									}
								} /*if condition*/
							?>
						</select>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">BUS STATUS:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">BUS ROUTE:</label>
						</div>
						<div class="col-lg-6">
						<select class="form-control" id="bus_stat_id" name="bus_stat_id" palceholder="" required>
							<option value="">---select bus status---</option> 
							<?php 
							$sql = "SELECT * FROM bus_stat";
							$query =  mysqli_query($conn, $sql);
							$rows = mysqli_num_rows($query);
								if($rows>0)
								{
									while($data = mysqli_fetch_array($query))
									{
							?>
							<option value="<?php echo $data['bus_stat_id']; ?>"> <?php echo $data['descrip']; ?> </option>
							<?php
									}
								} /*if condition*/
							?>
						</select>
						</div>
						<div class="col-lg-6">
						<select class="form-control" id="route_id" name="route_id" palceholder="" required>
							<option value="">---select route---</option> 
							<?php 
							$sql = "SELECT route_id, CONCAT(f_descrip,' - ', l_descrip) as route FROM route_details";
							$query =  mysqli_query($conn, $sql);
							$rows = mysqli_num_rows($query);
								if($rows>0)
								{
									while($data = mysqli_fetch_array($query))
									{
							?>
							<option value="<?php echo $data['route_id']; ?>"> <?php echo $data['route']; ?> </option>
							<?php
									}
								} /*if condition*/
							?>
						</select>
						</div>
						</div>
					
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="padding:6px 8px 6px 8px"><span ></span> Cancel</button>
					<button type="submit" class="btn btn-success" style="padding:6px 8px 6px 8px"><span ></span>Add</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>
<!-- add bus type -->
<div class="modal fade" id="addnew_bus_type" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Bus Type</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew_bus_type.php">
					<div class="row">
					<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">BUS TYPE:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="descrip" required />
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">ABBREVATION:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="abbr"name="abbr" required />
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="padding:6px 8px 6px 8px"><span ></span> Cancel</button>
					<button type="submit" class="btn btn-success" style="padding:6px 8px 6px 8px"><span ></span>Add</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>
<!-- add bus type -->
<!-- add eng. type -->
<div class="modal fade" id="addnew_eng_type" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Bus Engine Type</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew_bus_eng.php">
					<div class="row">
					<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">ENGINE TYPE:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="descrip" name="descrip" required />
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="padding:6px 8px 6px 8px"><span ></span> Cancel</button>
					<button type="submit" class="btn btn-success" style="padding:6px 8px 6px 8px"><span ></span>Add</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>
<!-- add eng. type -->
