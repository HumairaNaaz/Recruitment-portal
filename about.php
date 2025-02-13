<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AboutUs</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="about.css">
  <script src="https://kit.fontawesome.com/3b57a2a2a7.js"></script>
</head>
<style>
  *{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;


  }
  #au{
    /* text-align: center; */
    margin-top:50px;
    

}
.hero{
  /* background-color: cyan; */
  overflow: hidden;

}
.heading h1{
  color: white;
  font-size: 50px;
  text-align: center;
  margin-top: 35px;

}
.container{
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 400px;
  margin: 65px auto;
  /* background-color: white; */
  color: black;

}
.hero-content{
  flex: 1;
  width: 600px;
  margin: 0px 25px;
  padding: 25px;
  animation: fadeInUp 2s ease;
  background-color: white;
  border-radius: 10px;
}
.hero-content h2{
  font-size: 38px;
  margin-bottom: 20px;
  /* color:#333; */

}
.hero-content p{
  font-size: 24px;
  line-height: 1.5;
  margin-bottom: 40px;
  /* color: white; */
}
.hero-content button{
  display: inline-block;
  background-color: cyan;
  /* color:#fff; */
  padding: 12px 24px;
  border-radius: 5px;
  font-size: 20px;
  border: none;
  cursor: pointer;
  transition: 0.3s ease;
  

}
.hero-content button:hover{
  background-color: blue;
  transform: scale(1.1);
}
.hero-image{
  flex:1;
  /* height: 50%; */
  width: 100%;
  margin: auto;
  animation: fadeInRight 2s ease;
}
 img{ 
  width: 100%;
  height: auto;
  border-radius: 10px;
} 
@media screen and (max-width:768px){
  .heading h1{
    font-size: 30px;

  }
  #au{
    margin-top: 100px;
}
  .hero{
    margin: 0px;

  }
  .container{
    width: 100%;
    flex-direction: column;
    /* max-width: 0px; */
    padding: 0px 40px;
    margin: 123px auto;
    overflow: visible;
  }
  .hero-content{
    width: 100%;
    margin: 35px 0px;
    

  }
  .hero-content h2{
    font-size: 30px;
    
  }
  .hero-content p{
    font-size: 18px;
    margin-bottom: 20px;

  }
  .hero-content buttton{
    font-size: 16px;
    padding: 8px 16px;

  }
  .hero-image{
    width: 100%;
    

  }

}
@keyframes fadeInUp{
  0%{
    opacity:0;
    transform: translateY(50px);
  }
  100%{
    opacity:1;
    transform: translateY(0px);
  }

}
@keyframes fadeInRight{
  0%{
    opacity:0;
    transform: translateY(-50px);
  }
  100%{
    opacity:1;
    transform: translateY(0px);
  }

}
#ls{
    margin-top:130px;
}
 
</style>


<body>
  <!-- Home Page -->
  <?php 
  require('navbar.php');
?>


 
<section class ="hero">
  <div class="heading">
    <h1 id="au">
      About Us
    </h1>
  </div>
  <div class="container">
    <div class="hero-content">
      <h2>Welcome to Our Portal</h2>
      <p>Our Portal is the #1 job site in the world1 with over 350M+ unique visitors every month2. Our portal strives to put job seekers first, giving them free access to search for jobs, post resumes, and research companies. Every day, we connect millions of people to new opportunities.</p>
      <button class="cta-button" onclick="window.location.href='learnmore.php' ">Learn More</button>
    </div>
    <div class="hero-image">
      <img src="newerrr.jpg">
    </div>
  </div>
 </section>

 <section class ="hero">
 
 </div>
 <div class="container">
 <div class="hero-image">
     <img src="people.jpg">
   </div>
   <div class="hero-content">
     <h2>Our People</h2>
     <p>At Our Portal, our mission is to help people get jobs. we have more than ~13,000 global employees passionately pursuing this purpose and improving the recruitment journey through real stories and data. We foster a collaborative workplace that strives to create the best experience for job seekers.
     </p>
    
   </div>
   
 </div>
</section>

 
<section class ="hero">
 
  </div>
  <div class="container" id="ls">
    <div class="hero-content">
      <h2>Our Leadership</h2>
      <p>Our Recruitment Portal's leadership team is diverse, dedicated and committed to empowering our employees to fulfill our mission: We help people get jobs.
        By fostering strong partnerships and collaboration, they serve and support job seekers, employers, society and our employees.
      </p>
      <button class="cta-button" onclick="window.location.href='leadership.php'">Meet our team</button>
    </div>
    <div class="hero-image">
      <img src="ls.jpg">
    </div>
  </div>
 </section>



 
</body>
</html>