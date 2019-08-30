<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Delete</title>
</head>

<body>
  <h1>It is deleted: <?= $_GET['id']
                      ?>
  </h1>

  <?php
  $sPropertyID = $_GET['id'];
  $sjProperties = file_get_contents(__DIR__ . '/properties.json');
  $jProperties = json_decode($sjProperties);
  unset($jProperties->$sPropertyID);

  $sjProperties = json_encode($jProperties, JSON_PRETTY_PRINT);
  // echo $sjProperties;
  file_put_contents(__DIR__ . '/properties.json', $sjProperties);

  sleep(3); //seconds, but then it is not showing delete page, just delets
  header('location:properties.php');
  ?>
</body>

</html>