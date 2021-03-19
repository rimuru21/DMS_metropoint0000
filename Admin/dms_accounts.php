<!DOCTYPE html>
<html>
<head>
    <title>Accounts</title>
    <link href="" rel="stylesheet">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/png" href="images/icons/dashboard.ico"/>
	<script src="js/jquery.crud.min.js"></script>
	<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.crud.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link href="css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
	<script src="js/bootstrap.crud.min.js"></script>
</head>
</head>
<body>
<div class="row">
	<div class="col-md-2">
		<?php include 'nav.php';?>
    </div>
</div>
<div class="row" style="margin-top:0em;">
    <div class="col-md-11">
    <div class="col-md-3"  >
            <div class="container" style="padding-top:0em;margin-left:35em">
            <div style="height:90%;"></div>
            <div class="" style=" width:30%">
                <div style="height:10px;"></div>
				        <table class="table table-striped table-bordered table-hover"  style="">
                        <thead style="display: block; overflow: hidden; word-break: break-word; background-color:rgba(255,255,255,0.2);">
                                <th style="width:30%;border-bottom:none; font-size:1.5vw"><span class="ion-person" style="padding-right:.5em"></span>TOP ADMIN</th>
                                
						</thead>
						<thead style="display: block; overflow: hidden; word-break: break-word; background-color:rgba(255,255,255,0.3)">
                                <th style="width:15%">NAME</th>
                                <th style="width:10%">Username</th>
                                <th style="width:9%">Terminal</th>
								<th style="width:9% ; text-align:center">ACTION</th>
						</thead>
						<tbody style="display: block;overflow:auto; width: 100%;height: 180px; word-break: break-word; scrollbar-width: none; ">
							    <?php
								include('conn.php');
								
								$query=mysqli_query($conn,"SELECT   a.t_ad_id as t_ad_id, CONCAT(a.l_name,', ',a.f_name,
								' ' ,a.sufx,' ',a.m_intl,'.') as name,  a.u_name as u_name, b.descrip as ter_descrip, c.descrip as stat_descrip
								FROM user_t_ad a, ter_details b, user_stat c
								WHERE a.ter_id = b.ter_id AND a.stat_id = c.stat_id
								ORDER BY t_ad_id desc ");
								while($row=mysqli_fetch_array($query)){
									?>
									<tr>
                                        
                                        <td style="width:15%"><?php echo $row['name']; ?></td>
                                        <td style="width:10%"><?php echo $row['u_name']; ?></td>
                                        <td style="width:9%"><?php echo $row['ter_descrip']; ?></td>
										<td style="width:9%; text-align:center">
                                            <a style="font-size:1vw" href="#view_user<?php echo $row['t_ad_id']; ?>" data-toggle="modal" class="btn "><span class="ion-eye"></span> </a> |
											<a style="font-size:1vw" href="#edit_user<?php echo $row['t_ad_id']; ?>" data-toggle="modal" class="btn "><span class="ion-edit"></span> </a> |
											<a style="font-size:1vw" href="#del_user<?php echo $row['t_ad_id']; ?>" data-toggle="modal" class="btn "><span class="ion-trash-b"></span></a>
											<?php include('action/action_user.php'); ?>
										</td>
									</tr>
									<?php
								}
							
							?>
						</tbody>
				</table>
		</div>
		<?php include('modal/add_stat_modal.php'); ?>
</div>
</div>
</div>
    <div class="col-md-3"  >
    <div class="col-md-3" style="margin-left:50em">
            <div class="container" style="padding-top:0em;">
            <div style="height:90%;"></div>
            <div class="" style=" width:30%;">
                <div style="height:10px;"></div>
				        <table class="table table-striped table-bordered table-hover"  style="">
                        <thead style="display: block; overflow: hidden; word-break: break-word; background-color:rgba(255,255,255,0.2);">
                                <th style="width:30%;border-bottom:none; font-size:1.5vw"><span class="ion-person" style="padding-right:.5em"></span>ADMIN</th>
                                
						</thead>
						<thead style="display: block; overflow: hidden; word-break: break-word; background-color:rgba(255,255,255,0.3)">
                                <th style="width:15%">NAME</th>
                                <th style="width:10%">Username</th>
                                <th style="width:10%">Terminal</th>
								<th style="width:10% ; text-align:center">ACTION</th>
						</thead>
						<tbody style="display: block;overflow:auto; width: 100%;height: 180px; word-break: break-word; scrollbar-width: none; ">
                                <?php
								include('conn.php');
								
								$query=mysqli_query($conn,"SELECT   a.ad_id as ad_id, CONCAT(a.l_name,', ',a.f_name,
								' ' ,a.sufx,' ',a.m_intl,'.') as name,  a.u_name as u_name, b.descrip as descrip
								FROM user_admin a, ter_details b
								WHERE a.ter_id = b.ter_id 
								ORDER BY ad_id desc ");
								while($row=mysqli_fetch_array($query)){
									?>
									<tr>
                                        
                                        <td style="width:15%"><?php echo $row['name']; ?></td>
                                        <td style="width:10%"><?php echo $row['u_name']; ?></td>
                                        <td style="width:9%"><?php echo $row['descrip']; ?></td>
										<td style="width:10%; text-align:center">
                                            <a style="font-size:1vw" href="#view_user<?php echo $row['ad_id']; ?>" data-toggle="modal" class="btn "><span class="ion-eye"></span> </a> |
											<a style="font-size:1vw" href="#edit_user<?php echo $row['ad_id']; ?>" data-toggle="modal" class="btn "><span class="ion-edit"></span> </a> |
											<a style="font-size:1vw" href="#del_user<?php echo $row['ad_id']; ?>" data-toggle="modal" class="btn "><span class="ion-trash-b"></span></a>
											<?php include('button.php'); ?>
										</td>
									</tr>
									<?php
								}
							
							?>
						</tbody>
				</table>
		</div>
		<?php include('modal/add_stat_modal.php'); ?>
</div>
</div>
</div>
    <div class="col-md-3" >
    <div class="col-md-3" style="">
            <div class="container" style="padding-top:0em;margin-left:5em">
            <div style="height:90%;"></div>
            <div class="" style=" width:30%;margin-left:22em">
                <div style="height:10px;"></div>
				        <table class="table table-striped table-bordered table-hover"  style="">
                        <thead style="display: block; overflow: hidden; word-break: break-word; background-color:rgba(255,255,255,0.2);">
                                <th style="width:30%;border-bottom:none; font-size:1.5vw"><span class="ion-person" style="padding-right:.5em"></span>SUPERVISOR</th>
                                
						</thead>
						<thead style="display: block; overflow: hidden; word-break: break-word; background-color:rgba(255,255,255,0.3)">
                                <th style="width:15%">NAME</th>
                                <th style="width:10%">Username</th>
                                <th style="width:10%">Terminal</th>
								<th style="width:10% ; text-align:center">ACTION</th>
						</thead>
						<tbody style="display: block;overflow:auto; width: 100%;height: 180px; word-break: break-word; scrollbar-width: none; ">
                                <?php
								include('conn.php');
								
								$query=mysqli_query($conn,"SELECT   a.sup_id as sup_id, CONCAT(a.l_name,', ',a.f_name,
								' ' ,a.sufx,' ',a.m_intl,'.') as name,  a.u_name as u_name, b.descrip as descrip
								FROM user_sup a, ter_details b
								WHERE a.ter_id = b.ter_id 
								ORDER BY sup_id desc ");
								while($row=mysqli_fetch_array($query)){
									?>
									<tr>
                                        
                                        <td style="width:15%"><?php echo $row['name']; ?></td>
                                        <td style="width:10%"><?php echo $row['u_name']; ?></td>
                                        <td style="width:9%"><?php echo $row['descrip']; ?></td>
										<td style="width:10%; text-align:center">
                                            <a style="font-size:1vw" href="#view_user<?php echo $row['sup_id']; ?>" data-toggle="modal" class="btn "><span class="ion-eye"></span> </a> |
											<a style="font-size:1vw" href="#edit_user<?php echo $row['sup_id']; ?>" data-toggle="modal" class="btn "><span class="ion-edit"></span> </a> |
											<a style="font-size:1vw" href="#del_user<?php echo $row['sup_id']; ?>" data-toggle="modal" class="btn "><span class="ion-trash-b"></span></a>
											<?php include('button.php'); ?>
										</td>
									</tr>
									<?php
								}
							
							?>
						</tbody>
				</table>
		</div>
		<?php include('modal/add_stat_modal.php'); ?>
</div>
</div>
</div>
</div>
</div>
                            </div>
<!-- SECOND ROW  -->
<div class="row" style="margin-top:17em">
    <div class="col-md-11">
    <div class="col-md-3"   style="margin-top:.7em">
    <div class="col-md-3" style="">
            <div class="container" style="padding-top:0em;left:5em">
            <div style="height:90%;"></div>
            <div class="" style=" width:30%; position: fixed;margin-left:8em">
                <div style="height:10px;"></div>
				        <table class="table table-striped table-bordered table-hover"  style="">
                        <thead style="display: block; overflow: hidden; word-break: break-word; background-color:rgba(255,255,255,0.2);">
                                <th style="width:30%;border-bottom:none; font-size:1.5vw"><span class="ion-person" style="padding-right:.5em"></span>MANAGER</th>
                                
						</thead>
						<thead style="display: block; overflow: hidden; word-break: break-word; background-color:rgba(255,255,255,0.3)">
                                <th style="width:15%">NAME</th>
                                <th style="width:10%">Username</th>
                                <th style="width:10%">Terminal</th>
								<th style="width:10% ; text-align:center">ACTION</th>
						</thead>
						<tbody style="display: block;overflow:auto; width: 100%;height: 180px; word-break: break-word; scrollbar-width: none; ">
                                <?php
								include('conn.php');
								
								$query=mysqli_query($conn,"SELECT   a.man_id as man_id, CONCAT(a.l_name,', ',a.f_name,
								' ' ,a.sufx,' ',a.m_intl,'.') as name,  a.u_name as u_name, b.descrip as descrip
								FROM user_man a, ter_details b
								WHERE a.ter_id = b.ter_id 
								ORDER BY man_id desc ");
								while($row=mysqli_fetch_array($query)){
									?>
									<tr>
                                        
                                        <td style="width:15%"><?php echo $row['name']; ?></td>
                                        <td style="width:10%"><?php echo $row['u_name']; ?></td>
                                        <td style="width:9%"><?php echo $row['descrip']; ?></td>
										<td style="width:10%; text-align:center">
                                            <a style="font-size:1vw" href="#view_user<?php echo $row['man_id']; ?>" data-toggle="modal" class="btn "><span class="ion-eye"></span> </a> |
											<a style="font-size:1vw" href="#edit_user<?php echo $row['man_id']; ?>" data-toggle="modal" class="btn "><span class="ion-edit"></span> </a> |
											<a style="font-size:1vw" href="#del_user<?php echo $row['man_id']; ?>" data-toggle="modal" class="btn "><span class="ion-trash-b"></span></a>
											<?php include('button.php'); ?>
										</td>
									</tr>
									<?php
								}
							
							?>
						</tbody>
				</table>
		</div>
		<?php include('modal/add_stat_modal.php'); ?>
</div>
</div>
</div>
    <div class="col-md-3" style="margin-top:.7em" >
    <div class="col-md-3" style="">
            <div class="container" style="padding-top:0em;left:5em">
            <div style="height:90%;"></div>
            <div class="" style=" width:30%; position: fixed;margin-left:15em">
                <div style="height:10px;"></div>
				        <table class="table table-striped table-bordered table-hover"  style="">
                        <thead style="display: block; overflow: hidden; word-break: break-word; background-color:rgba(255,255,255,0.2);">
                                <th style="width:30%;border-bottom:none; font-size:1.5vw"><span class="ion-person" style="padding-right:.5em"></span>OPERATOR</th>
                                
						</thead>
						<thead style="display: block; overflow: hidden; word-break: break-word; background-color:rgba(255,255,255,0.3)">
                                <th style="width:15%">NAME</th>
                                <th style="width:10%">Username</th>
                                <th style="width:10%">Terminal</th>
								<th style="width:10% ; text-align:center">ACTION</th>
						</thead>
						<tbody style="display: block;overflow:auto; width: 100%;height: 180px; word-break: break-word; scrollbar-width: none; ">
                                <?php
								include('conn.php');
								
								$query=mysqli_query($conn,"SELECT   a.opt_id as opt_id, CONCAT(a.l_name,', ',a.f_name,
								' ' ,a.sufx,' ',a.m_intl,'.') as name,  a.u_name as u_name, b.descrip as descrip
								FROM user_opt a, ter_details b
								WHERE a.ter_id = b.ter_id 
								ORDER BY opt_id desc ");
								while($row=mysqli_fetch_array($query)){
									?>
									<tr>
                                        
                                        <td style="width:15%"><?php echo $row['name']; ?></td>
                                        <td style="width:10%"><?php echo $row['u_name']; ?></td>
                                        <td style="width:9%"><?php echo $row['descrip']; ?></td>
										<td style="width:10%; text-align:center">
                                            <a style="font-size:1vw" href="#view_user<?php echo $row['opt_id']; ?>" data-toggle="modal" class="btn "><span class="ion-eye"></span> </a> |
											<a style="font-size:1vw" href="#edit_user<?php echo $row['opt_id']; ?>" data-toggle="modal" class="btn "><span class="ion-edit"></span> </a> |
											<a style="font-size:1vw" href="#del_user<?php echo $row['opt_id']; ?>" data-toggle="modal" class="btn "><span class="ion-trash-b"></span></a>
											<?php include('button.php'); ?>
										</td>
									</tr>
									<?php
								}
							
							?>
						</tbody>
				</table>
		</div>
		<?php include('modal/add_stat_modal.php'); ?>
</div>
</div>
</div>
    <div class="col-md-3" style="margin-top:.7em" >
    <div class="col-md-3" >
            <div class="container" style="padding-top:0em;left:5em">
            <div style="height:90%;"></div>
            <div class="" style=" width:30%; position: fixed;margin-left:22em">
                <div style="height:10px;"></div>
				        <table class="table table-striped table-bordered table-hover"  style="">
                        <thead style="display: block; overflow: hidden; word-break: break-word; background-color:rgba(255,255,255,0.2);">
                                <th style="width:30%;border-bottom:none; font-size:1.5vw"><span class="ion-person" style="padding-right:.5em"></span>DISPATCHER</th>
                                
						</thead>
						<thead style="display: block; overflow: hidden; word-break: break-word; background-color:rgba(255,255,255,0.3)">
                                <th style="width:15%">NAME</th>
                                <th style="width:10%">Username</th>
                                <th style="width:10%">Terminal</th>
								<th style="width:10% ; text-align:center">ACTION</th>
						</thead>
						<tbody style="display: block;overflow:auto; width: 100%;height: 180px; word-break: break-word; scrollbar-width: none; ">
                                <?php
								include('conn.php');
								
								$query=mysqli_query($conn,"SELECT   a.dispt_id as dispt_id, CONCAT(a.l_name,', ',a.f_name,
								' ' ,a.sufx,' ',a.m_intl,'.') as name,  a.u_name as u_name, b.descrip as descrip
								FROM user_dispt a, ter_details b
								WHERE a.ter_id = b.ter_id 
								ORDER BY dispt_id desc ");
								while($row=mysqli_fetch_array($query)){
									?>
									<tr>
                                        
                                        <td style="width:15%"><?php echo $row['name']; ?></td>
                                        <td style="width:10%"><?php echo $row['u_name']; ?></td>
                                        <td style="width:9%"><?php echo $row['descrip']; ?></td>
										<td style="width:10%; text-align:center">
                                            <a style="font-size:1vw" href="#view_user<?php echo $row['dispt_id']; ?>" data-toggle="modal" class="btn "><span class="ion-eye"></span> </a> |
											<a style="font-size:1vw" href="#edit_user<?php echo $row['dispt_id']; ?>" data-toggle="modal" class="btn "><span class="ion-edit"></span> </a> |
											<a style="font-size:1vw" href="#del_user<?php echo $row['dispt_id']; ?>" data-toggle="modal" class="btn "><span class="ion-trash-b"></span></a>
											<?php include('button.php'); ?>
										</td>
									</tr>
									<?php
								}
							
							?>
						</tbody>
				</table>
		</div>
        <?php include('modal/add_stat_modal.php'); ?>
</div>
</div>
</div>
</div>
</div>

<!-- THIRD ROW -->

<div class="row" style="margin-top:18em">
    <div class="col-md-11">
    <div class="col-md-6" >
    <div class="col-md-6" style="">
            <div class="container" style="padding-top:0em;left:5em">
            <div style="height:90%;"></div>
            <div class="" style=" width:45.5%; position: fixed;margin-left:8em">
                <div style="height:10px;"></div>
				        <table class="table table-striped table-bordered table-hover"  style="">
                        <thead style="display: block; overflow: hidden; word-break: break-word; background-color:rgba(255,255,255,0.2);">
                                <th style="width:30%;border-bottom:none; font-size:1.5vw"><span class="ion-person" style="padding-right:.5em"></span>DRIVER</th>
                                
						</thead>
						<thead style="display: block; overflow: hidden; word-break: break-word; background-color:rgba(255,255,255,0.3)">
                                <th style="width:15%">NAME</th>
                                <th style="width:10%">Username</th>
                                <th style="width:10%">Terminal</th>
                                <th style="width:10%">Status</th>
								<th style="width:11% ; text-align:center">ACTION</th>
						</thead>
						<tbody style="display: block;overflow:auto; width: 100%;height: 180px; word-break: break-word; scrollbar-width: none; ">
                                <?php
								include('conn.php');
								$query=mysqli_query($conn,"SELECT   a.dri_id as dri_id, CONCAT(a.l_name,', ',a.f_name,
								' ' ,a.sufx,' ',a.m_intl,'.') as name,  a.u_name as u_name, b.descrip as ter_descrip, c.descrip as stat_descrip
								FROM user_dri a, ter_details b, user_stat c
								WHERE a.ter_id = b.ter_id AND a.stat_id = c.stat_id
								ORDER BY dri_id desc ");
								while($row=mysqli_fetch_array($query)){
									?>
									<tr>
                                        <td style="width:15%"><?php echo $row['name']; ?></td>
                                        <td style="width:10%"><?php echo $row['u_name']; ?></td>
                                        <td style="width:10%"><?php echo $row['ter_descrip']; ?></td>
                                        <td style="width:10%"><?php echo $row['stat_descrip']; ?></td>
										<td style="width:9.5%; text-align:center">
                                            <a style="font-size:1vw" href="#view_user<?php echo $row['dri_id']; ?>" data-toggle="modal" class="btn "><span class="ion-eye"></span> </a> |
											<a style="font-size:1vw" href="#edit_user<?php echo $row['dri_id']; ?>" data-toggle="modal" class="btn "><span class="ion-edit"></span> </a> |
											<a style="font-size:1vw" href="#del_user<?php echo $row['dri_id']; ?>" data-toggle="modal" class="btn "><span class="ion-trash-b"></span></a>
											<?php include('button.php'); ?>
										</td>
									</tr>
									<?php
								}
							
							?>
						</tbody>
				</table>
		</div>
		<?php include('modal/add_stat_modal.php'); ?>
</div>
</div>
</div>

    <div class="col-md-6"  >
    <div class="col-md-6" style="">
            <div class="container" style="padding-top:0em;left:5em">
            <div style="height:90%;"></div>
            <div class="" style=" width:45.5%; position: fixed;margin-left:7em">
                <div style="height:10px;"></div>
				        <table class="table table-striped table-bordered table-hover"  style="">
                        <thead style="display: block; overflow: hidden; word-break: break-word; background-color:rgba(255,255,255,0.2);">
                                <th style="width:30%;border-bottom:none; font-size:1.5vw"><span class="ion-person" style="padding-right:.5em"></span>CONDUCTOR</th>
                                
						</thead>
						<thead style="display: block; overflow: hidden; word-break: break-word; background-color:rgba(255,255,255,0.3)">
                                <th style="width:15%">NAME</th>
                                <th style="width:10%">Username</th>
                                <th style="width:10%">Terminal</th>
                                <th style="width:10%">Status</th>
								<th style="width:11% ; text-align:center">ACTION</th>
						</thead>
						<tbody style="display: block;overflow:auto; width: 100%;height: 180px; word-break: break-word; scrollbar-width: none; ">
                        <?php
								include('conn.php');
								
								$query=mysqli_query($conn,"SELECT   a.con_id as con_id, CONCAT(a.l_name,', ',a.f_name,
								' ' ,a.sufx,' ',a.m_intl,'.') as name,  a.u_name as u_name, b.descrip as ter_descrip, c.descrip as stat_descrip
								FROM user_con a, ter_details b, user_stat c
								WHERE a.ter_id = b.ter_id AND a.stat_id = c.stat_id
								ORDER BY con_id desc ");
								while($row=mysqli_fetch_array($query)){
									?>
									<tr>
                                        
                                        <td style="width:15%"><?php echo $row['name']; ?></td>
                                        <td style="width:10%"><?php echo $row['u_name']; ?></td>
                                        <td style="width:10%"><?php echo $row['ter_descrip']; ?></td>
                                        <td style="width:10%"><?php echo $row['stat_descrip']; ?></td>
										<td style="width:9.5%; text-align:center">
                                            <a style="font-size:1vw" href="#view_user<?php echo $row['con_id']; ?>" data-toggle="modal" class="btn "><span class="ion-eye"></span> </a> |
											<a style="font-size:1vw" href="#edit_user<?php echo $row['con_id']; ?>" data-toggle="modal" class="btn "><span class="ion-edit"></span> </a> |
											<a style="font-size:1vw" href="#del_user<?php echo $row['con_id']; ?>" data-toggle="modal" class="btn "><span class="ion-trash-b"></span></a>
											<?php include('button.php'); ?>
										</td>
									</tr>
									<?php
								}
							
							?>
						</tbody>
				</table>
		</div>
        <?php include('modal/add_stat_modal.php'); ?>
</div>
</div>
</div>
</div>
</div>





</body>
</html>