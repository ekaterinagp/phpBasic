<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Delete</title>
</head>

<body>
  <h1>Trying to update <?= $_GET['id']
                        ?>
  </h1>
  <form action="" method="POST">
    <input type="text" name="newPrice" placeholder="enter new price">
    <button>UPDATE</button>
  </form>


  <?php
  // $newPrice = $_POST['newPrice'];
  // echo $newPrice;
  $sPropertyID = $_GET['id'];
  $sjProperties = file_get_contents(__DIR__ . '/properties.json');
  $jProperties = json_decode($sjProperties);

  // echo $jProperties->$sPropertyID->price;
  if ($_POST) {
    $newPrice = $_POST['newPrice'];
    $jProperties->$sPropertyID->price = $newPrice;
    // echo json_encode($jProperties);
    $sjProperties = json_encode($jProperties, JSON_PRETTY_PRINT);

    file_put_contents(__DIR__ . '/properties.json', $sjProperties);

    header('location:properties.php');
  }

  // echo $sjProperties;
  // if ($sPropertyID == $jProperties->$sPropertyID) {
  //   echo $sPropertyID;
  // }
  // $propertyID = $_GET['id'];
  // echo $propertyID->price;

  ?>


</body>

</html>