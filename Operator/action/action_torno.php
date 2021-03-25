<!-- Delete -->
<div class="modal fade" id="del_que<?php echo $row['que_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:15em;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from que_details where que_id='".$row['que_id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid"> 
                    <h4><center>Torno ID: <strong><?php echo $drow['que_id']; ?></strong></center></h4> 
                    <h4><center>Trip No.: <strong><?php echo $drow['trip_no']; ?></strong></center></h4> 
					<h5 style="color:red"><center><strong>Do you wish to DELETE this record?</strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal" style="padding:6px 8px 6px 8px"><span ></span> Cancel</button>
                    <a href="delete_torno.php?que_id=<?php echo $row['que_id']; ?>" class="btn btn-danger" style="padding:6px 8px 6px 8px"><span></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->
<!-- view -->
<div class="modal fade" id="view_que<?php echo $row['que_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width:93%;left:8em">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="myModalLabel" style="text-align:left; margin-left:.5em">TORNO DETAILS</h3>
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
							<h4><b>Trip #:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['trip_no']; ?></h4>
						</div>
					</div>
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
							<h4><b>Driver:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['dri']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Conductor:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['con']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Bus Type:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['abbr']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Seaters' Capacity:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['seat_cap']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>From Terminal:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['from_ter']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>To Terminal:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['to_ter']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Torno Time:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['qued_time']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6"style="text-align:right" >
							<h4><b>Torno Date:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['qued_date']; ?></h4>
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

<div class="modal fade" id="edit_que<?php echo $row['que_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width:35%">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">ADD TORNO</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid" style="text-align:left">
				<form method="POST" action="update_torno.php?que_id=<?php echo $row['que_id']; ?>">
						<div class="row">
						<div class="col-lg-8">
							<input type="hidden" class="form-control" id="que_id" name="que_id" value="<?php echo $row['que_id']; ?>" />
						</div>
						</div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Trip #</label>
						</div>
						<div class="col-lg-8">
							<input type="number" class="form-control" id="trip_no" name="trip_no" value="<?php echo $row['trip_no']; ?>" />
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Bus #</label>
						</div>
						<div class="col-lg-8">
							<select class="form-control" id="bus_no" name="bus_no" palceholder="" required>
								<option value="<?php echo $row['bus_no']; ?>"><?php echo $row['bus_no']; ?></option> 
								<?php 
								include('conn.php');
								$sql =  mysqli_query($conn, "SELECT bus_no FROM bus_details");
								$rows = mysqli_num_rows($sql);
									if($rows>0)
									{
										while($data = mysqli_fetch_array($sql))
										{
								?>
								<option value="<?php echo $data['bus_no']; ?>"> <?php echo $data['bus_no']; ?> </option>
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
							<label class="control-label" style="position:relative; top:7px;">Assigned Driver:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">Assigned Conductor:</label>
						</div>
						<div class="col-lg-6">
						<select class="form-control" id="dri_id" name="dri_id" placeholder="">
                            <option value="<?php echo $row['dri_id']; ?>"><?php echo $row['dri']; ?></option> 
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
							<select class="form-control" id="con_id" name="con_id" placeholder="">
                            <option value="<?php echo $row['con_id']; ?>"><?php echo $row['con']; ?></option>
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
							<label class="control-label" style="position:relative; top:7px;">Bus Type:</label>
						</div>
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Seaters Capacity.:</label>
						</div>
                        
						<div class="col-lg-8">
							<select class="form-control" id="bus_type_id" name="bus_type_id" placeholder="" >
                            <option value="<?php echo $row['bus_type_id']; ?>"><?php echo $row['abbr']; ?></option>
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
                            <input type="number" class="form-control" id="seat_cap" name="seat_cap" value="<?php echo $row['seat_cap']; ?>" />
						</div>
					</div>
                    <div style="height:5px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">From Terminal:</label>
						</div>
						<div class="col-lg-6">
						<label class="control-label" style="position:relative; top:7px;">To Terminal:</label>
						</div>
                        <div style="height:10px;"></div>
						<div class="col-lg-6">
                             <input type="text" class="form-control" id="from_ter" name="from_ter" value="<?= print_r($ter_ad) ?>" placehoder="<?= print_r($ter_ad)?>" disabled />	
						</div>
						<div class="col-lg-6">
							<select class="form-control" id="to_ter" name="to_ter" placeholder="" >
                                <option value="<?php echo $row['to_ter']; ?>"><?php echo $row['to_ter']; ?></option>
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
							<label class="control-label" style="position:relative; top:7px;">Torno Time:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">Torno Date:</label>
						</div>
						<div class="col-lg-6">
                            <input type="time" class="form-control" id="que_time" name="que_time" value="<?php echo $row['qued_time']; ?>" />
						</div>
						<div class="col-lg-6">
                            <input type="date" class="form-control" id="que_date" name="que_date" value="<?php echo $row['qued_date']; ?>"/>
						</div>
					</div>
                    </div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="padding:6px 8px 6px 8px"><span ></span> Cancel</button>
					<button type="submit" class="btn btn-success" style="padding:6px 8px 6px 8px"><span ></span>Update</a>
				</form>
                </div>
				
            </div>
        </div>
	</div>
	
