<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="BrowseVacancies.css">
    <script src="https://kit.fontawesome.com/3b57a2a2a7.js"></script>
    <title>Browse Vacancies</title>
</head>

<body>
    <?php
    require('navbar.php');
    ?>
    <div class="jobs-list-container">
        <h2></h2>

        <input class="job-search" type="text" placeholder="Search here..." />

        <div class="jobs"></div>
    </div>
    <script src="BrowseVacancies.js"></script>
</body>
</html>