<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update</title>
</head>


<?php
session_start();
$sAgentID = $_SESSION['id'];
$sPropertyID = $_GET['id'];
$sjData = file_get_contents('data/data.json');
$jData = json_decode($sjData);
$sPrice = $jData->agents->$sAgentID->properties->$sPropertyID->price;

if ($_POST) {
  $sNewPrice = intval($_POST['txtPrice']);
  foreach ($jData->agents->$sAgentID->properties as $keyProperty => $jProperty) {
    if ($keyProperty == $sPropertyID) {
      $jData->agents->$sAgentID->properties->$sPropertyID->price = $sNewPrice;
    }
  }


  $sPrice = $sNewPrice;
  echo $sNewPrice;
  $sjData = json_encode($jData, JSON_PRETTY_PRINT);
  file_put_contents('data/data.json', $sjData);
  header('location:view-agent-properties.php');
}
?>

<body>
  <form action="" method="POST">
    <input type="text" name="txtPrice" placeholder="<?= $sPrice
                                                    ?>">

    <button>Update</button>
  </form>
</body>

</html>