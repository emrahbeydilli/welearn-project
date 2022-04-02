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

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178015755-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-178015755-1');
  </script>
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
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="news.php">News/Events</a>
          </li>
          <li class="nav-item">
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
      <h1 class="text-center border-bottom py-3 mb-4">About Project</h1>
      <p>WeLearn is a project that aims to find ways to support teachers and students in higher education to support neighbourness in their multicultural learning environments. We study neighbourness practices and create instructions for educators and students on how to embrace those practices to make the learning environments, digital and physical, better for all. The project receives funding from the Erasmus+ program and ends in summer 2022.
      </p>
      <h1 class="text-center border-bottom py-3 mb-4" id="aboutProject">Partners</h1>
      <div class="row align-items-center">
        <div class="col-lg-4 col-md-6 pb-3 text-center">
          <img src="img/logos/tau.png" alt="" class="img-fluid p-1 border mb-3">
          <h6>Coordinator</h6>
          <small class="text-muted"><a href="https://www.tuni.fi/en" class="stretched-link" target="_blank">Tampere University (TAU)</a></small>
        </div>
        <div class="col-lg-4 col-md-6 pb-3 text-center">
          <img src="img/logos/fbkw.png" alt="" class="img-fluid p-1 border mb-3">
          <h6>Partner</h6>
          <small class="text-muted"><a href="https://www.filmuniversitaet.de/" class="stretched-link" target="_blank">Film University Babelsberg (FBKW)</a></small>
        </div>
        <div class="col-lg-4 col-md-6 pb-3 text-center">
          <img src="img/logos/ucsc.png" alt="logo" class="img-fluid p-1 border mb-3">
          <h6>Partner</h6>
          <small class="text-muted"><a href="https://www.ucsc.it/" class="stretched-link" target="_blank">Catholic University of Sacred Heart, Milan (UCSC)</a></small>
        </div>
        <div class="col-lg-4 col-md-6 pb-3 text-center">
          <img src="img/logos/aau.png" alt="" class="img-fluid p-1 border mb-3">
          <h6>Partner</h6>
          <small class="text-muted"><a href="https://www.en.aau.dk/" class="stretched-link" target="_blank">Aalborg University (AAU)</a></small>
        </div>
        <div class="col-lg-4 col-md-6 pb-3 text-center">
          <img src="img/logos/sdu.png" alt="" class="img-fluid p-1 border mb-3">
          <h6>Partner</h6>
          <small class="text-muted"><a href="https://w3.sdu.edu.tr/" class="stretched-link" target="_blank">Suleyman Demirel University (SDU)</a></small>
        </div>
        <div class="col-lg-4 col-md-6 pb-3 text-center">
          <img src="img/logos/rtu.png" alt="" class="img-fluid p-1 border mb-3">
          <h6>Partner</h6>
          <small class="text-muted"><a href="https://www.rtu.lv/en" class="stretched-link" target="_blank">Riga Technical University (RTU)</a></small>
        </div>
      </div>
  </div>

<!-- Footer -->
<?php include('footer.php'); ?>
</body>
</html>
