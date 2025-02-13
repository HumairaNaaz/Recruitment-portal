<?php
$result = null;  // Initialize as null to check later if form is submitted

session_start();

include 'connection.php';

// Retrieve data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $message = $_POST['message'];

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } else {
    $sql = "INSERT INTO `contact` (`fname`,`lname`, `email`, `number`, `message`,`dt` ) 
            VALUES ('$fname','$lname', '$email', '$number', '$message', current_timestamp())";
    $result = mysqli_query($conn, $sql);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Contact Us</title>
  <link rel="stylesheet" href="contactus.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput.min.js"></script>
</head>

<body>
  <?php
  require('navbar.php');
  ?>
  <div class="contactus">
  <?php
    // Check if form has been submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Show success message if insertion was successful
      if ($result) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Message Sent successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
      } else {
        // Show error message if insertion failed
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issues, and your entry was not submitted successfully! We regret the inconvenience caused.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
      }
    }
    ?>
    <div class="title">
      <h2>Get in Touch</h2>
    </div>
    <div class="box">
      <!-- Form -->

      <div class="contact form">
          
        <h3>Send a Message</h3>
        <form action="contactus.php" method="post">
          <div class="formbox">
            <div class="row50">
              <div class="inputbox">
                <span>First Name</span>
                <input type="text" name="fname" placeholder="Enter First Name">
              </div>
              <div class="inputbox">
                <span>Last Name</span>
                <input type="text" name="lname" placeholder="Enter Last Name">
              </div>
            </div>


            <div class="row50">
              <div class="inputbox">
                <span>Email</span>
                <input type="text" name="email" placeholder="Enter your Email">
              </div>
              <div class="inputbox">
                <span>Mobile</span>
                <input type="text" name="number" placeholder="Enter Mobile Number">
              </div>
            </div>

            <div class="row100">
              <div class="inputbox">
                <span>Message</span>
                <textarea name="message" placeholder="Write Your message here..."></textarea>
              </div>


              <!-- <div class="row100"> -->
              <div class="inputbox">
                <input type="submit" value="Send">
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- info Box -->
      <div class="information">
        <div class="contact info">
          <h3>Contact Info</h3>

          <div class="infobox">
            <div>
              <span><ion-icon name="location"></ion-icon></span>
              <p>IGDTUW,  Delhi, INDIA</p>
            </div>
            <div>
              <span><ion-icon name="mail"></ion-icon></span>
              <a href="recruitmentportal789@gmail.com">recruitmentportal789@gmail.com</a>
            </div>
            <div>
              <span><ion-icon name="call"></ion-icon></span>
              <a href="tel:+919113468902">+91 91XXXXXX02</a>
            </div>
          </div>
          <!-- social media Links -->
          <ul class="sci">
            <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="#" class="nav-link"><ion-icon name="logo-twitter"></ion-icon></a></li>
            <li><a href="https://www.linkedin.com/in/humaira-naaz-360117229/"><ion-icon name="logo-linkedin"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
          </ul>
        </div>
        <!-- Map -->
        <div class="contact map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3500.8343092661703!2d77.22972667550205!3d28.66467942564711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x390cfd0683919c3b%3A0xf5fc331b74c2b9e2!2sIndira%20Gandhi%20Delhi%20Technical%20University%20for%20Women%2C%20James%20Church%2C%20New%20Church%20Rd%2C%20Opp.%20St%2C%20Kashmere%20Gate%2C%20New%20Delhi%2C%20Delhi%20110006!3m2!1d28.665536099999997!2d77.2320079!5e0!3m2!1sen!2sin!4v1739386981210!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>