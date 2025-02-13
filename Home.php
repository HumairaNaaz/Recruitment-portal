<?php session_start(); ?>
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
</head>

<body>
  <!-- Home Page -->
  <?php 
    require('navbar.php');
    ?>
  <!-- Search Box -->
  <div class="container">
    <form action="" class="searchbar">
      <div class="search-container">
        <div class="search-box">
          <p class="job"><b>Search Jobs</b></p>
          <label for="job-title">Job Title</label>
          <input type="text" id="job-title" placeholder="Enter job title">

          <label for="job-location">Job Location</label>
          <select id="job-location">
            <option value="Any">Any</option>
            <option value="new delhi">New Delhi</option>
            <option value="noida">Noida</option>
            <option value="grugram">Grugram</option>
            <option value="hydrabad">Hydrabad</option>
            <option value="bengaluru">Bengaluru</option>
            <option value="patna">Patna</option>
            <option value="kolkata">Kolkata</option>
          </select>
          <label for="expected-salary">Expected Salary</label>
          <input type="text" id="expected-salary" placeholder="Enter expected salary">
          <label for="org-type">Organization Type</label>
          <select id="org-type">
            <option value="any">Any</option>
            <option value="government">Government</option>
            <option value="private">Private</option>
            <option value="mnc">MNCs</option>
          </select>

          <div class="button-container">
            <button class="search-button">Search</button>
            <button class="clear-button">Clear</button>
          </div>
        </div>
        <!-- Notification Box -->
        <div class="notification">
          <p class="job"><b>Notifications</b>
            <hr>
          </p>
          <div class = "notifi">
          <p ><a class="not" href="BrowseVacancies.php">Assistant Professor at Central University of Rajasthan!</a></p>
          <p ><a class="not" href="BrowseVacancies.php">Associate Professor at Central University of Rajasthana!</p>
          <p ><a class="not" href="BrowseVacancies.php">Associate Professor at Central University of Haryana!</a></p>
          <p ><a class="not" href="BrowseVacancies.php">Software Engineer, developer / Programmer, 2024 graduate Can also appl!</a></p>
          <p ><a class="not" href="BrowseVacancies.php">Web/Application Developer at Quick Infotech!</a></p>
          <p ><a class="not" href="BrowseVacancies.php">Required Java Developer at Sharda Consultancy Services!</a></p>
          <p ><a class="not" href="BrowseVacancies.php">Python Trainer & Developer ( Night Shift and Work From Home) at Wonksknow Technologies!</a></p>
          <p ><a class="not" href="BrowseVacancies.php">Data Analyst at AskmeOffers.com unit of Lussac International Private Limiteds!</a></p>
          <p ><a class="not" href="BrowseVacancies.php">Freshers - Python + AI ML Libraries at Bangalore Talent Bee Consulting!</a></p>
          
          </div>
        </div>
      </div>
    </form>
  </div>
<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script>
  window.botpressWebChat.init({
      "composerPlaceholder": "Chat with Job Genie",
      "botConversationDescription": "Search anything you want",
      "botId": "d44eeaa0-9236-493e-8182-3d8d10ca5545",
      "hostUrl": "https://cdn.botpress.cloud/webchat/v1",
      "messagingUrl": "https://messaging.botpress.cloud",
      "clientId": "d44eeaa0-9236-493e-8182-3d8d10ca5545",
      "webhookId": "a358bfef-c2ea-4ef0-8999-19f8ddc9f465",
      "lazySocket": true,
      "themeName": "prism",
      "botName": "Job Genie",
      "avatarUrl": "https://images-platform.99static.com//gLPHksdH2OdHv_KDM_cwpKUtyCE=/115x100:1067x1052/fit-in/500x500/99designs-contests-attachments/117/117444/attachment_117444264",
      "stylesheet": "https://webchat-styler-css.botpress.app/prod/69d1fb56-2935-4175-a3cb-c0650d3e49c1/v97887/style.css",
      "frontendVersion": "v1",
      "useSessionStorage": true,
      "enableConversationDeletion": true,
      "theme": "prism",
      "themeColor": "#2563eb"
  });
</script>
<script src="BrowserVacancies.js">

</script>
</body>
</html>