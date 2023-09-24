<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="pics.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Picture Generating Diference Ref ID</title>
</head>
<body>
  <div class="containers">
  <div class="container">
    <form action="" method="POST">
      <div class="picture">
        <img src="img/paris.jpeg" name="pics" alt="">
      </div>
      <input type="number" class="number" name="num"></br>
      <input type="submit" class="submit" name="submit">
    </form>
  </div>
  </div>
</body>
</html>


<?php

if(isset($_POST['submit'])){
  // $pics = $_POST['pics'];
 
  $number = $_POST['num'];
  for($i = 1; $i <= $number; $i++){
    $imgname = "paris.jpeg";
    $image = "imagecreatefromjpeg($imgname)";
    $uniqueid ="Ref".rand(111111111,999999999);
    $folder = "image/";
    
    $textColor = "imagecolorallocate($image, 255, 255, 255)"; // White text color
    $imgstring = "imagestring($image, 5, 10, 10, $uniqueid, $textColor)";
    $outputFilename = $folder . 'image_' . $uniqueid . '.jpeg';
    $imagejpeg = "imagejpeg($image, $outputFilename)";

    $insert = "INSERT INTO pictures (picss,reference)
    VALUES('$image','$uniqueid')";
    $insert_query = mysqli_query($connection, $insert);
    
  }
}

?>
