<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cars</title>
    <link rel="stylesheet" href="./cars.css">
  </head>
  <body>
    <?php require_once './layouts/nav.php'; ?>

    <?php

      $con = mysqli_connect("localhost","root","","cars");

      $model = $_POST['model'];

      $result4 = mysqli_query($con,"select * from models where name like '$model' order by year asc")
        										or die("Failed to query database. Error: ".mysql_error());

      while($row4 = mysqli_fetch_array($result4)){

        if (!empty($row4['name'] == $model)) {
          echo '<br>';
          echo '<br>';
          echo '<div class="model-item">';
          echo '<div class="main-img">';
          echo '<img src="'.$row4['image'].'" >';
          echo '</div>';
          echo '<h1>'.$row4['name'].'</h1>';
          echo '<p>';
          echo $row4['year'];
          echo '<br>';
          echo $row4['engine'];
          echo '<br>';
          echo $row4['horsepower'];
          echo '</p>';
          echo '</div>';
          echo '<br>';
          echo '<br>';
        }
        else{
          echo '<h1>The Entry Is Not Available In The Database Yet!</h1>';
        }
      }
     ?>
  </body>
</html>
