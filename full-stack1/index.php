<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fullstack1
  </title>
</head>

<body>
  <h1 id="lblWelcome">Full stack</h1>
  <button id="btnTest" onclick="getData()">Get me data from the server</button>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    // $('h1').hide();
    // $('#lblWelcome').hide();
    // lblWelcome.style.display = "none"; //works only with ids - Vanilla js

    setInterval(() => {
      $.ajax({
          "url": "api-test.php",
          "dataType": "JSON"
        })
        .done(
          function(jData) {
            // $('#lblWelcome').text(sData)
            // let jData = JSON.parse(sData);
            $('#lblWelcome').text(jData.name)
          }
        )
        .fail(
          () => {
            $('#lblWelcome').text('something is wrong');
          }
        )


    }, 1000);





    function getData() {
      //ajax takes one json object as an argunet
      $.ajax({
          "url": "api-test.php"
        })
        .done(function(sData) {
          // console.log(sData);
          $('#lblWelcome').text(sData);
        })
        .fail(function() {
          console.log("something went wrong");
        })
    }
  </script>
</body>

</html>