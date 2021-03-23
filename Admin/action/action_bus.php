<!-- Delete -->
<div class="modal fade" id="del_bus<?php echo $row['bus_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:15em;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from bus_details where bus_id='".$row['bus_id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h4><center>Terminal: <strong><?php echo $drow['bus_no']; ?></strong></center></h4> 
					<h5 style="color:red"><center><strong>Do you wish to DELETE this record?</strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal" style="padding:6px 8px 6px 8px"><span ></span> Cancel</button>
                    <a href="delete_bus.php?bus_id=<?php echo $row['bus_id']; ?>" class="btn btn-danger" style="padding:6px 8px 6px 8px"><span></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
<div class="modal fade" id="edit_bus<?php echo $row['bus_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h2 class="modal-title" id="myModalLabel">EDIT BUS DETAILS</h2></center>
                </div>
                <div class="modal-body">
				
				<div class="container-fluid" style="text-align:left">
				<form method="POST" action="update_bus.php?bus_id=<?php echo $row['bus_id']; ?>">
					<div class="row">
					<div class="col-lg-4">
						</div>
						<div class="col-lg-8">
							<input type="hidden"id="bus_id" name="bus_id" class="form-control" value="<?php echo $row['bus_id']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label style="position:relative; top:7px;">Bus #</label>
						</div>
						<div class="col-lg-8">
							<input style="font-weight: bold;" type="text" id="bus_no" name="bus_no" class="form-control" value="<?php echo $row['bus_no']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Plate #:</label>
						</div>
						<div class="col-lg-8">
							<input style="font-weight: bold;" type="text" class="form-control" id="plate_no" name="plate_no" value="<?php echo $row['plate_no']; ?>"/>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">Bus Type:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">Engine Type:</label>
						</div>
						<div class="col-lg-6">
							<select style="font-weight: bold;" class="form-control" id="bus_type_id" name="bus_type_id" placeholder="" >
								<option  style="font-weight: bold;" value="<?php echo $row['aaa']; ?>"><?php echo $row['bus_type_id']; ?></option>
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
						<div class="col-lg-6">
							<select style="font-weight: bold;" class="form-control" id="eng_id" name="eng_id" placeholder="" value="<?php echo $row['eng_id']; ?>">
								<option style="font-weight: bold;" value=" <?php echo $row['aab']; ?>"> <?php echo $row['eng_id']; ?></option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT * FROM bus_eng_type");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
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
							<label class="control-label" style="position:relative; top:7px;">Sap Code:</label>
						</div>
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Seaters Capacity:</label>
						</div>
						<div class="col-lg-8">
							<input style="font-weight: bold;" type="number" class="form-control" id="sap_code" name="sap_code" value="<?php echo $row['sap_code']; ?>" />
						</div>
						<div class="col-lg-4">
							<input style="font-weight: bold;" type="number" class="form-control" id="seat_cap" name="seat_cap" value="<?php echo $row['seat_cap']; ?>"/>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">Assigned Driver:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">Assigned Conductor:</label>
						</div>
						<div class="col-lg-6">
							<select style="font-weight: bold;" class="form-control" id="dri_id" name="dri_id" placeholder="" value="<?php echo $row['dri']; ?>">
								<option style="font-weight: bold;" value="<?php echo $row['dri_id']; ?>"><?php echo $row['dri']; ?></option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT CONCAT(l_name,' ',f_name) as name FROM user_dri");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
                                        {
                                ?>
                                <option value="<?php echo $data['dri_id']; ?>"> <?php echo $data['name']; ?> </option>
                                <?php
                                        }
                                    } /*if condition*/
                                ?>
                            </select>
						</div>
						<div class="col-lg-6">
							<select style="font-weight: bold;" class="form-control" id="con_id" name="con_id" placeholder="" value="<?php echo $row['con']; ?>">
								<option style="font-weight: bold;" value="<?php echo $row['con_id']; ?>"><?php echo $row['con']; ?></option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT CONCAT(l_name,' ',f_name) as name FROM user_con");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
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
							<label class="control-label" style="position:relative; top:7px;">Bus Status:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">Bus Route:</label>
						</div>
						<div class="col-lg-6">
							<select style="font-weight: bold;" class="form-control" id="bus_stat_id" name="bus_stat_id" value="<?php echo $row['bus_stat_id']; ?>">
								<option style="font-weight: bold;" value="<?php echo $row['aad']; ?>"><?php echo $row['bus_stat_id']; ?></option> 
                                <?php 
                                include('conn.php');
								$sql =  mysqli_query($conn, "SELECT * FROM bus_stat");
								$rows = mysqli_num_rows($sql);
									if($rows>0)
									{
										while($data = mysqli_fetch_array($sql))
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
							<select style="font-weight: bold;" class="form-control" id="route_id" name="route_id"   value="<?php echo $erow['route_id']; ?>">
								<option style="font-weight: bold;" value="<?php echo $row['aac']; ?>"><?php echo $row['route_id']; ?></option> 
                                <?php 
                                include('conn.php');
								$sql =  mysqli_query($conn, "SELECT CONCAT(f_descrip,' - ', l_decrip) as route FROM route_details");
								$rows = mysqli_num_rows($sql);
									if($rows>0)
									{
										while($data = mysqli_fetch_array($sql))
										{
								?>
								<option value="<?php echo $data['route']; ?>"> <?php echo $data['route']; ?> </option>
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
					<button type="submit" class="btn btn-success" style="padding:6px 8px 6px 8px"><span ></span>Save</a>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->


<!-- view -->
<div class="modal fade" id="view_bus<?php echo $row['bus_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width:93%;left:8em">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="myModalLabel" style="text-align:left; margin-left:.5em">BUS DETAILS</h3>
                </div>
                <div class="modal-body" style="border:1px solid grey; border-radius:8px;width:90%; left:2em">
				
				<div class="container-fluid">
				<form method="POST" role="form">
					<div class="row">
						<div class="col-lg-12">
							<i class="ion"></i><ion-icon name="bus" style="font-size: 80px;" ></ion-icon>
						</div>
					</div>
					<div class="container-fluid" >
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Bus #:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['bus_no']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Plate #:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['plate_no']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Bus Type:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['bus_type_id']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Engine Type:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['eng_id']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Sap Code:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['sap_code']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Seaters Capacity:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['seat_cap']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Assigned Driver:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['dri']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Assigned Conductor:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['con']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Bus Status:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['bus_stat_id']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6"style="text-align:right" >
							<h4><b>Bus Route:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['route_id']; ?></h4>
						</div>
					</div>
				</div>
			
						
                </div> 
				</div>
                <div class="modal-footer" style="margin-right:10px;">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" style="padding:8px;border-radius:4px"><span class=""></span> OK</button>
                </div>
				</form>
            </div>
        </div>
	</div>
						
<!-- /.modal -->


