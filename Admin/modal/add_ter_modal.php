<div class="modal fade" id="addnew_ter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog"style="top:15em;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Terminal</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew_ter.php">
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">TERMINAL NAME:</label>
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


<!-- add route -->
<div class="modal fade" id="addnew_route" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:15em;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Route</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew_route.php">
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;"> FROM TERMINAL:</label>
						</div>
                        <div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;"> TO TERMINAL:</label>
						</div>
						<div class="col-lg-5">
							<input type="text" class="form-control" id="f_descrip" name="f_descrip" required />
						</div>
                        <div class="col-lg-1" style="top:-1em;left:-.5em">
							<p  style="border:none; font-size:2vw; text-align:top" class="form-control" >-</p>
						</div>
                        <div class="col-lg-5">
							<input type="text" class="form-control" id="l_descrip" name="l_descrip" required />
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
<!-- add route -->