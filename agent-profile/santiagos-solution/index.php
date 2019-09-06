<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Agent Profile</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <form>
    <input data-update="name" type="text" name="" id="nameAgent" placeholder="name" class="formInput">
    <input data-update="email" type="text" name="" id="emailAgent" placeholder="email" class="formInput">
    <button id="addAgent" onclick="getNewAgent()">Add agent</button></form>

  <div id="agents">
    <?php
    $sjAgents = file_get_contents('data.json');
    $jAgents = json_decode($sjAgents);
    foreach ($jAgents as $sId => $jAgent) {
      echo '
    
  <div id="' . $sId . '" class="agent">
  <img src="' . $jAgent->image . '">
  <input  class="agentUp" data-update="name" type="text" value="' . $jAgent->name . '">
  <input class="agentUp" data-update="email" type="text"  value="' . $jAgent->email . '">
</div>';
    }

    ?>

  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="app.js"></script>
</body>

</html>