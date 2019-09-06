<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Agent Profile</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- <section id="agents">
    <template class="singleAgent">
      <img src="">
      <input data-update="name" type="text" name="" id="nameAgent">
      <input data-update="email" type="text" name="" id="emailAgent">
    </template>
  </section> -->
  <!-- <div id="A1" class="agent">
    <img src="a.png">
    <input data-update="name" type="text" name="" id="" value="A">
    <input data-update="email" type="text" name="" id="" value="a@a.com">
  </div> -->
  <!-- <div id="A2" class="agent">
    <img src="b.png">
    <input data-update="name" type="text" name="" id="" value="B">
    <input data-update="email" type="text" name="" id="" value="b@b.com">
  </div> -->

  <?php
  $sjAgents = file_get_contents('data.json');
  $jAgents = json_decode($sjAgents);
  foreach ($jAgents as $sId => $jAgent) {
    echo '
  <div id="' . $sId . '" class="agent">
  <img src="' . $jAgent->image . '">
  <input data-update="name" type="text" name="" id="" value="' . $jAgent->name . '">
  <input data-update="email" type="text" name="" id="" value="' . $jAgent->email . '">
</div>';
  }

  ?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="app.js"></script>
</body>

</html>