
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
        <div class="modal-dialog" style="width:90%;">
            <div class="modal-content" style="width:100%;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title" id="myModalLabel" style="text-align:left; margin-left:.5em">BUS ARRIVAL DETAILS</h3>
                </div>
                <div class="modal-body" style="width:98%; left:1em">
				
				<div class="container-fluid">
				<form method="POST" role="form">
				<div class="row">
						<div class="col-lg-4">

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
					<div class="row">
						<div class="col-lg-6"style="text-align:right" >
							<h4><b>LATLONG:</b></h4>
						</div>
						<div class="col-lg-6">
							<h4 style="text-align:left"><?php echo $row['que_lat'];?>, <?php echo $row['que_long'];?> </h4>
						</div>
					</div>
				</div>

				<div class="col-lg-8" style="">
						<div class="container" style="margin-top:-36em;padding-left:30em">
						<div class="" style=" width:100%;">
								<table class="table table-striped table-bordered table-hover"  style="">
									<thead style="display: block; overflow: hidden; word-break: break-word; background-color:rgb(165 161 161 / 50%);">
											<th style="width:50%;border-bottom:none; font-size:1.5vw"><ion-icon name="location"style="padding-right:.5em"></ion-icon>LOCATION</th>
									</thead>
									
									<!-- dri ma display ang map -->
									<tbody style="display: block;overflow:auto; width: 100%;height: 455px;  " id="mapid">
									</tbody>
									
								</table>
						</div>
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

$map_query_op = mysqli_query($conn, "SELECT * FROM que_details  ");

?>

				<script>
	    var mymap = L.map('mapid').setView([7.461092, 125.798725], 11);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoid3JoaXN1bGEiLCJhIjoiY2tqdjAzNjhwMnF1czJxcXVheG5zM2Z0dyJ9.ADUJmb8cso0RObOix5SzOQ', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 11,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'your.mapbox.access.token'
        }).addTo(mymap);

		var count = 0 ;
		
    <?php while($row1=mysqli_fetch_array($map_query_op)){		
        ?>
        var name = 'marker'+count;
        name = L.marker([<?php echo $row1['que_lat']; ?>, <?php echo $row1['que_long']; ?>]).addTo(mymap);
		name.bindPopup('<?php echo $row1['bus_no']; ?>').openPopup();
        count++;
        <?php
    }
    ?>

    
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