<!-- add top admin -->
<div class="modal fade" id="addnew_t_ad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Top Admin</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew_t_ad.php">
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
							<input type="text" class="form-control" id="f_name" name="f_name" required />
						</div>
						<div class="col-lg-4">
							<input type="text" class="form-control" id="l_name" name="l_name" required />
						</div>
						<div class="col-lg-2">
							<select class="form-control" id ="sufx" name="sufx" palceholder="" >
								<option value=""></option> 
								<option  value="Sr."> Sr. </option>
								<option  value="Jr."> Jr. </option>
								<option  value="I"> I </option>
								<option  value="II"> II </option>
								<option  value="III"> III </option>
								<option  value="IV"> IV </option>
							</select>
						</div>
						<div class="col-lg-2">
							<input type="text" class="form-control" id="m_intl" name="m_intl">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">USERNAME:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="u_name" name="u_name" required />
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
                        <select class="form-control" id="sex" name="sex" palceholder="" required>
							<option value="">---select gender---</option> 
							<option  value="Male"> MALE </option>
                            <option  value="Female"> FEMALE </option>
						</select>
						</div>
						<div class="col-lg-6">
							<input type="number" class="form-control" id="cont_no" name="cont_no" required />
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
                        <select class="form-control" id="ter_id" name="ter_id" palceholder="" required>
							<option value="">---select terminal---</option> 
							<?php 
							$sql = "SELECT * FROM ter_details";
							$query =  mysqli_query($conn, $sql);
							$rows = mysqli_num_rows($query);
								if($rows>0)
								{
									while($data = mysqli_fetch_array($query))
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
                        <select class="form-control" id="stat_id" name="stat_id" palceholder="" required>
							<option value="">---select status---</option> 
							<?php 
							$sql = "SELECT * FROM user_stat";
							$query =  mysqli_query($conn, $sql);
							$rows = mysqli_num_rows($query);
								if($rows>0)
								{
									while($data = mysqli_fetch_array($query))
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
						<div class="col-lg-8">
							<input type="password" class="form-control" id="pass" name="pass" required />
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

<!-- add admin -->
<div class="modal fade" id="addnew_ad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Admin</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew_admin.php">
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
							<input type="text" class="form-control" id="f_name" name="f_name" required />
						</div>
						<div class="col-lg-4">
							<input type="text" class="form-control" id="l_name" name="l_name" required />
						</div>
						<div class="col-lg-2">
							<select class="form-control" id ="sufx" name="sufx" palceholder="" >
								<option value=""></option> 
								<option  value="Sr."> Sr. </option>
								<option  value="Jr."> Jr. </option>
								<option  value="I"> I </option>
								<option  value="II"> II </option>
								<option  value="III"> III </option>
								<option  value="IV"> IV </option>
							</select>
						</div>
						<div class="col-lg-2">
							<input type="text" class="form-control" id="m_intl" name="m_intl">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">USERNAME:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="u_name" name="u_name" required />
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
                        <select class="form-control" id="sex" name="sex" palceholder="" required>
							<option value="">---select gender---</option> 
							<option  value="Male"> MALE </option>
                            <option  value="Female"> FEMALE </option>
						</select>
						</div>
						<div class="col-lg-6">
							<input type="number" class="form-control" id="cont_no" name="cont_no" required />
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
                        <select class="form-control" id="ter_id" name="ter_id" palceholder="" required>
							<option value="">---select terminal---</option> 
							<?php 
							$sql = "SELECT * FROM ter_details";
							$query =  mysqli_query($conn, $sql);
							$rows = mysqli_num_rows($query);
								if($rows>0)
								{
									while($data = mysqli_fetch_array($query))
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
                        <select class="form-control" id="stat_id" name="stat_id" palceholder="" required>
							<option value="">---select status---</option> 
							<?php 
							$sql = "SELECT * FROM user_stat";
							$query =  mysqli_query($conn, $sql);
							$rows = mysqli_num_rows($query);
								if($rows>0)
								{
									while($data = mysqli_fetch_array($query))
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
						<div class="col-lg-8">
							<input type="password" class="form-control" id="pass" name="pass" required />
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

<!-- add admin -->
<!-- add supervisor -->
<div class="modal fade" id="addnew_super" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Supervisor</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew_sup.php">
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
							<input type="text" class="form-control" id="f_name" name="f_name" required />
						</div>
						<div class="col-lg-4">
							<input type="text" class="form-control" id="l_name" name="l_name" required />
						</div>
						<div class="col-lg-2">
							<select class="form-control" id ="sufx" name="sufx" palceholder="" >
								<option value=""></option> 
								<option  value="Sr."> Sr. </option>
								<option  value="Jr."> Jr. </option>
								<option  value="I"> I </option>
								<option  value="II"> II </option>
								<option  value="III"> III </option>
								<option  value="IV"> IV </option>
							</select>
						</div>
						<div class="col-lg-2">
							<input type="text" class="form-control" id="m_intl" name="m_intl">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">USERNAME:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="u_name" name="u_name" required />
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
                        <select class="form-control" id="sex" name="sex" palceholder="" required>
							<option value="">---select terminal---</option> 
							<option value="Male"> MALE </option>
                            <option value="Female"> FEMALE </option>
						</select>
						</div>
						<div class="col-lg-6">
							<input type="number" class="form-control" id="cont_no" name="cont_no" required />
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
                        <select class="form-control" id="ter_id" name="ter_id" palceholder="" required>
							<option value="">---select terminal---</option> 
							<?php 
							$sql = "SELECT * FROM ter_details";
							$query =  mysqli_query($conn, $sql);
							$rows = mysqli_num_rows($query);
								if($rows>0)
								{
									while($data = mysqli_fetch_array($query))
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
                        <select class="form-control" id="stat_id" name="stat_id" palceholder="" required>
							<option value="">---select status---</option> 
							<?php 
							$sql = "SELECT * FROM user_stat";
							$query =  mysqli_query($conn, $sql);
							$rows = mysqli_num_rows($query);
								if($rows>0)
								{
									while($data = mysqli_fetch_array($query))
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
						<div class="col-lg-8">
							<input type="password" class="form-control" id="pass" name="pass" required />
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
<!-- add supervisor -->
<!-- add manager -->
<div class="modal fade" id="addnew_man" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Manager</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew_man.php">
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
							<input type="text" class="form-control" id="f_name" name="f_name" required />
						</div>
						<div class="col-lg-4">
							<input type="text" class="form-control" id="l_name" name="l_name" required />
						</div>
						<div class="col-lg-2">
							<select class="form-control" id ="sufx" name="sufx" palceholder="" >
								<option value=""></option> 
								<option  value="Sr."> Sr. </option>
								<option  value="Jr."> Jr. </option>
								<option  value="I"> I </option>
								<option  value="II"> II </option>
								<option  value="III"> III </option>
								<option  value="IV"> IV </option>
							</select>
						</div>
						<div class="col-lg-2">
							<input type="text" class="form-control" id="m_intl" name="m_intl">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">USERNAME:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="u_name" name="u_name" required />
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
                        <select class="form-control" id="sex" name="sex" palceholder="" required>
							<option value="">---select terminal---</option> 
							<option value="Male"> MALE </option>
                            <option value="Female"> FEMALE </option>
						</select>
						</div>
						<div class="col-lg-6">
							<input type="number" class="form-control" id="cont_no" name="cont_no" required />
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
                        <select class="form-control" id="ter_id" name="ter_id" palceholder="" required>
							<option value="">---select terminal---</option> 
							<?php 
							$sql = "SELECT * FROM ter_details";
							$query =  mysqli_query($conn, $sql);
							$rows = mysqli_num_rows($query);
								if($rows>0)
								{
									while($data = mysqli_fetch_array($query))
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
                        <select class="form-control" id="stat_id" name="stat_id" palceholder="" required>
							<option value="">---select status---</option> 
							<?php 
							$sql = "SELECT * FROM user_stat";
							$query =  mysqli_query($conn, $sql);
							$rows = mysqli_num_rows($query);
								if($rows>0)
								{
									while($data = mysqli_fetch_array($query))
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
						<div class="col-lg-8">
							<input type="password" class="form-control" id="pass" name="pass" required />
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
<!-- add manager -->
<!-- add operator -->
<div class="modal fade" id="addnew_opertr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Operator</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew_opt.php">
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
							<input type="text" class="form-control" id="f_name" name="f_name" required />
						</div>
						<div class="col-lg-4">
							<input type="text" class="form-control" id="l_name" name="l_name" required />
						</div>
						<div class="col-lg-2">
							<select class="form-control" id ="sufx" name="sufx" palceholder="" >
								<option value=""></option> 
								<option  value="Sr."> Sr. </option>
								<option  value="Jr."> Jr. </option>
								<option  value="I"> I </option>
								<option  value="II"> II </option>
								<option  value="III"> III </option>
								<option  value="IV"> IV </option>
							</select>
						</div>
						<div class="col-lg-2">
							<input type="text" class="form-control" id="m_intl" name="m_intl">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">USERNAME:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="u_name" name="u_name" required />
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
                        <select class="form-control" id="sex" name="sex" palceholder="" required>
							<option value="">---select terminal---</option> 
							<option value="Male"> MALE </option>
                            <option value="Female"> FEMALE </option>
						</select>
						</div>
						<div class="col-lg-6">
							<input type="number" class="form-control" id="cont_no" name="cont_no" required />
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
                        <select class="form-control" id="ter_id" name="ter_id" palceholder="" required>
							<option value="">---select terminal---</option> 
							<?php 
							$sql = "SELECT * FROM ter_details";
							$query =  mysqli_query($conn, $sql);
							$rows = mysqli_num_rows($query);
								if($rows>0)
								{
									while($data = mysqli_fetch_array($query))
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
                        <select class="form-control" id="stat_id" name="stat_id" palceholder="" required>
							<option value="">---select status---</option> 
							<?php 
							$sql = "SELECT * FROM user_stat";
							$query =  mysqli_query($conn, $sql);
							$rows = mysqli_num_rows($query);
								if($rows>0)
								{
									while($data = mysqli_fetch_array($query))
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
						<div class="col-lg-8">
							<input type="password" class="form-control" id="pass" name="pass" required />
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
<!-- add operator -->
<!-- add dispatcher -->
<div class="modal fade" id="addnew_dispatch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Dispatcher</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew_dispatch.php">
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
							<input type="text" class="form-control" id="f_name" name="f_name" required />
						</div>
						<div class="col-lg-4">
							<input type="text" class="form-control" id="l_name" name="l_name" required />
						</div>
						<div class="col-lg-2">
							<select class="form-control" id ="sufx" name="sufx" palceholder="" >
								<option value=""></option> 
								<option  value="Sr."> Sr. </option>
								<option  value="Jr."> Jr. </option>
								<option  value="I"> I </option>
								<option  value="II"> II </option>
								<option  value="III"> III </option>
								<option  value="IV"> IV </option>
							</select>
						</div>
						<div class="col-lg-2">
							<input type="text" class="form-control" id="m_intl" name="m_intl">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">USERNAME:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="u_name" name="u_name" required />
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
                        <select class="form-control" id="sex" name="sex" palceholder="" required>
							<option value="">---select terminal---</option> 
							<option value="Male"> MALE </option>
                            <option value="Female"> FEMALE </option>
						</select>
						</div>
						<div class="col-lg-6">
							<input type="number" class="form-control" id="cont_no" name="cont_no" required />
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
                        <select class="form-control" id="ter_id" name="ter_id" palceholder="" required>
							<option value="">---select terminal---</option> 
							<?php 
							$sql = "SELECT * FROM ter_details";
							$query =  mysqli_query($conn, $sql);
							$rows = mysqli_num_rows($query);
								if($rows>0)
								{
									while($data = mysqli_fetch_array($query))
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
                        <select class="form-control" id="stat_id" name="stat_id" palceholder="" required>
							<option value="">---select status---</option> 
							<?php 
							$sql = "SELECT * FROM user_stat";
							$query =  mysqli_query($conn, $sql);
							$rows = mysqli_num_rows($query);
								if($rows>0)
								{
									while($data = mysqli_fetch_array($query))
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
						<div class="col-lg-8">
							<input type="password" class="form-control" id="pass" name="pass" required />
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
<!-- add dispatcher -->
<!-- add driver -->
<div class="modal fade" id="addnew_dri" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Driver</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew_dri.php">
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
							<input type="text" class="form-control" id="f_name" name="f_name" required />
						</div>
						<div class="col-lg-4">
							<input type="text" class="form-control" id="l_name" name="l_name" required />
						</div>
						<div class="col-lg-2">
							<select class="form-control" id ="sufx" name="sufx" palceholder="" >
								<option value=""></option> 
								<option  value="Sr."> Sr. </option>
								<option  value="Jr."> Jr. </option>
								<option  value="I"> I </option>
								<option  value="II"> II </option>
								<option  value="III"> III </option>
								<option  value="IV"> IV </option>
							</select>
						</div>
						<div class="col-lg-2">
							<input type="text" class="form-control" id="m_intl" name="m_intl">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">USERNAME:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="u_name" name="u_name" required />
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">SEX:</label>
						</div>
						<div class="col-lg-8">
							<label class="control-label" style="position:relative; top:7px;">CONTACT NO.:</label>
						</div>
						<div class="col-lg-4">
                        <select class="form-control" id="sex" name="sex" palceholder="" required>
							<option value="">---select gender---</option> 
							<option value="Male"> MALE </option>
                            <option value="Female"> FEMALE </option>
						</select>
						</div>
						<div class="col-lg-8">
							<input type="number" class="form-control" id="cont_no" name="cont_no" required />
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">EMPLOYMENT DATE:</label>
						</div>
						<div class="col-lg-8">
							<input type="date" class="form-control" id="emp_date" name="emp_date" required />
						</div>
					</div>
                    <div class="row">
						<div class="col-lg-8">
							<label class="control-label" style="position:relative; top:7px;">DRIVERS LICENCE #:</label>
						</div>
                        <div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">LIENCE EXP. DATE:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="licen_no" name="licen_no" required />
						</div>
                        <div class="col-lg-4">
							<input type="date" class="form-control" id="licen_exp" name="licen_exp" required />
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
                        <select class="form-control" id="ter_id" name="ter_id" palceholder="" required>
							<option value="">---select terminal---</option> 
							<?php 
							$sql = "SELECT * FROM ter_details";
							$query =  mysqli_query($conn, $sql);
							$rows = mysqli_num_rows($query);
								if($rows>0)
								{
									while($data = mysqli_fetch_array($query))
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
                        <select class="form-control" id="stat_id" name="stat_id" palceholder="" required>
							<option value="">---select status---</option> 
							<?php 
							$sql = "SELECT * FROM user_stat";
							$query =  mysqli_query($conn, $sql);
							$rows = mysqli_num_rows($query);
								if($rows>0)
								{
									while($data = mysqli_fetch_array($query))
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
						<div class="col-lg-8">
							<input type="password" class="form-control" id="pass" name="pass" required />
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
<!-- add driver -->
<!-- add condoctor -->
<div class="modal fade" id="addnew_con" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Condoctor</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew_con.php">
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
							<input type="text" class="form-control" id="f_name" name="f_name" required />
						</div>
						<div class="col-lg-4">
							<input type="text" class="form-control" id="l_name" name="l_name" required />
						</div>
						<div class="col-lg-2">
							<select class="form-control" id ="sufx" name="sufx" palceholder="" >
								<option value=""></option> 
								<option  value="Sr."> Sr. </option>
								<option  value="Jr."> Jr. </option>
								<option  value="I"> I </option>
								<option  value="II"> II </option>
								<option  value="III"> III </option>
								<option  value="IV"> IV </option>
							</select>
						</div>
						<div class="col-lg-2">
							<input type="text" class="form-control" id="m_intl" name="m_intl">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">USERNAME:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="u_name" name="u_name" required />
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">SEX:</label>
						</div>
						<div class="col-lg-8">
							<label class="control-label" style="position:relative; top:7px;">CONTACT NO.:</label>
						</div>
						<div class="col-lg-4">
                        <select class="form-control" id="sex" name="sex" palceholder="" required>
							<option value="">---select gender---</option> 
							<option value="Male"> MALE </option>
                            <option value="Female"> FEMALE </option>
						</select>
						</div>
						<div class="col-lg-8">
							<input type="number" class="form-control" id="cont_no" name="cont_no" required />
						</div>
					</div>
                    <div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">EMPLOYMENT DATE:</label>
						</div>
						<div class="col-lg-8">
							<input type="date" class="form-control" id="emp_date" name="emp_date" required />
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
                        <select class="form-control" id="ter_id" name="ter_id" palceholder="" required>
							<option value="">---select terminal---</option> 
							<?php 
							$sql = "SELECT * FROM ter_details";
							$query =  mysqli_query($conn, $sql);
							$rows = mysqli_num_rows($query);
								if($rows>0)
								{
									while($data = mysqli_fetch_array($query))
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
                        <select class="form-control" id="stat_id" name="stat_id" palceholder="" required>
							<option value="">---select status---</option> 
							<?php 
							$sql = "SELECT * FROM user_stat";
							$query =  mysqli_query($conn, $sql);
							$rows = mysqli_num_rows($query);
								if($rows>0)
								{
									while($data = mysqli_fetch_array($query))
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
						<div class="col-lg-8">
							<input type="password" class="form-control" id="pass" name="pass" required />
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
<!-- add condoctor -->
