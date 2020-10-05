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

      $company = $_POST['company'];

      $result = mysqli_query($con,"select * from parentcompany where name like '$company'")
        										or die("Failed to query database. Error: ".mysql_error());

      $row = mysqli_fetch_array($result);

      if (($row['name'] == $company)) {
        echo '<br>';
        echo '<br>';
        echo '<div class="item">';
        echo '<div class="main-img">';
        echo '<img src="'.$row['image'].'" >';
        echo '</div>';
        echo '<h1>'.$row['name'].'</h1>';
        echo '<p>'.$row['summary'].'</p>';
        echo '</div>';
        echo '<br>';
        echo '<br';
      }
      else{
        echo '<h1>Error Connecting To Database</h1>';
      }

      $id = $row['pcID'];

      $result2 = mysqli_query($con,"select * from childcompany where pcID='$id'")
        										or die("Failed to query database. Error: ".mysql_error());

      while($row2 = mysqli_fetch_array($result2)){

      if (!empty($row2['pcID'] == $id)) {
        echo '<br>';
        echo '<br>';
        echo '<div class="item">';
        echo '<div class="main-img">';
        echo '<img src="'.$row2['image'].'" >';
        echo '</div>';
        echo '<h1>'.$row2['name'].'</h1>';
        echo '<p>'.$row2['summary'].'</p>';
        echo '</div>';
        echo '<br>';
        echo '<br>';

        $id2 = $row2['ccID'];
        $result3 = mysqli_query($con,"select distinct name from models where ccID='$id2'")
									               or die("Failed to query database. Error: ".mysql_error());
              echo '<div class="nav-model">';
              echo '<form action="process2.php" method="post">';
              echo '<label for="cars"></label>';
              echo '<select id="model" name="model">';
              while($row3 = mysqli_fetch_array($result3)){
                if (!empty($row3)){
                    echo '<option value="'.$row3['name'].'">'.$row3['name'].'</option>';
                  }
              }
              echo '</select>';
              echo '<input type="submit" id="btn" value="Search">';
              echo '</form>';
              echo '</div>';
      }
      else{
        echo '<h1>Error Connecting To Database</h1>';
      }
    }
    ?>

  </body>
</html>
