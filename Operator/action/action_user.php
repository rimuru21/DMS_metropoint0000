<!-- Delete top admin-->
<div class="modal fade" id="del_user<?php echo $row['t_ad_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:15em;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete User</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"SELECT * FROM user_t_ad WHERE t_ad_id='".$row['t_ad_id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
				
					<h4><center><strong><?php echo $drow['l_name']; ?>, <?php echo $drow['f_name']; ?></strong></center></h4>
					<h5><center>USER ID: <strong><?php echo $drow['user_id']; ?></strong></center></h5>
                    <h5><center>USERNAME: <strong><?php echo $drow['u_name']; ?></strong></center></h5> 
					<h5 style="color:red"><center><strong>Do you wish to DELETE this record?</strong></center></h5>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="padding:6px 8px 6px 8px"> <span class=""></span> Cancel</button>
                    <a href="delete_t_ad.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-danger" style="padding:6px 8px 6px 8px"><span class=""></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Delete admin-->
<div class="modal fade" id="del_user<?php echo $row['ad_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:15em;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete User</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from user_admin where ad_id='".$row['ad_id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h4><center><strong><?php echo $drow['l_name']; ?>, <?php echo $drow['f_name']; ?></strong></center></h4>
					<h5><center>USER ID: <strong><?php echo $drow['user_id']; ?></strong></center></h5>
                    <h5><center>USERNAME: <strong><?php echo $drow['u_name']; ?></strong></center></h5> 
					<h5 style="color:red"><center><strong>Do you wish to DELETE this record?</strong></center></h5>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="padding:6px 8px 6px 8px"> <span class=""></span> Cancel</button>
                    <a href="delete_ad.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-danger" style="padding:6px 8px 6px 8px"><span class=""></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->


<!-- Delete supervisor-->
<div class="modal fade" id="del_user<?php echo $row['sup_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:15em;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete User</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from user_sup where sup_id='".$row['sup_id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h4><center><strong><?php echo $drow['l_name']; ?>, <?php echo $drow['f_name']; ?></strong></center></h4>
					<h5><center>USER ID: <strong><?php echo $drow['user_id']; ?></strong></center></h5>
                    <h5><center>USERNAME: <strong><?php echo $drow['u_name']; ?></strong></center></h5> 
					<h5 style="color:red"><center><strong>Do you wish to DELETE this record?</strong></center></h5>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="padding:6px 8px 6px 8px"> <span class=""></span> Cancel</button>
                    <a href="delete_sup.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-danger" style="padding:6px 8px 6px 8px"><span class=""></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->


<!-- Delete manager-->
<div class="modal fade" id="del_user<?php echo $row['man_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:15em;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete User</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from user_man where man_id='".$row['man_id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h4><center><strong><?php echo $drow['l_name']; ?>, <?php echo $drow['f_name']; ?></strong></center></h4>
					<h5><center>USER ID: <strong><?php echo $drow['user_id']; ?></strong></center></h5>
                    <h5><center>USERNAME: <strong><?php echo $drow['u_name']; ?></strong></center></h5> 
					<h5 style="color:red"><center><strong>Do you wish to DELETE this record?</strong></center></h5>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="padding:6px 8px 6px 8px"> <span class=""></span> Cancel</button>
                    <a href="delete_man.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-danger" style="padding:6px 8px 6px 8px"><span class=""></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->



<!-- Delete Operator-->
<div class="modal fade" id="del_user<?php echo $row['opt_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:15em;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete User</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from user_opt where opt_id='".$row['opt_id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h4><center><strong><?php echo $drow['l_name']; ?>, <?php echo $drow['f_name']; ?></strong></center></h4>
					<h5><center>USER ID: <strong><?php echo $drow['user_id']; ?></strong></center></h5>
                    <h5><center>USERNAME: <strong><?php echo $drow['u_name']; ?></strong></center></h5> 
					<h5 style="color:red"><center><strong>Do you wish to DELETE this record?</strong></center></h5>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="padding:6px 8px 6px 8px"> <span class=""></span> Cancel</button>
                    <a href="delete_opt.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-danger" style="padding:6px 8px 6px 8px"><span class=""></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->


<!-- Delete dispatcher-->
<div class="modal fade" id="del_user<?php echo $row['dispt_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:15em;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete User</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from user_dispt where dispt_id='".$row['dispt_id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h4><center><strong><?php echo $drow['l_name']; ?>, <?php echo $drow['f_name']; ?></strong></center></h4>
					<h5><center>USER ID: <strong><?php echo $drow['user_id']; ?></strong></center></h5>
                    <h5><center>USERNAME: <strong><?php echo $drow['u_name']; ?></strong></center></h5> 
					<h5 style="color:red"><center><strong>Do you wish to DELETE this record?</strong></center></h5>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="padding:6px 8px 6px 8px"> <span class=""></span> Cancel</button>
                    <a href="delete_dispt.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-danger" style="padding:6px 8px 6px 8px"><span class=""></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->


<!-- Delete driver-->
<div class="modal fade" id="del_user<?php echo $row['dri_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:15em;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete User</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from user_dri where dri_id='".$row['dri_id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h4><center><strong><?php echo $drow['l_name']; ?>, <?php echo $drow['f_name']; ?></strong></center></h4>
					<h5><center>USER ID: <strong><?php echo $drow['user_id']; ?></strong></center></h5>
                    <h5><center>USERNAME: <strong><?php echo $drow['u_name']; ?></strong></center></h5> 
					<h5 style="color:red"><center><strong>Do you wish to DELETE this record?</strong></center></h5>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="padding:6px 8px 6px 8px"> <span class=""></span> Cancel</button>
                    <a href="delete_dri.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-danger" style="padding:6px 8px 6px 8px"><span class=""></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Delete conductor-->
<div class="modal fade" id="del_user<?php echo $row['con_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:15em;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete User</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from user_con where con_id='".$row['con_id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h4><center><strong><?php echo $drow['l_name']; ?>, <?php echo $drow['f_name']; ?></strong></center></h4>
					<h5><center>USER ID: <strong><?php echo $drow['user_id']; ?></strong></center></h5>
                    <h5><center>USERNAME: <strong><?php echo $drow['u_name']; ?></strong></center></h5> 
					<h5 style="color:red"><center><strong>Do you wish to DELETE this record?</strong></center></h5>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="padding:6px 8px 6px 8px"> <span class=""></span> Cancel</button>
                    <a href="delete_con.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-danger" style="padding:6px 8px 6px 8px"><span class=""></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- view top admin-->
<div class="modal fade" id="view_user<?php echo $row['t_ad_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width:93%;left:8em">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="myModalLabel" style="text-align:left; margin-left:.5em">USER DETAILS</h3>
                </div>
                <div class="modal-body" style="border:1px solid grey; border-radius:8px;width:90%; left:2em">
				
				<div class="container-fluid">
				<form method="POST" role="form">
					<div class="row">
						<div class="col-lg-12">
							<i class="ion"></i><ion-icon name="person" style="font-size: 80px;" ></ion-icon>
						</div>
					</div>
					<div class="container-fluid" >
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>POSITION:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left">Top Admin</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>FULL NAME:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['l_name']; ?>, <?php echo $row['f_name']; ?> <?php echo $row['m_intl']; ?>. <?php echo $row['sufx']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>USERNAME:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['u_name']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>SEX:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['sex']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>CONTACT NO.:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['cont_no']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>BASE TERMINAL:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['ter_descrip']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>STATUS:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['stat_descrip']; ?></h4>
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


<!-- view admin-->
<div class="modal fade" id="view_user<?php echo $row['ad_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width:93%;left:8em">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="myModalLabel" style="text-align:left; margin-left:.5em">USER DETAILS</h3>
                </div>
                <div class="modal-body" style="border:1px solid grey; border-radius:8px;width:90%; left:2em">
				
				<div class="container-fluid">
				<form method="POST" role="form">
					<div class="row">
						<div class="col-lg-12">
							<i class="ion"></i><ion-icon name="person" style="font-size: 80px;" ></ion-icon>
						</div>
					</div>
					<div class="container-fluid" >
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>POSITION:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left">Admin</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>FULL NAME:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['l_name']; ?>, <?php echo $row['f_name']; ?> <?php echo $row['m_intl']; ?>. <?php echo $row['sufx']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>USERNAME:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['u_name']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>SEX:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['sex']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>CONTACT NO.:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['cont_no']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>BASE TERMINAL:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['ter_descrip']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>STATUS:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['stat_descrip']; ?></h4>
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


<!-- view Supervisor-->
<div class="modal fade" id="view_user<?php echo $row['sup_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width:93%;left:8em">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="myModalLabel" style="text-align:left; margin-left:.5em">USER DETAILS</h3>
                </div>
                <div class="modal-body" style="border:1px solid grey; border-radius:8px;width:90%; left:2em">
				
				<div class="container-fluid">
				<form method="POST" role="form">
					<div class="row">
						<div class="col-lg-12">
							<i class="ion"></i><ion-icon name="person" style="font-size: 80px;" ></ion-icon>
						</div>
					</div>
					<div class="container-fluid" >
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>POSITION:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left">Supervisor</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>FULL NAME:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['l_name']; ?>, <?php echo $row['f_name']; ?> <?php echo $row['m_intl']; ?>. <?php echo $row['sufx']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>USERNAME:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['u_name']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>SEX:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['sex']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>CONTACT NO.:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['cont_no']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>BASE TERMINAL:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['ter_descrip']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>STATUS:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['stat_descrip']; ?></h4>
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


<!-- view manager-->
<div class="modal fade" id="view_user<?php echo $row['man_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width:93%;left:8em">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="myModalLabel" style="text-align:left; margin-left:.5em">USER DETAILS</h3>
                </div>
                <div class="modal-body" style="border:1px solid grey; border-radius:8px;width:90%; left:2em">
				
				<div class="container-fluid">
				<form method="POST" role="form">
					<div class="row">
						<div class="col-lg-12">
							<i class="ion"></i><ion-icon name="person" style="font-size: 80px;" ></ion-icon>
						</div>
					</div>
					<div class="container-fluid" >
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>POSITION:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left">Manager</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>FULL NAME:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['l_name']; ?>, <?php echo $row['f_name']; ?> <?php echo $row['m_intl']; ?>. <?php echo $row['sufx']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>USERNAME:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['u_name']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>SEX:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['sex']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>CONTACT NO.:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['cont_no']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>BASE TERMINAL:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['ter_descrip']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>STATUS:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['stat_descrip']; ?></h4>
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
 
<!-- view operator-->
<div class="modal fade" id="view_user<?php echo $row['opt_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width:93%;left:8em">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="myModalLabel" style="text-align:left; margin-left:.5em">USER DETAILS</h3>
                </div>
                <div class="modal-body" style="border:1px solid grey; border-radius:8px;width:90%; left:2em">
				
				<div class="container-fluid">
				<form method="POST" role="form">
					<div class="row">
						<div class="col-lg-12">
							<i class="ion"></i><ion-icon name="person" style="font-size: 80px;" ></ion-icon>
						</div>
					</div>
					<div class="container-fluid" >
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>POSITION:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left">Operator</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>FULL NAME:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['l_name']; ?>, <?php echo $row['f_name']; ?> <?php echo $row['m_intl']; ?>. <?php echo $row['sufx']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>USERNAME:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['u_name']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>SEX:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['sex']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>CONTACT NO.:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['cont_no']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>BASE TERMINAL:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['ter_descrip']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>STATUS:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['stat_descrip']; ?></h4>
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


<!-- view Dispatcher-->
<div class="modal fade" id="view_user<?php echo $row['dispt_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width:93%;left:8em">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="myModalLabel" style="text-align:left; margin-left:.5em">USER DETAILS</h3>
                </div>
                <div class="modal-body" style="border:1px solid grey; border-radius:8px;width:90%; left:2em">
				
				<div class="container-fluid">
				<form method="POST" role="form">
					<div class="row">
						<div class="col-lg-12">
							<i class="ion"></i><ion-icon name="person" style="font-size: 80px;" ></ion-icon>
						</div>
					</div>
					<div class="container-fluid" >
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>POSITION:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left">Dispatcher</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>FULL NAME:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['l_name']; ?>, <?php echo $row['f_name']; ?> <?php echo $row['m_intl']; ?>. <?php echo $row['sufx']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>USERNAME:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['u_name']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>SEX:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['sex']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>CONTACT NO.:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['cont_no']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>BASE TERMINAL:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['ter_descrip']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>STATUS:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['stat_descrip']; ?></h4>
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



<!-- view Driver-->
<div class="modal fade" id="view_user<?php echo $row['dri_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width:93%;left:8em">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="myModalLabel" style="text-align:left; margin-left:.5em">USER DETAILS</h3>
                </div>
                <div class="modal-body" style="border:1px solid grey; border-radius:8px;width:90%; left:2em">
				
				<div class="container-fluid">
				<form method="POST" role="form">
					<div class="row">
						<div class="col-lg-12">
							<i class="ion"></i><ion-icon name="person" style="font-size: 80px;" ></ion-icon>
						</div>
					</div>
					<div class="container-fluid" >
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Position:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left">Driver</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Full Name:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['l_name']; ?>, <?php echo $row['f_name']; ?> <?php echo $row['m_intl']; ?>. <?php echo $row['sufx']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Username:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['u_name']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Sex:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['sex']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Contact No..:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['cont_no']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Base Terminal:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['ter_descrip']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Status:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['stat_descrip']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Employment Date:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['emp_date']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Licence No.:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['licen_no']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Licence Expiration .:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['licen_exp']; ?></h4>
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



<!-- view Conductor-->
<div class="modal fade" id="view_user<?php echo $row['con_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width:93%;left:8em">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="myModalLabel" style="text-align:left; margin-left:.5em">USER DETAILS</h3>
                </div>
                <div class="modal-body" style="border:1px solid grey; border-radius:8px;width:90%; left:2em">
				
				<div class="container-fluid">
				<form method="POST" role="form">
					<div class="row">
						<div class="col-lg-12">
							<i class="ion"></i><ion-icon name="person" style="font-size: 80px;" ></ion-icon>
						</div>
					</div>
					<div class="container-fluid" >
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Position:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left">Conductor</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Full Name:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['l_name']; ?>, <?php echo $row['f_name']; ?> <?php echo $row['m_intl']; ?>. <?php echo $row['sufx']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Username:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['u_name']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Sex:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['sex']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Contact No..:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['cont_no']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Base Terminal:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['ter_descrip']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Status:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['stat_descrip']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>Employment Date:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['emp_date']; ?></h4>
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



<!-- Edit Top Admin-->
<div class="modal fade" id="edit_user<?php echo $row['t_ad_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h2 class="modal-title" id="myModalLabel">Edit Top Admin Details</h2></center>
                </div>
                <div class="modal-body">
				
				<div class="container-fluid" style="text-align:left">
				<form method="POST" action="update_t_ad.php?t_ad_id=<?php echo $row['t_ad_id']; ?>">
					<div class="row">
					<div class="col-lg-4">
						</div>
						<div class="col-lg-8">
							<input type="hidden"id="t_ad_id" name="t_ad_id" class="form-control" value="<?php echo $row['t_ad_id']; ?>">
							<input type="hidden"id="user_id" name="user_id" class="form-control" value="<?php echo $row['user_id']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
					<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">FIRSTNAME:</label>
						</div>
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">LASTNAME:</label>
						</div>
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">SUFFIX:</label>
						</div>
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">M.I:</label>
						</div>

						<div class="col-lg-4">
							<input style="font-weight: bold;" type="text" class="form-control" id="f_name" name="f_name" value="<?php echo $row['f_name']; ?>" required />
						</div>
						<div class="col-lg-4">
							<input style="font-weight: bold;" type="text" class="form-control" id="l_name" name="l_name" value="<?php echo $row['l_name']; ?>" required />
						</div>
						<div class="col-lg-2">
							<select  style="font-weight: bold;" class="form-control" id ="sufx" name="sufx" palceholder="" >
								<option style="font-weight: bold;" value="<?php echo $row['sufx']; ?>"><?php echo $row['sufx']; ?></option> 
								<option  value="Sr."> Sr. </option>
								<option  value="Jr."> Jr. </option>
								<option  value="I"> I </option>
								<option  value="II"> II </option>
								<option  value="III"> III </option>
								<option  value="IV"> IV </option>
							</select>
						</div>
						<div class="col-lg-2">
							<input style="font-weight: bold;" type="text" class="form-control" id="m_intl" name="m_intl" value="<?php echo $row['m_intl']; ?>" required />
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">USERNAME:</label>
						</div>
						<div class="col-lg-8">
							<input style="font-weight: bold;" type="text" class="form-control" id="u_name" name="u_name" value="<?php echo $row['u_name']; ?>"/>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">SEX:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">CONTACT NO.:</label>
						</div>
						<div class="col-lg-6">
						<select  style="font-weight: bold;" class="form-control" id="sex" name="sex" palceholder="" required>
							<option  style="font-weight: bold;"value="<?php echo $row['sex']; ?>"><?php echo $row['sex']; ?></option> 
							<option  value="Male"> MALE </option>
                            <option  value="Female"> FEMALE </option>
						</select>
						</div>	
						<div class="col-lg-6">
							<input style="font-weight: bold;" type="number" class="form-control" id="cont_no" name="cont_no" value="<?php echo $row['cont_no']; ?>" />
						</div>	
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">BASE TERMINAL:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">STATUS:</label>
						</div>
						<div class="col-lg-6">
							<select style="font-weight: bold;" class="form-control" id="ter_id" name="ter_id" placeholder="" value="<?php echo $row['ter_id']; ?>">
								<option style="font-weight: bold;" value="<?php echo $row['ter_id']; ?>"><?php echo $row['ter_descrip']; ?></option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT * FROM ter_details");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
                                        {
                                ?>
                                <option value="<?php echo $data['ter_id']; ?>"> <?php echo $data['descrip']; ?> </option>
                                <?php
                                        }
                                    } /*if condition*/
                                ?>
                            </select>
						</div>
						<div class="col-lg-6">
							<select style="font-weight: bold;" class="form-control" id="stat_id" name="stat_id" placeholder="" value="<?php echo $row['stat_id']; ?>">
								<option style="font-weight: bold;" value="<?php echo $row['stat_id']; ?>"><?php echo $row['stat_descrip']; ?></option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT * FROM user_stat");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
                                        {
                                ?>
                                <option value="<?php echo $data['stat_id']; ?>"> <?php echo $data['descrip']; ?> </option>
                                <?php
                                        }
                                    } /*if condition*/
                                ?>
                            </select>
						</div>
					</div>
						<div style="height:10px;"></div>
							<div class="row">
								<div class="col-lg-4">
									<label class="control-label" style="position:relative; top:7px;">PASSWORD:</label>
								</div>
								<div>
								<div class="col-lg-8">
									<input type="password" class="form-control" id="pass" name="pass" value=""/>
								</div>
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


<!-- Edit Admin-->
<div class="modal fade" id="edit_user<?php echo $row['ad_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h2 class="modal-title" id="myModalLabel">Edit Admin Details</h2></center>
                </div>
                <div class="modal-body">
				
				<div class="container-fluid" style="text-align:left">
				<form method="POST" action="update_admin.php?ad_id=<?php echo $row['ad_id']; ?>">
					<div class="row">
					<div class="col-lg-4">
						</div>
						<div class="col-lg-8">
							<input type="hidden"id="ad_id" name="ad_id" class="form-control" value="<?php echo $row['ad_id']; ?>">
							<input type="hidden"id="user_id" name="user_id" class="form-control" value="<?php echo $row['user_id']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
					<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">FIRSTNAME:</label>
						</div>
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">LASTNAME:</label>
						</div>
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">SUFFIX:</label>
						</div>
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">M.I:</label>
						</div>

						<div class="col-lg-4">
							<input style="font-weight: bold;" type="text" class="form-control" id="f_name" name="f_name" value="<?php echo $row['f_name']; ?>" required />
						</div>
						<div class="col-lg-4">
							<input style="font-weight: bold;" type="text" class="form-control" id="l_name" name="l_name" value="<?php echo $row['l_name']; ?>" required />
						</div>
						<div class="col-lg-2">
							<select  style="font-weight: bold;" class="form-control" id ="sufx" name="sufx" palceholder="" >
								<option style="font-weight: bold;" value="<?php echo $row['sufx']; ?>"><?php echo $row['sufx']; ?></option> 
								<option  value="Sr."> Sr. </option>
								<option  value="Jr."> Jr. </option>
								<option  value="I"> I </option>
								<option  value="II"> II </option>
								<option  value="III"> III </option>
								<option  value="IV"> IV </option>
							</select>
						</div>
						<div class="col-lg-2">
							<input style="font-weight: bold;" type="text" class="form-control" id="m_intl" name="m_intl" value="<?php echo $row['m_intl']; ?>" required />
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">USERNAME:</label>
						</div>
						<div class="col-lg-8">
							<input style="font-weight: bold;" type="text" class="form-control" id="u_name" name="u_name" value="<?php echo $row['u_name']; ?>"/>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">SEX:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">CONTACT NO.:</label>
						</div>
						<div class="col-lg-6">
						<select  style="font-weight: bold;" class="form-control" id="sex" name="sex" palceholder="" required>
							<option  style="font-weight: bold;"value="<?php echo $row['sex']; ?>"><?php echo $row['sex']; ?></option> 
							<option  value="Male"> MALE </option>
                            <option  value="Female"> FEMALE </option>
						</select>
						</div>	
						<div class="col-lg-6">
							<input style="font-weight: bold;" type="number" class="form-control" id="cont_no" name="cont_no" value="<?php echo $row['cont_no']; ?>" />
						</div>	
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">BASE TERMINAL:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">STATUS:</label>
						</div>
						<div class="col-lg-6">
							<select style="font-weight: bold;" class="form-control" id="ter_id" name="ter_id" placeholder="" value="<?php echo $row['ter_id']; ?>">
								<option style="font-weight: bold;" value="<?php echo $row['ter_id']; ?>"><?php echo $row['ter_descrip']; ?></option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT * FROM ter_details");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
                                        {
                                ?>
                                <option value="<?php echo $data['ter_id']; ?>"> <?php echo $data['descrip']; ?> </option>
                                <?php
                                        }
                                    } /*if condition*/
                                ?>
                            </select>
						</div>
						<div class="col-lg-6">
							<select style="font-weight: bold;" class="form-control" id="stat_id" name="stat_id" placeholder="" value="<?php echo $row['stat_id']; ?>">
								<option style="font-weight: bold;" value="<?php echo $row['stat_id']; ?>"><?php echo $row['stat_descrip']; ?></option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT * FROM user_stat");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
                                        {
                                ?>
                                <option value="<?php echo $data['stat_id']; ?>"> <?php echo $data['descrip']; ?> </option>
                                <?php
                                        }
                                    } /*if condition*/
                                ?>
                            </select>
						</div>
					</div>
						<div style="height:10px;"></div>
							<div class="row">
								<div class="col-lg-4">
									<label class="control-label" style="position:relative; top:7px;">PASSWORD:</label>
								</div>
								<div>
								<div class="col-lg-8">
									<input type="password" class="form-control" id="pass" name="pass" value=""/>
								</div>
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


<!-- Edit SUPERVISOR-->
<div class="modal fade" id="edit_user<?php echo $row['sup_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h2 class="modal-title" id="myModalLabel">Edit Supervisor Details</h2></center>
                </div>
                <div class="modal-body">
				
				<div class="container-fluid" style="text-align:left">
				<form method="POST" action="update_sup.php?sup_id=<?php echo $row['sup_id']; ?>">
					<div class="row">
					<div class="col-lg-4">
						</div>
						<div class="col-lg-8">
							<input type="hidden"id="sup_id" name="sup_id" class="form-control" value="<?php echo $row['sup_id']; ?>">
							<input type="hidden"id="user_id" name="user_id" class="form-control" value="<?php echo $row['user_id']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
					<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">FIRSTNAME:</label>
						</div>
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">LASTNAME:</label>
						</div>
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">SUFFIX:</label>
						</div>
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">M.I:</label>
						</div>

						<div class="col-lg-4">
							<input style="font-weight: bold;" type="text" class="form-control" id="f_name" name="f_name" value="<?php echo $row['f_name']; ?>" required />
						</div>
						<div class="col-lg-4">
							<input style="font-weight: bold;" type="text" class="form-control" id="l_name" name="l_name" value="<?php echo $row['l_name']; ?>" required />
						</div>
						<div class="col-lg-2">
							<select  style="font-weight: bold;" class="form-control" id ="sufx" name="sufx" palceholder="" >
								<option style="font-weight: bold;" value="<?php echo $row['sufx']; ?>"><?php echo $row['sufx']; ?></option> 
								<option  value="Sr."> Sr. </option>
								<option  value="Jr."> Jr. </option>
								<option  value="I"> I </option>
								<option  value="II"> II </option>
								<option  value="III"> III </option>
								<option  value="IV"> IV </option>
							</select>
						</div>
						<div class="col-lg-2">
							<input style="font-weight: bold;" type="text" class="form-control" id="m_intl" name="m_intl" value="<?php echo $row['m_intl']; ?>" required />
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">USERNAME:</label>
						</div>
						<div class="col-lg-8">
							<input style="font-weight: bold;" type="text" class="form-control" id="u_name" name="u_name" value="<?php echo $row['u_name']; ?>"/>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">SEX:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">CONTACT NO.:</label>
						</div>
						<div class="col-lg-6">
						<select  style="font-weight: bold;" class="form-control" id="sex" name="sex" palceholder="" required>
							<option  style="font-weight: bold;"value="<?php echo $row['sex']; ?>"><?php echo $row['sex']; ?></option> 
							<option  value="Male"> MALE </option>
                            <option  value="Female"> FEMALE </option>
						</select>
						</div>	
						<div class="col-lg-6">
							<input style="font-weight: bold;" type="number" class="form-control" id="cont_no" name="cont_no" value="<?php echo $row['cont_no']; ?>" />
						</div>	
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">BASE TERMINAL:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">STATUS:</label>
						</div>
						<div class="col-lg-6">
							<select style="font-weight: bold;" class="form-control" id="ter_id" name="ter_id" placeholder="" value="<?php echo $row['ter_id']; ?>">
								<option style="font-weight: bold;" value="<?php echo $row['ter_id']; ?>"><?php echo $row['ter_descrip']; ?></option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT * FROM ter_details");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
                                        {
                                ?>
                                <option value="<?php echo $data['ter_id']; ?>"> <?php echo $data['descrip']; ?> </option>
                                <?php
                                        }
                                    } /*if condition*/
                                ?>
                            </select>
						</div>
						<div class="col-lg-6">
							<select style="font-weight: bold;" class="form-control" id="stat_id" name="stat_id" placeholder="" value="<?php echo $row['stat_id']; ?>">
								<option style="font-weight: bold;" value="<?php echo $row['stat_id']; ?>"><?php echo $row['stat_descrip']; ?></option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT * FROM user_stat");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
                                        {
                                ?>
                                <option value="<?php echo $data['stat_id']; ?>"> <?php echo $data['descrip']; ?> </option>
                                <?php
                                        }
                                    } /*if condition*/
                                ?>
                            </select>
						</div>
					</div>
						<div style="height:10px;"></div>
							<div class="row">
								<div class="col-lg-4">
									<label class="control-label" style="position:relative; top:7px;">PASSWORD:</label>
								</div>
								<div>
								<div class="col-lg-8">
									<input type="password" class="form-control" id="pass" name="pass" value=""/>
								</div>
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


<!-- Edit manager-->
<div class="modal fade" id="edit_user<?php echo $row['man_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h2 class="modal-title" id="myModalLabel">Edit Manager Details</h2></center>
                </div>
                <div class="modal-body">
				
				<div class="container-fluid" style="text-align:left">
				<form method="POST" action="update_man.php?man_id=<?php echo $row['man_id']; ?>">
					<div class="row">
					<div class="col-lg-4">
						</div>
						<div class="col-lg-8">
							<input type="hidden"id="man_id" name="man_id" class="form-control" value="<?php echo $row['man_id']; ?>">
							<input type="hidden"id="user_id" name="user_id" class="form-control" value="<?php echo $row['user_id']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
					<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">FIRSTNAME:</label>
						</div>
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">LASTNAME:</label>
						</div>
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">SUFFIX:</label>
						</div>
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">M.I:</label>
						</div>

						<div class="col-lg-4">
							<input style="font-weight: bold;" type="text" class="form-control" id="f_name" name="f_name" value="<?php echo $row['f_name']; ?>" required />
						</div>
						<div class="col-lg-4">
							<input style="font-weight: bold;" type="text" class="form-control" id="l_name" name="l_name" value="<?php echo $row['l_name']; ?>" required />
						</div>
						<div class="col-lg-2">
							<select  style="font-weight: bold;" class="form-control" id ="sufx" name="sufx" palceholder="" >
								<option style="font-weight: bold;" value="<?php echo $row['sufx']; ?>"><?php echo $row['sufx']; ?></option> 
								<option  value="Sr."> Sr. </option>
								<option  value="Jr."> Jr. </option>
								<option  value="I"> I </option>
								<option  value="II"> II </option>
								<option  value="III"> III </option>
								<option  value="IV"> IV </option>
							</select>
						</div>
						<div class="col-lg-2">
							<input style="font-weight: bold;" type="text" class="form-control" id="m_intl" name="m_intl" value="<?php echo $row['m_intl']; ?>" required />
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">USERNAME:</label>
						</div>
						<div class="col-lg-8">
							<input style="font-weight: bold;" type="text" class="form-control" id="u_name" name="u_name" value="<?php echo $row['u_name']; ?>"/>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">SEX:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">CONTACT NO.:</label>
						</div>
						<div class="col-lg-6">
						<select  style="font-weight: bold;" class="form-control" id="sex" name="sex" palceholder="" required>
							<option  style="font-weight: bold;"value="<?php echo $row['sex']; ?>"><?php echo $row['sex']; ?></option> 
							<option  value="Male"> MALE </option>
                            <option  value="Female"> FEMALE </option>
						</select>
						</div>	
						<div class="col-lg-6">
							<input style="font-weight: bold;" type="number" class="form-control" id="cont_no" name="cont_no" value="<?php echo $row['cont_no']; ?>" />
						</div>	
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">BASE TERMINAL:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">STATUS:</label>
						</div>
						<div class="col-lg-6">
							<select style="font-weight: bold;" class="form-control" id="ter_id" name="ter_id" placeholder="" value="<?php echo $row['ter_id']; ?>">
								<option style="font-weight: bold;" value="<?php echo $row['ter_id']; ?>"><?php echo $row['ter_descrip']; ?></option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT * FROM ter_details");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
                                        {
                                ?>
                                <option value="<?php echo $data['ter_id']; ?>"> <?php echo $data['descrip']; ?> </option>
                                <?php
                                        }
                                    } /*if condition*/
                                ?>
                            </select>
						</div>
						<div class="col-lg-6">
							<select style="font-weight: bold;" class="form-control" id="stat_id" name="stat_id" placeholder="" value="<?php echo $row['stat_id']; ?>">
								<option style="font-weight: bold;" value="<?php echo $row['stat_id']; ?>"><?php echo $row['stat_descrip']; ?></option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT * FROM user_stat");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
                                        {
                                ?>
                                <option value="<?php echo $data['stat_id']; ?>"> <?php echo $data['descrip']; ?> </option>
                                <?php
                                        }
                                    } /*if condition*/
                                ?>
                            </select>
						</div>
					</div>
						<div style="height:10px;"></div>
							<div class="row">
								<div class="col-lg-4">
									<label class="control-label" style="position:relative; top:7px;">PASSWORD:</label>
								</div>
								<div>
								<div class="col-lg-8">
									<input type="password" class="form-control" id="pass" name="pass" value=""/>
								</div>
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


<!-- Edit operator-->
<div class="modal fade" id="edit_user<?php echo $row['opt_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h2 class="modal-title" id="myModalLabel">Edit Operator Details</h2></center>
                </div>
                <div class="modal-body">
				
				<div class="container-fluid" style="text-align:left">
				<form method="POST" action="update_opt.php?opt_id=<?php echo $row['opt_id']; ?>">
					<div class="row">
					<div class="col-lg-4">
						</div>
						<div class="col-lg-8">
							<input type="hidden"id="opt_id" name="opt_id" class="form-control" value="<?php echo $row['opt_id']; ?>">
							<input type="hidden"id="user_id" name="user_id" class="form-control" value="<?php echo $row['user_id']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
					<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">FIRSTNAME:</label>
						</div>
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">LASTNAME:</label>
						</div>
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">SUFFIX:</label>
						</div>
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">M.I:</label>
						</div>

						<div class="col-lg-4">
							<input style="font-weight: bold;" type="text" class="form-control" id="f_name" name="f_name" value="<?php echo $row['f_name']; ?>" required />
						</div>
						<div class="col-lg-4">
							<input style="font-weight: bold;" type="text" class="form-control" id="l_name" name="l_name" value="<?php echo $row['l_name']; ?>" required />
						</div>
						<div class="col-lg-2">
							<select  style="font-weight: bold;" class="form-control" id ="sufx" name="sufx" palceholder="" >
								<option style="font-weight: bold;" value="<?php echo $row['sufx']; ?>"><?php echo $row['sufx']; ?></option> 
								<option  value="Sr."> Sr. </option>
								<option  value="Jr."> Jr. </option>
								<option  value="I"> I </option>
								<option  value="II"> II </option>
								<option  value="III"> III </option>
								<option  value="IV"> IV </option>
							</select>
						</div>
						<div class="col-lg-2">
							<input style="font-weight: bold;" type="text" class="form-control" id="m_intl" name="m_intl" value="<?php echo $row['m_intl']; ?>" required />
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">USERNAME:</label>
						</div>
						<div class="col-lg-8">
							<input style="font-weight: bold;" type="text" class="form-control" id="u_name" name="u_name" value="<?php echo $row['u_name']; ?>"/>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">SEX:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">CONTACT NO.:</label>
						</div>
						<div class="col-lg-6">
						<select  style="font-weight: bold;" class="form-control" id="sex" name="sex" palceholder="" required>
							<option  style="font-weight: bold;"value="<?php echo $row['sex']; ?>"><?php echo $row['sex']; ?></option> 
							<option  value="Male"> MALE </option>
                            <option  value="Female"> FEMALE </option>
						</select>
						</div>	
						<div class="col-lg-6">
							<input style="font-weight: bold;" type="number" class="form-control" id="cont_no" name="cont_no" value="<?php echo $row['cont_no']; ?>" />
						</div>	
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">BASE TERMINAL:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">STATUS:</label>
						</div>
						<div class="col-lg-6">
							<select style="font-weight: bold;" class="form-control" id="ter_id" name="ter_id" placeholder="" value="<?php echo $row['ter_id']; ?>">
								<option style="font-weight: bold;" value="<?php echo $row['ter_id']; ?>"><?php echo $row['ter_descrip']; ?></option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT * FROM ter_details");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
                                        {
                                ?>
                                <option value="<?php echo $data['ter_id']; ?>"> <?php echo $data['descrip']; ?> </option>
                                <?php
                                        }
                                    } /*if condition*/
                                ?>
                            </select>
						</div>
						<div class="col-lg-6">
							<select style="font-weight: bold;" class="form-control" id="stat_id" name="stat_id" placeholder="" value="<?php echo $row['stat_id']; ?>">
								<option style="font-weight: bold;" value="<?php echo $row['stat_id']; ?>"><?php echo $row['stat_descrip']; ?></option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT * FROM user_stat");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
                                        {
                                ?>
                                <option value="<?php echo $data['stat_id']; ?>"> <?php echo $data['descrip']; ?> </option>
                                <?php
                                        }
                                    } /*if condition*/
                                ?>
                            </select>
						</div>
					</div>
						<div style="height:10px;"></div>
							<div class="row">
								<div class="col-lg-4">
									<label class="control-label" style="position:relative; top:7px;">PASSWORD:</label>
								</div>
								<div>
								<div class="col-lg-8">
									<input type="password" class="form-control" id="pass" name="pass" value=""/>
								</div>
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


<!-- Edit dispatcher-->
<div class="modal fade" id="edit_user<?php echo $row['dispt_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h2 class="modal-title" id="myModalLabel">Edit Dispatcher Details</h2></center>
                </div>
                <div class="modal-body">
				
				<div class="container-fluid" style="text-align:left">
				<form method="POST" action="update_dispt.php?dispt_id=<?php echo $row['dispt_id']; ?>">
					<div class="row">
					<div class="col-lg-4">
						</div>
						<div class="col-lg-8">
							<input type="hidden"id="dispt_id" name="dispt_id" class="form-control" value="<?php echo $row['dispt_id']; ?>">
							<input type="hidden"id="user_id" name="user_id" class="form-control" value="<?php echo $row['user_id']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
					<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">FIRSTNAME:</label>
						</div>
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">LASTNAME:</label>
						</div>
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">SUFFIX:</label>
						</div>
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">M.I:</label>
						</div>

						<div class="col-lg-4">
							<input style="font-weight: bold;" type="text" class="form-control" id="f_name" name="f_name" value="<?php echo $row['f_name']; ?>" required />
						</div>
						<div class="col-lg-4">
							<input style="font-weight: bold;" type="text" class="form-control" id="l_name" name="l_name" value="<?php echo $row['l_name']; ?>" required />
						</div>
						<div class="col-lg-2">
							<select  style="font-weight: bold;" class="form-control" id ="sufx" name="sufx" palceholder="" >
								<option style="font-weight: bold;" value="<?php echo $row['sufx']; ?>"><?php echo $row['sufx']; ?></option> 
								<option  value="Sr."> Sr. </option>
								<option  value="Jr."> Jr. </option>
								<option  value="I"> I </option>
								<option  value="II"> II </option>
								<option  value="III"> III </option>
								<option  value="IV"> IV </option>
							</select>
						</div>
						<div class="col-lg-2">
							<input style="font-weight: bold;" type="text" class="form-control" id="m_intl" name="m_intl" value="<?php echo $row['m_intl']; ?>" required />
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">USERNAME:</label>
						</div>
						<div class="col-lg-8">
							<input style="font-weight: bold;" type="text" class="form-control" id="u_name" name="u_name" value="<?php echo $row['u_name']; ?>"/>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">SEX:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">CONTACT NO.:</label>
						</div>
						<div class="col-lg-6">
						<select  style="font-weight: bold;" class="form-control" id="sex" name="sex" palceholder="" required>
							<option  style="font-weight: bold;"value="<?php echo $row['sex']; ?>"><?php echo $row['sex']; ?></option> 
							<option  value="Male"> MALE </option>
                            <option  value="Female"> FEMALE </option>
						</select>
						</div>	
						<div class="col-lg-6">
							<input style="font-weight: bold;" type="number" class="form-control" id="cont_no" name="cont_no" value="<?php echo $row['cont_no']; ?>" />
						</div>	
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">BASE TERMINAL:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">STATUS:</label>
						</div>
						<div class="col-lg-6">
							<select style="font-weight: bold;" class="form-control" id="ter_id" name="ter_id" placeholder="" value="<?php echo $row['ter_id']; ?>">
								<option style="font-weight: bold;" value="<?php echo $row['ter_id']; ?>"><?php echo $row['ter_descrip']; ?></option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT * FROM ter_details");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
                                        {
                                ?>
                                <option value="<?php echo $data['ter_id']; ?>"> <?php echo $data['descrip']; ?> </option>
                                <?php
                                        }
                                    } /*if condition*/
                                ?>
                            </select>
						</div>
						<div class="col-lg-6">
							<select style="font-weight: bold;" class="form-control" id="stat_id" name="stat_id" placeholder="" value="<?php echo $row['stat_id']; ?>">
								<option style="font-weight: bold;" value="<?php echo $row['stat_id']; ?>"><?php echo $row['stat_descrip']; ?></option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT * FROM user_stat");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
                                        {
                                ?>
                                <option value="<?php echo $data['stat_id']; ?>"> <?php echo $data['descrip']; ?> </option>
                                <?php
                                        }
                                    } /*if condition*/
                                ?>
                            </select>
						</div>
					</div>
						<div style="height:10px;"></div>
							<div class="row">
								<div class="col-lg-4">
									<label class="control-label" style="position:relative; top:7px;">PASSWORD:</label>
								</div>
								<div>
								<div class="col-lg-8">
									<input type="password" class="form-control" id="pass" name="pass" value=""/>
								</div>
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

<!-- Edit driver-->
<div class="modal fade" id="edit_user<?php echo $row['dri_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h2 class="modal-title" id="myModalLabel">Edit Driver Details</h2></center>
                </div>
                <div class="modal-body">
				
				<div class="container-fluid" style="text-align:left">
				<form method="POST" action="update_dri.php?dri_id=<?php echo $row['dri_id']; ?>">
					<div class="row">
					<div class="col-lg-4">
						</div>
						<div class="col-lg-8">
							<input type="hidden"id="dri_id" name="dri_id" class="form-control" value="<?php echo $row['dri_id']; ?>">
							<input type="hidden"id="user_id" name="user_id" class="form-control" value="<?php echo $row['user_id']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
					<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">FIRSTNAME:</label>
						</div>
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">LASTNAME:</label>
						</div>
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">SUFFIX:</label>
						</div>
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">M.I:</label>
						</div>

						<div class="col-lg-4">
							<input style="font-weight: bold;" type="text" class="form-control" id="f_name" name="f_name" value="<?php echo $row['f_name']; ?>" required />
						</div>
						<div class="col-lg-4">
							<input style="font-weight: bold;" type="text" class="form-control" id="l_name" name="l_name" value="<?php echo $row['l_name']; ?>" required />
						</div>
						<div class="col-lg-2">
							<select  style="font-weight: bold;" class="form-control" id ="sufx" name="sufx" palceholder="" >
								<option style="font-weight: bold;" value="<?php echo $row['sufx']; ?>"><?php echo $row['sufx']; ?></option> 
								<option  value="Sr."> Sr. </option>
								<option  value="Jr."> Jr. </option>
								<option  value="I"> I </option>
								<option  value="II"> II </option>
								<option  value="III"> III </option>
								<option  value="IV"> IV </option>
							</select>
						</div>
						<div class="col-lg-2">
							<input style="font-weight: bold;" type="text" class="form-control" id="m_intl" name="m_intl" value="<?php echo $row['m_intl']; ?>" required />
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">USERNAME:</label>
						</div>
						<div class="col-lg-8">
							<input style="font-weight: bold;" type="text" class="form-control" id="u_name" name="u_name" value="<?php echo $row['u_name']; ?>"/>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">SEX:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">CONTACT NO.:</label>
						</div>
						<div class="col-lg-6">
						<select  style="font-weight: bold;" class="form-control" id="sex" name="sex" palceholder="" required>
							<option  style="font-weight: bold;"value="<?php echo $row['sex']; ?>"><?php echo $row['sex']; ?></option> 
							<option  value="Male"> MALE </option>
                            <option  value="Female"> FEMALE </option>
						</select>
						</div>	
						<div class="col-lg-6">
							<input style="font-weight: bold;" type="number" class="form-control" id="cont_no" name="cont_no" value="<?php echo $row['cont_no']; ?>" />
						</div>	
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">EMPLOYMENT DATE:</label>
						</div>
						<div class="col-lg-8">
							<input style="font-weight: bold;" type="date" class="form-control" id="emp_date" name="emp_date" value="<?php echo $row['emp_date']; ?>" />
						</div>	
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-8">
							<label class="control-label" style="position:relative; top:7px;">DRIVERS LICENCE #:</label>
						</div>
                        <div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">LIENCE EXP. DATE:</label>
						</div>
						<div class="col-lg-8">
							<input style="font-weight: bold;" type="text" class="form-control" id="licen_no" name="licen_no" value="<?php echo $row['licen_no']; ?>" />
						</div>
                        <div class="col-lg-4">
							<input style="font-weight: bold;" type="text" class="form-control" id="licen_exp" name="licen_exp" value="<?php echo $row['licen_exp']; ?>" />
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">BASE TERMINAL:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">STATUS:</label>
						</div>
						<div class="col-lg-6">
							<select style="font-weight: bold;" class="form-control" id="ter_id" name="ter_id" placeholder="" value="<?php echo $row['ter_id']; ?>">
								<option style="font-weight: bold;" value="<?php echo $row['ter_id']; ?>"><?php echo $row['ter_descrip']; ?></option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT * FROM ter_details");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
                                        {
                                ?>
                                <option value="<?php echo $data['ter_id']; ?>"> <?php echo $data['descrip']; ?> </option>
                                <?php
                                        }
                                    } /*if condition*/
                                ?>
                            </select>
						</div>
						<div class="col-lg-6">
							<select style="font-weight: bold;" class="form-control" id="stat_id" name="stat_id" placeholder="" value="<?php echo $row['stat_id']; ?>">
								<option style="font-weight: bold;" value="<?php echo $row['stat_id']; ?>"><?php echo $row['stat_descrip']; ?></option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT * FROM user_stat");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
                                        {
                                ?>
                                <option value="<?php echo $data['stat_id']; ?>"> <?php echo $data['descrip']; ?> </option>
                                <?php
                                        }
                                    } /*if condition*/
                                ?>
                            </select>
						</div>
					</div>
						<div style="height:10px;"></div>
							<div class="row">
								<div class="col-lg-4">
									<label class="control-label" style="position:relative; top:7px;">PASSWORD:</label>
								</div>
								<div>
								<div class="col-lg-8">
									<input type="password" class="form-control" id="pass" name="pass" value=""/>
								</div>
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


<!-- Edit conductor-->
<div class="modal fade" id="edit_user<?php echo $row['con_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h2 class="modal-title" id="myModalLabel">Edit Conductor Details</h2></center>
                </div>
                <div class="modal-body">
				
				<div class="container-fluid" style="text-align:left">
				<form method="POST" action="update_con.php?con_id=<?php echo $row['con_id']; ?>">
					<div class="row">
					<div class="col-lg-4">
						</div>
						<div class="col-lg-8">
							<input type="hidden"id="con_id" name="con_id" class="form-control" value="<?php echo $row['con_id']; ?>">
							<input type="hidden"id="user_id" name="user_id" class="form-control" value="<?php echo $row['user_id']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
					<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">FIRSTNAME:</label>
						</div>
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">LASTNAME:</label>
						</div>
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">SUFFIX:</label>
						</div>
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">M.I:</label>
						</div>

						<div class="col-lg-4">
							<input style="font-weight: bold;" type="text" class="form-control" id="f_name" name="f_name" value="<?php echo $row['f_name']; ?>" required />
						</div>
						<div class="col-lg-4">
							<input style="font-weight: bold;" type="text" class="form-control" id="l_name" name="l_name" value="<?php echo $row['l_name']; ?>" required />
						</div>
						<div class="col-lg-2">
							<select  style="font-weight: bold;" class="form-control" id ="sufx" name="sufx" palceholder="" >
								<option style="font-weight: bold;" value="<?php echo $row['sufx']; ?>"><?php echo $row['sufx']; ?></option> 
								<option  value="Sr."> Sr. </option>
								<option  value="Jr."> Jr. </option>
								<option  value="I"> I </option>
								<option  value="II"> II </option>
								<option  value="III"> III </option>
								<option  value="IV"> IV </option>
							</select>
						</div>
						<div class="col-lg-2">
							<input style="font-weight: bold;" type="text" class="form-control" id="m_intl" name="m_intl" value="<?php echo $row['m_intl']; ?>" required />
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">USERNAME:</label>
						</div>
						<div class="col-lg-8">
							<input style="font-weight: bold;" type="text" class="form-control" id="u_name" name="u_name" value="<?php echo $row['u_name']; ?>"/>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">SEX:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">CONTACT NO.:</label>
						</div>
						<div class="col-lg-6">
						<select  style="font-weight: bold;" class="form-control" id="sex" name="sex" palceholder="" required>
							<option  style="font-weight: bold;"value="<?php echo $row['sex']; ?>"><?php echo $row['sex']; ?></option> 
							<option  value="Male"> MALE </option>
                            <option  value="Female"> FEMALE </option>
						</select>
						</div>	
						<div class="col-lg-6">
							<input style="font-weight: bold;" type="number" class="form-control" id="cont_no" name="cont_no" value="<?php echo $row['cont_no']; ?>" />
						</div>	
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">EMPLOYMENT DATE:</label>
						</div>
						<div class="col-lg-8">
							<input style="font-weight: bold;" type="date" class="form-control" id="emp_date" name="emp_date" value="<?php echo $row['emp_date']; ?>" />
						</div>	
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">BASE TERMINAL:</label>
						</div>
						<div class="col-lg-6">
							<label class="control-label" style="position:relative; top:7px;">STATUS:</label>
						</div>
						<div class="col-lg-6">
							<select style="font-weight: bold;" class="form-control" id="ter_id" name="ter_id" placeholder="" value="<?php echo $row['ter_id']; ?>">
								<option style="font-weight: bold;" value="<?php echo $row['ter_id']; ?>"><?php echo $row['ter_descrip']; ?></option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT * FROM ter_details");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
                                        {
                                ?>
                                <option value="<?php echo $data['ter_id']; ?>"> <?php echo $data['descrip']; ?> </option>
                                <?php
                                        }
                                    } /*if condition*/
                                ?>
                            </select>
						</div>
						<div class="col-lg-6">
							<select style="font-weight: bold;" class="form-control" id="stat_id" name="stat_id" placeholder="" value="<?php echo $row['stat_id']; ?>">
								<option style="font-weight: bold;" value="<?php echo $row['stat_id']; ?>"><?php echo $row['stat_descrip']; ?></option>
								<?php 
								include('conn.php');
								$sql=mysqli_query($conn,"SELECT * FROM user_stat");
                                $rows = mysqli_num_rows($sql);
                                    if($rows>0)
                                    {
                                        while($data = mysqli_fetch_array($sql))
                                        {
                                ?>
                                <option value="<?php echo $data['stat_id']; ?>"> <?php echo $data['descrip']; ?> </option>
                                <?php
                                        }
                                    } /*if condition*/
                                ?>
                            </select>
						</div>
					</div>
						<div style="height:10px;"></div>
							<div class="row">
								<div class="col-lg-4">
									<label class="control-label" style="position:relative; top:7px;">PASSWORD:</label>
								</div>
								<div>
								<div class="col-lg-8">
									<input type="password" class="form-control" id="pass" name="pass" value=""/>
								</div>
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



<!-- Edit conductor daily stat-->
<div class="modal fade" id="edit_con_daily<?php echo $row['con_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:10em;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h2 class="modal-title" id="myModalLabel">Conductors' Todays Status</h2></center>
                </div>
                <div class="modal-body">
				
				<div class="container-fluid" style="text-align:left">
				<form method="POST" action="update_con_daily.php?con_id=<?php echo $row['con_id']; ?>">
					<div class="row">
					<div class="col-lg-4">
						</div>
						<div class="col-lg-8">
							<input type="hidden"id="con_id" name="con_id" class="form-control" value="<?php echo $row['con_id']; ?>">
							<input type="hidden"id="user_id" name="user_id" class="form-control" value="<?php echo $row['user_id']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
					<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Status:</label>
						</div>
						<div class="col-lg-8">
							<select  style="font-weight: bold;" class="form-control" id="trip_stat_id" name="trip_stat_id" value="<?php echo $row['trip_descrip']; ?>">
								<option  style="font-weight: bold;"value="<?php echo $row['trip_stat_id']; ?>"><?php echo $row['trip_descrip']; ?></option> 
								<option  value="2"> ABSENT</option>
								<option  value="3"> UNAVAILABLE </option>
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


<!-- Edit driver daily stat-->
<div class="modal fade" id="edit_dri_daily<?php echo $row['dri_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:10em;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h2 class="modal-title" id="myModalLabel">Drivers' Todays Status</h2></center>
                </div>
                <div class="modal-body">
				
				<div class="container-fluid" style="text-align:left">
				<form method="POST" action="update_dri_daily.php?dri_id=<?php echo $row['dri_id']; ?>">
					<div class="row">
					<div class="col-lg-4">
						</div>
						<div class="col-lg-8">
							<input type="hidden"id="dri_id" name="dri_id" class="form-control" value="<?php echo $row['dri_id']; ?>">
							<input type="hidden"id="user_id" name="user_id" class="form-control" value="<?php echo $row['user_id']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
					<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Status:</label>
						</div>
						<div class="col-lg-8">
							<select  style="font-weight: bold;" class="form-control" id="trip_stat_id" name="trip_stat_id" value="<?php echo $row['trip_descrip']; ?>">
								<option  style="font-weight: bold;"value="<?php echo $row['trip_stat_id']; ?>"><?php echo $row['trip_descrip']; ?></option> 
								<option  value="2"> ABSENT</option>
								<option  value="3"> UNAVAILABLE </option>
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




