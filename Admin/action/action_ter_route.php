<!-- Delete -->
<div class="modal fade" id="del_ter<?php echo $row['ter_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:15em;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from ter_details where ter_id='".$row['ter_id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h4><center>Terminal: <strong><?php echo $drow['descrip']; ?></strong></center></h4> 
					<h5 style="color:red"><center><strong>Do you wish to DELETE this record?</strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal" style="padding:6px 8px 6px 8px"><span ></span> Cancel</button>
                    <a href="delete_ter.php?ter_id=<?php echo $row['ter_id']; ?>" class="btn btn-danger" style="padding:6px 8px 6px 8px"><span></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->
<!-- Delete -->
<div class="modal fade" id="del_route<?php echo $row['route_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:15em;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select CONCAT(f_descrip,' - ',l_descrip) as descrip from route_details where route_id='".$row['route_id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h4><center>Route: <strong><?php echo $drow['descrip']; ?></strong></center></h4> 
					<h5 style="color:red"><center><strong>Do you wish to DELETE this record?</strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal" style="padding:6px 8px 6px 8px"><span ></span> Cancel</button>
                    <a href="delete_route.php?route_id=<?php echo $row['route_id']; ?>" class="btn btn-danger" style="padding:6px 8px 6px 8px"><span></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->


<!-- Edit -->
<div class="modal fade" id="edit_ter<?php echo $row['ter_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:15em;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Terminal</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="update_ter.php?ter_id=<?php echo $row['ter_id']; ?>">
					<div style="height:10px;"></div>
					<div class="row">
					<div class="col-lg-4">
						</div>
						<div class="col-lg-8">
							<input type="hidden"id="ter_id" name="ter_id" class="form-control" value="<?php echo $row['ter_id']; ?>">
						</div>
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">TERMINAL NAME:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="descrip" name="descrip" value="<?php echo $row['descrip']; ?>" />
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">Latitude:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">Longitude:</label>
						</div>
						<div style="height:10px"></div>
						<div class="col-lg-6">
							<input type="text" class="form-control" id="ter_lat" name="ter_lat" value="<?php echo $row['ter_lat']; ?>" />
						</div>
						<div class="col-lg-6">
							<input type="text" class="form-control" id="ter_long" name="ter_long" value="<?php echo $row['ter_long']; ?>" />
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


<!-- edit route -->
<div class="modal fade" id="edit_route<?php echo $row['route_id']; ?>"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:15em;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Route</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="update_route.php?route_id=<?php echo $row['route_id']; ?>">

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
						</div>
						<div class="col-lg-8">
							<input type="hidden"id="route_id" name="route_id" class="form-control" value="<?php echo $row['route_id']; ?>">
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;"> FROM TERMINAL:</label>
						</div>
                        <div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;"> TO TERMINAL:</label>
						</div>
						<div class="col-lg-5">
							<input type="text" class="form-control" id="f_descrip" name="f_descrip" value="<?php echo $row['f_descrip']; ?>"  />
						</div>
                        <div class="col-lg-1" style="top:-1em;left:-.5em">
							<p  style="border:none; font-size:2vw; text-align:top" class="form-control" >-</p>
						</div>
                        <div class="col-lg-5">
							<input type="text" class="form-control" id="l_descrip" name="l_descrip" value="<?php echo $row['l_descrip']; ?>"  />
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
<!-- add route -->