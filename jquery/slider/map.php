<?php
$con=mysqli_connect("localhost", "admin", "admin", "tss12_30");

$que = "SELECT * FROM latlong";
$res = mysqli_query($con, $que);

$lat = "22.742840";
$long = "75.869290";

if(isset($_GET['id']))
{
  $a = $_GET['id'];
  $que1 = "SELECT * FROM latlong WHERE id = $a";
  $res1 = mysqli_query($con, $que1);
  $data1 = mysqli_fetch_assoc($res1);

  $lat = $data1['lat'];
  $long = $data1['longi'];
}



?>


<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 400px;
        width: 400px;
        margin: 10px auto;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: <?php echo $lat; ?>, lng: <?php echo $long; ?>},
          zoom: 13
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuUHTjsgyBWPSa8kChNS-j0n3axuRU5aE&callback=initMap"
    async defer></script>

    <table align="center" border="1" cellspacing="0" cellpadding="10">
      <tr>
        <th>S.No.</th>
        <th>City</th>
        <th>Address</th>
      </tr>
      <?php
      $n=1;
      while($data=mysqli_fetch_assoc($res))
      { ?>
        <tr>
          <Td><?php echo $n; ?></Td>
          <td><?php echo $data['city']; ?></td>
          <td><a href="map.php?id=<?php echo $data['id'];?>"><?php echo $data['address']; ?></a></td>
        </tr>
      <?php 
      }
      ?>
    </table>
  </body>
</html>