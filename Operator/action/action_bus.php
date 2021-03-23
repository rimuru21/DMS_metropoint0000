

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


