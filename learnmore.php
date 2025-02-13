<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--<link rel="stylesheet" href="home.css">-->
  <!--<link rel="stylesheet" href="about.css">-->
  <style>
    *{

    }
     body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
     
      /* padding: 200px; */
    }

    .container {
        /* margin-top: 500px; */
     
      margin: 20px auto;
      background-color: #fff;
      padding: 40px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 50px;
      margin-top: 190px;
      /*height:800px;*/
       margin-bottom: 60px;
      padding-left: 20px;
      padding-right: 20px;
      width: 400px;
    }
    p {
      font-size: 20px;
      line-height: 1.6;
      color: #333;
      text-align: justify;
      padding-left: 30px;
      padding-right:30px ;
    }
    .h1{
        text-align: center;
       padding: 20px;
    }
  </style>
</head>
<body>
<?php 
  require('navbar.php');
?>
 <div class="container">
    <h1 class="h1">Welcome to Our Recruitment Portal</h1>
    <p>
      Our recruitment portal is designed to connect job seekers with employers, making the job search process efficient and effective. Whether you're a recent graduate looking for your first job or an experienced professional seeking new opportunities, our portaloffers a wide range of job listings to suit your skills and interests.Employers can easily post job openings and manage applications through our user-friendly interface. Our advanced search functionality allows job seekers to filter results based on location, industry, salary, and more, ensuring that they find the perfect job match.With features such as resume building tools, interview preparation resources, and career advice articles, our portal is a comprehensive platform designed to support you at every stage of your job search journey.Join our recruitment portal today and take the next step towards your dream career!<br>A recruitment portal is a web-based platform designed to facilitate the hiring process for both employers and job seekers. It serves as a central hub for job listings, resumes, and communication, the traditionally complex and time-consuming recruitment process [2].
For employers, recruitment portals offer a convenient way to create and post job listings, providing detailed descriptions of job roles, required qualifications, and other pertinent information. They can efficiently manage applications, communicate with candidates, and schedule interviews through the platform. Advanced search and matching algorithms help employers find the most suitable candidates quickly, while data and analytics tools enable them to track the performance of their job postings and assess the effectiveness of their recruitment strategies.
Job seekers benefit from these portals by being able to upload their resumes and profiles, making them easily accessible to potential employers. They can search for job opportunities that align with their qualifications and receive tailored recommendations. The portals often include communication and collaboration tools, allowing candidates to apply directly to job openings and facilitating communication with employers.
Recruitment portals are accessible 24/7 from anywhere with an internet connection, offering unparalleled convenience to both employers and job seekers. They are also cost-effective compared to traditional hiring methods, such as newspaper advertisements or in-person job fairs. Another significant advantage of recruitment portals is their global reach. They enable organizations to access a broader and more diverse talent pool, while job seekers can explore job opportunities on a global scale, increasing the chances of finding the perfect match for their skills and aspirations.

    </p>
  </div>
</body>
</html>