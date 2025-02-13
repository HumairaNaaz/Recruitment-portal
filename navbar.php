<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="home.css">
  <script src="https://kit.fontawesome.com/3b57a2a2a7.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="navbar.css">
</head>

<body>
  <!-- Home Page -->
  <?php 
  echo'<div class="mainheader">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
    <div class="recruitment">
      <div class="logo-container">
        <img src="logo.png" alt="" class="logo-img">
      </div>
      <h1 class="text-center">Recruitment Portal</h1>
    </div>
      <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav mr-auto mx-2">
        <li class="nav-item active">
          <a class="nav-link" href="Home.php">Home <span class=" sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="BrowseVacancies.php">Browse Vacancies<span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="resources.php">Resources<span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact Us<span class="sr-only">(current)</span></a>
        </li>
        </ul>
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="https://github.com/Amara863/" class="nav-link"><i class="fab fa-github"></i></a>
        </li>
        <li class="nav-item">
          <a href="https://www.linkedin.com/in/humaira-naaz-360117229/" class="nav-link"><i
              class="fab fa-linkedin-in"></i></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link"><i
              class="fab fa-instagram"></i></a>
        </li>
        <li class="nav-item">
          <a href=#" class="nav-link"><i class="fab fa-twitter"></i></a>
        </li>
        </ul>';
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
          echo '<p class="text my-0 mx-2">Welcome<br><a href="profile.php">' . $_SESSION['username'] . '</a></p>';

        }
        else{
  
        echo'<button type="button" class="btn btn-secondary mx-2" id="popcart" data-container="body" data-toggle="popover"
          data-placement="bottom" data-html="true" data-content="Vivamus
      sagittis lacus vel augue laoreet rutrum faucibus."><a href="login.php">Login</a>
        </button>
        <button type="button" class="btn btn-secondary mx-2" id="popcart" data-container="body" data-toggle="popover"
          data-placement="bottom" data-html="true" data-content="Vivamus
      sagittis lacus vel augue laoreet rutrum faucibus."><a  href="signup.php">Signup</a>
        </button>';
        }
  
      echo'
      </div>
    </div>
  </nav>
  </div>';
?>
  <div class="home-hero-bg bgcol">
    <img src="background.svg" alt="" width="417" height="646"
      class="home-hero-bg-graphic home-hero-bg-graphic-left home-hero-bg-graphic-lg">
    <img src="background2.svg" alt="" width="219" height="379"
      class="home-hero-bg-graphic home-hero-bg-graphic-left home-hero-bg-graphic-sm">
    <img src="background3.svg" alt="" width="472" height="667"
      class="home-hero-bg-graphic home-hero-bg-graphic-right home-hero-bg-graphic-lg">
    <img src="background4.svg" alt="" width="219" height="461"
      class="home-hero-bg-graphic home-hero-bg-graphic-right home-hero-bg-graphic-sm">
  </div>
  scr
</body>
</html>