<!-- Delete -->
    <div class="modal fade" id="del_bus<?php echo $row['bus_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
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
					<h5><center>BUS #: <strong><?php echo $drow['bus_no']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete_bus.php?bus_id=<?php echo $row['bus_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
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
				<?php
					$edit=mysqli_query($conn,"select * from bus_details where bus_id='".$row['bus_id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit_bus.php?bus_id=<?php echo $erow['bus_id']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">bus #:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="bus_no" class="form-control" value="<?php echo $erow['bus_no']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Plate #:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="plate_no" class="form-control" value="<?php echo $erow['plate_no']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Engine #:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="eng_no" class="form-control" value="<?php echo $erow['eng_no']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Chasis #:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="chasis_no" class="form-control" value="<?php echo $erow['chasis_no']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Purchase Date:</label>
						</div>
						<div class="col-lg-10">
							<input type="date" name="pur_date" class="form-control" value="<?php echo $erow['pur_date']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">License Expiration:</label>
						</div>
						<div class="col-lg-10">
							<input type="date" name="licen_exp" class="form-control" value="<?php echo $erow['licen_exp']; ?>">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->