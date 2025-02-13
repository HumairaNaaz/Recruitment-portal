<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AboutUs</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <!--<link rel="stylesheet" href="home.css">-->
  <!--<link rel="stylesheet" href="about.css">-->
  <script src="https://kit.fontawesome.com/3b57a2a2a7.js"></script>
</head>
<style>
  *{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;


  }
.container{
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    text-align:justify;
}
.card{
    margin: 63px 10px;
}
.card-title{
    text-align: center;
}



 
</style>


<body>
  <!-- Home Page -->
  <?php 
  require('navbar.php');
?>

<div class="container">
<div>
 <div class="card" style="width: 18rem;">
  
  <img src="amara1.jpg" class="card-img-top" alt="...">

  <div class="card-body">
    <h5 class="card-title">Amara Firdous</h5>
    <p class="card-text">As a Front end web developer specializing in HTML,CSS, JavaScript, and Bootstrap. Currently pursuing Btech in Computer Science and Engineering from IGDTUW. With a strong foundation in programming languages like C,C++, C# and PHP. </p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="Humaira.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Humaira Naaz</h5>
    <p class="card-text">I am a dedicated and passionate Fullstack Developer  pursuing Btech in Computer Science and Engineering(AI) from IGDTUW. With a strong foundation in programming languages such as C, C++, and Python, I have developed the ability to efficiently solve problems and write clean, maintainable code. </p>
  </div>
</div>
</div>

<div>
<div class="card" style="width: 18rem;">

  <img src="ananya.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Ananya</h5>
    <p class="card-text">
As a frontend developer with expertise in HTML, CSS, JavaScript, PHP, and Python, I bring a versatile skill set to the table. Pursuing Btech in Computer Science and Engineering(AI) from IGDTUW., I am dedicated to crafting seamless user experiences and innovative web solutions. Passion and precision drive my work in every project I undertake.</p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="deepa.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Deepa Kumari</h5>
    <p class="card-text">As a frontend developer adept in HTML, CSS, and JavaScript, I am committed to crafting engaging web experiences. Currently  pursuing Btech in Computer Science and Engineering(AI) from IGDTUW., I fuse creativity with technical skills to deliver innovative solutions, ensuring each project exceeds expectations.</p>
  </div>
</div>
</div>

</div>
</div>




 
</body>
</html>