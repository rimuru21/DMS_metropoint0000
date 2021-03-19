<!DOCTYPE html>
        <html>
           <head>
              <title>OSM and Leaflet</title>
              <link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css"/>
           </head>
<body>
<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=125.78586101531984%2C7.453922102832861%2C125.80967903137208%2C7.46909187339791&amp;layer=mapnik" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/#map=16/7.4615/125.7978&amp;layers=N">View Larger Map</a></small>
              <div id = "map" style = "width: 900px; height: 580px"></div>
<script src = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
              <script>
                 // Creating map options
                 var mapOptions = {
                    center: [7.4615,125.7978],
                    zoom: 16
                 }
                 
                 // Creating a map object
                 var map = new L.map('map', mapOptions);
                 
                 // Creating a Layer object
                 var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
                 
                 // Adding layer to the map
                 map.addLayer(layer);
              </script>
           </body>
           
        </html>