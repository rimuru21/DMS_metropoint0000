<div class="modal fade" id="addnew_stat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:15em;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel"><b>Add Bus Status</b></h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew_bus_stat.php">
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">STATUS</label>
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