<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="app.css" />

  <script src="https://api.mapbox.com/mapbox-gl-js/v1.2.0/mapbox-gl.js"></script>
  <link href="https://api.mapbox.com/mapbox-gl-js/v1.2.0/mapbox-gl.css" rel="stylesheet" />

  <title>Document</title>
</head>

<body>
  <nav>
    MAPS
  </nav>

  <div id="map_properties">
    <div id="map"></div>
    <div id="properties">
      <?php
      $strJProperties = file_get_contents('data.json');
      $jProperties = json_decode($strJProperties);

      foreach ($jProperties as $jProperty) {
        // echo '<div class="property">
        // <img src="img/'.$jProperty->image.'">
        // <div>$'.$jProperty->price.'</div>
        // </div>';

        echo '<div class="property" id="V-' . $jProperty->id . '">
        <img src="' . $jProperty->address->img . '">
      
       
       <div class="address">' . $jProperty->address->address . '</div>
        </div>';
      }

      ?>


      <!-- <div class="property" id="">
          <img id="imgProperty" src="" />
          <h2 id="addressProperty"></h2>
        </div> -->
      <!-- <div class="property" id="V-P2">
          <img id="imgProperty" src="2.jpg" />
          <h2 id="addressProperty">Lygten,16</h2>
        </div> -->
    </div>
  </div>

  <script src="app.js"></script>
</body>

</html>