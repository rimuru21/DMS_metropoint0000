<!-- Delete -->
<div class="modal fade" id="del_bus_stat<?php echo $row['bus_stat_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:15em;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from bus_stat where bus_stat_id='".$row['bus_stat_id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h4><center>BUS STATUS: <strong><?php echo $drow['descrip']; ?></strong></center></h4> 
					<h5 style="color:red"><center><strong>Do you wish to DELETE this record?</strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal" style="padding:6px 8px 6px 8px"><span ></span> Cancel</button>
                    <a href="delete_bus_stat.php?bus_stat_id=<?php echo $row['bus_stat_id']; ?>" class="btn btn-danger" style="padding:6px 8px 6px 8px"><span></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->
<!-- Delete -->
<div class="modal fade" id="del_stat<?php echo $row['stat_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:15em;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from user_stat where stat_id='".$row['stat_id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h4><center>USER STATUS: <strong><?php echo $drow['descrip']; ?></strong></center></h4> 
					<h5 style="color:red"><center><strong>Do you wish to DELETE this record?</strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal" style="padding:6px 8px 6px 8px"><span ></span> Cancel</button>
                    <a href="delete_user_stat.php?stat_id=<?php echo $row['stat_id']; ?>" class="btn btn-danger" style="padding:6px 8px 6px 8px"><span></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->


<!-- Edit user stat -->
<div class="modal fade" id="edit_stat<?php echo $row['stat_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:15em;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Terminal</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="update_user_stat.php?stat_id=<?php echo $row['stat_id']; ?>">
					<div style="height:10px;"></div>
					<div class="row">
					<div class="col-lg-4">
						</div>
						<div class="col-lg-8">
							<input type="hidden"id="stat_id" name="stat_id" class="form-control" value="<?php echo $row['stat_id']; ?>">
						</div>
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">USER STAT:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="descrip" name="descrip" value="<?php echo $row['descrip']; ?>" />
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


<!-- edit bus stat -->
<div class="modal fade" id="edit_bus_stat<?php echo $row['bus_stat_id']; ?>"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:15em;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Route</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="update_bus_stat.php?bus_stat_id=<?php echo $row['bus_stat_id']; ?>">

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
						</div>
						<div class="col-lg-8">
							<input type="hidden"id="bus_stat_id" name="bus_stat_id" class="form-control" value="<?php echo $row['bus_stat_id']; ?>">
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;"> BUS STATUS:</label>
						</div>
						<div class="col-lg-5">
							<input type="text" class="form-control" id="bus_stat_id" name="bus_stat_id" value="<?php echo $row['descrip']; ?>"  />
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