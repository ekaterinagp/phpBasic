<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Upload your property</title>
</head>

<body>
  <form action="upload.php" method="POST" enctype="multipart/form-data">
    <!-- <input type="text" placeholder="price" name="txtPrice"> -->
    <input type="file" name="myFile">
    <input type="text" placeholder="price" name="txtPrice">
    <button>Upload property</button>
  </form>
</body>

</html>