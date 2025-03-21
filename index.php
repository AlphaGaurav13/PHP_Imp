<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File | Handling</title>
</head>

<body>



  <form method="POST" action=" " enctype="multipart/form-data">
    <label for="myfile">Upload File: </label>
    <br />
    <input type="file" name="myfile">
    <br /><br />
    <button type="submit" name="submit"> Submit </button>
    <!-- enctype ="multipart/form-data" this insure the  the encryption -->
  </form>


  <?php
  //  print_r($_FILES["myfile"]);

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["myfile"])) {
      $filename = $_FILES["myfile"]["name"];
      $filetype = $_FILES["myfile"]["type"];
      $filesize = $_FILES["myfile"]["size"];
      $fileerror = $_FILES["myfile"]["error"];
      $filetmpname = $_FILES["myfile"]["tmp_name"];
      $fileext = pathinfo($filename, PATHINFO_EXTENSION);
      //  file superglobal is a 2d Array.

      echo "My File NaME IS : " . $filename . "<br/>";
      echo "My File Size IS : " . $filesize . "<br/>";
      echo "My File error IS : " . $fileerror . "<br/>";
      echo "My File type IS : " . $filetype . "<br/>";
      echo "My File tmp name IS : " . $filetmpname . "<br/>";
      echo "My File Extension IS : " . $fileext . "<br/>";
//bro
    }
  }
  ?>

</body>

</html>