<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="description" content="We Learn - Intercultural Communication and Neighbourness Learning">
  <meta name="keywords" content="Welearn, Intercultural, Communication, Neighbourness, Learning">
  <meta name="author" content="Emrah Beydilli">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>We Learn - Intercultural Communication and Neighbourness Learning</title>

  <!-- Lastest Compiled JavaScript and Popper.js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/3690223341.js" crossorigin="anonymous"></script>

  <!-- Custom styles -->
  <link rel="stylesheet" href="css/custom.css">
</head>
<body>
  <!-- FlexBox TopNav -->
  <?php include('topmenu.php'); ?>

  <!-- Navigation Menu-->
  <nav class="navbar navbar-expand-lg navbar-light border-bottom bg-light" id="pageNav">
    <div class="container py-3">
      <!-- Brand -->
      <span class="navbar-brand">
        <img src="img/logo.png" alt="WeLearn Logo">
      </span>
      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mx-auto ">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="news.php">News/Events</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="results.php">Results</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="resources.php">Resources</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="goodpractices.php">Good Practices</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Slider -->
  <?php include('slider.php'); ?>

  <!-- Content -->
  <div class="container" id="content">
      <h1 class="text-center border-bottom py-3 mb-4">Results</h1>
      <ul class="list-group">
        <li class="list-group-item">
          <a href="files/IO1_Report_WeLearn.pdf" target="_blank">“Neighbourness” competences: A literature Review Report – WeLearn Intellectual Output 1 / Activity 1</a>
        </li>
        <li class="list-group-item">
          <a href="files/WeLearn Intercultural Communication and Neighbourness Training Toolkit.pdf" target="_blank">Intercultural Communication and Neighbourness Training Toolkit</a>
        </li>
      </ul>
  </div>
<!-- Footer -->
<?php include('footer.php'); ?>
</body>
</html>
