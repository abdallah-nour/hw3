<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload multiple files</title>
</head>

<body>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <h1>Select files to upload:</h1>
    <input type="file" name="uploads[]" multiple required>
    <br />
    <br />
    <input type="submit" value="submit" name="submit">
  </form>
</body>

</html>