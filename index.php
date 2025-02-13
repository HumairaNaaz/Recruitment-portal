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
          <p ><a class="not" href="jobapply.php">New Job Opportunity: Marketing Coordinator position at [Company Name]. Apply now!</a></p>
          <p ><a class="not" href="jobapply.php">Your application for the Software Developer role at [Company Name] has been received. Stay tuned for updates!</a></p>
          <p ><a class="not" href="jobapply.php">Congratulations! You've been shortlisted for the Sales Associate position at [Company Name]. Next steps coming soon.</a></p>
          <p ><a class="not" href="jobapply.php">Reminder: Application deadline for the Graphic Designer role at [Company Name] is approaching. Don't miss out!</a></p>
          <p ><a class="not" href="jobapply.php">Update: Your interview for the Project Manager position at [Company Name] has been scheduled for [Date/Time].</a></p>
          <p ><a class="not" href="jobapply.php">Feedback Requested: We'd love to hear about your experience applying for the Customer Service Representative role at [Company Name].</a></p>
          <p ><a class="not" href="jobapply.php">New Listing Alert: Exciting opportunity for a Data Analyst at [Company Name]. Apply before it's too late!</a></p>
          
          </div>
        </div>
      </div>
    </form>
  </div>
 <script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script>
  window.botpressWebChat.init({
      "composerPlaceholder": "Chat with Job Genie",
      "botConversationDescription": "Search anything you want...",
      "botId": "7127cb8b-3a84-40cb-9ed4-1f743565b6b8",
      "hostUrl": "https://cdn.botpress.cloud/webchat/v1",
      "messagingUrl": "https://messaging.botpress.cloud",
      "clientId": "7127cb8b-3a84-40cb-9ed4-1f743565b6b8",
      "webhookId": "3287bf0b-ed71-4aaa-aac8-17d198ac3c35",
      "lazySocket": true,
      "themeName": "prism",
      "botName": "Job Genie",
      "avatarUrl": "https://images-platform.99static.com//gLPHksdH2OdHv_KDM_cwpKUtyCE=/115x100:1067x1052/fit-in/500x500/99designs-contests-attachments/117/117444/attachment_117444264",
      "stylesheet": "https://webchat-styler-css.botpress.app/prod/4654d634-b84b-427d-9832-13c761cd28a7/v89544/style.css",
      "frontendVersion": "v1",
      "showPoweredBy": true,
      "theme": "prism",
      "themeColor": "#2563eb"

  });
</script>
<script src="BrowserVacancies.js">

</script>
</body>
</html>