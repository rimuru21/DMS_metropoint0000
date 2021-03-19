
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
							<h4><b>TRIP #:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['trip_no']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>BUS #:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['bus_no']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>DRIVER:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['ass_dri']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>CONDUCTOR:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['ass_con']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>BUS TYPE:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['type_descrip']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>SEATERS CAPACITY:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['seat_cap']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>FROM TERMINAL:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['from_ter']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>TO TERMINAL:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['to_ter']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>TORNO TIME:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['que_time']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6"style="text-align:right" >
							<h4><b>TORNO DATE:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['que_date']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>IP ADDRESS:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['ip_add']; ?>.<?php echo $row['ip_add1']; ?>.<?php echo $row['ip_add2']; ?>.<?php echo $row['ip_add3']; ?></h4>
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