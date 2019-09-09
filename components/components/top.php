<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <script src='https://api.mapbox.com/mapbox-gl-js/v1.2.0/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v1.2.0/mapbox-gl.css' rel='stylesheet' />
  <title>
    <?= $pageTitle; //same as with php echo tag, good for simple lines
    ?></title>
</head>

<body>

  <nav style="display: grid;
  align-content: center;
  justify-content: center; top: 0px;
  left: 0px;
  background-color: rgba(1, 1, 1, 0.3);
  width: 100%;
  height: 70px;">
    <div><a href="one.php">Home</a></div>
    <div><a href="two.php">Two</a></div>
    <div><a href="three.php">Three</a></div>

  </nav>