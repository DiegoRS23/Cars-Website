<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cars</title>
    <link rel="stylesheet" href="./cars.css">
  </head>
  <body>

  <?php require_once './layouts/nav.php'; ?>

    <div class="main-container">
      <div class="img-container">
        <img src="./images/dummy.jpg" class="dummy-img" alt="Dummy Image">
        <div class="only-images">
          <img src="./images/0.jpg" class="my-main-img" alt="Main Image">
          <img src="./images/1.jpg" class="my-main-img" alt="Main Image">
          <img src="./images/2.jpg" class="my-main-img" alt="Main Image">
        </div>
        <button type="button" name="button" class="button left-button">&#x3c;</button>
        <button type="button" name="button" class="button right-button">&#x3e;</button>
      </div>
    </div>

    <div class="about">
      <h1>Cars</h1>
      <p>
        This is a simple website for car enthusiast where they can search parent companies of car manufacture.
        In doing so child companies of said car manufacture will be displayed and their car models.
        The user can pick a car model and all generations of that model will be displayed.
      </p>
    </div>

    <script src="cars.js" type="text/javascript"></script>
  </body>
</html>
