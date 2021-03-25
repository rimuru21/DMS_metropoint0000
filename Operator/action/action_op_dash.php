
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
							<h4 style="text-align:left"><?php echo $row['dri']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>CONDUCTOR:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['con']; ?></h4>
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

<!-- view map modal-->
<div class="modal fade" id="view_map<?php echo $row['que_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width:95%;">
            <div class="modal-content" style="width:100%;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="myModalLabel" style="text-align:left; margin-left:.5em">BUS ARRIVAL DETAILS</h3>
                </div>
                <div class="modal-body" style="width:100%; left:1em">
				
				<div class="container-fluid">
				<form method="POST" role="form">
				<div class="row">
					<div class="col-lg-5">
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
							<h4 style="text-align:left"><?php echo $row['dri']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>CONDUCTOR:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['con']; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6" style="text-align:right">
							<h4><b>BUS TYPE:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['abbr']; ?></h4>
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
						<div class="col-lg-6"style="text-align:right" >
							<h4><b>LATLONG:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['que_lat'];?>, <?php echo $row['que_long'];?> </h4>
							
						</div>
					</div>
				</div>
</div>
				<div class="col-lg-8" style="">
						<div class="container" style="margin-top:-38em;padding-left:45em">
						<div class="" style=" width:100%;">
								<table class="table table-striped table-bordered table-hover"  style=" width:100%;">
									<thead style="display: block; overflow: hidden; word-break: break-word; background-color:rgb(165 161 161 / 50%);">
											<th style="width:100%;border-bottom:none; font-size:1.5vw"><ion-icon name="location"style="padding-right:.5em"></ion-icon>LOCATION</th>
									</thead>
									<!-- dri ma display ang map -->
									<tbody style="display: block;overflow:auto; width: 100%;height: 486px; word-break: break-word; scrollbar-width: none; overflow: hidden; " id="mapid">
									</tbody>
									
								</table>
						</div>
						</div>

		
				</div>
				</div>		
                </div> 
				</div>
                <div class="modal-footer" style="margin-right:10px;">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" style="padding:8px;border-radius:4px"><span class=""></span> OK</button>
                </div>
				</form>

<?php
    $user_ad = $_SESSION['user']['ter_id'];
	$que_n = ($row['que_id']);
    $map_ter = mysqli_query($conn, "SELECT * FROM ter_details WHERE ter_id = '$user_ad'");
    $map_query = mysqli_query($conn, "SELECT * FROM que_details where que_id = '$que_n'");
    $ter_ =  mysqli_fetch_array($map_ter);
    $row1 = mysqli_fetch_array($map_query);
    $bus_n = ($row1['bus_no']);
    $ter_lat = ($ter_['ter_lat']);
    $ter_long = ($ter_['ter_long']); 
    $ter_name = ($ter_['descrip']); 
	
	?>

<?php echo $row1['bus_no']?>
<?php echo $row1['que_lat']?>
<script>
    var mymap = L.map('mapid').setView([<?php echo $ter_lat?>, <?php echo $ter_long?>], 12);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoid3JoaXN1bGEiLCJhIjoiY2tqdjAzNjhwMnF1czJxcXVheG5zM2Z0dyJ9.ADUJmb8cso0RObOix5SzOQ', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 12,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'your.mapbox.access.token'
        }).addTo(mymap);
		
        var count = 0;
        <?php while($row1 = mysqli_fetch_array($map_query)){  
        ?>
        var name = 'marker' + count;
        name = L.marker([<?php echo $row1['que_lat']?>, <?php echo $row1['que_long']?>]).addTo(mymap)
        .bindTooltip("<?php echo $row1['bus_no']?>", { permanent: true, offset: [-12, 1] }); 
	    count++;
        
        <?php
    }
    ?>
        L.marker([<?php echo $ter_lat?>, <?php echo $ter_long?>]).addTo(mymap)
		// .bindPopup('<?php echo $ter_name?>').openPopup(); 
        .bindTooltip("<?php echo $ter_name?>", { permanent: true, offset: [-12, 1] }); 
        
	var popup = L.popup();

	function onMapClick(e) {
		popup
			.setLatLng(e.latlng)
			.setContent("You clicked the map at " + e.latlng.toString())
			.openOn(mymap);
	}

	mymap.on('click', onMapClick);
    
    </script>	
            </div>
        </div>
	</div>

		
<!-- /.modal -->