<?php
session_start();

function sendOTP($phone_number, $api_key) {
  $url = 'https://2factor.in/API/V1/' . $api_key . '/SMS/' . urlencode($phone_number) . '/AUTOGEN2/OTP1';

  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

  // Temporarily disable SSL certificate verification (for testing purposes only)
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

  $response = curl_exec($curl);

  if ($response === false) {
    echo 'Error: ' . curl_error($curl);
  } else {
    $data = json_decode($response, true);
    $_SESSION['otp_details'] = $data;
    echo "OTP sent successfully.";
  }

  curl_close($curl);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "recruitment";

  $api_key = '....................................................................';

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if (isset($_POST['send_otp'])) {
    $phone_number = $_POST['phone_number'];

    $sql = "SELECT * FROM signup WHERE phone = '$phone_number'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      sendOTP($phone_number, $api_key);
      $_SESSION['phone_number'] = $phone_number;
    } else {
      echo "No matching records found for the phone number: $phone_number";
    }
  }

  // Add other parts of your code here...


}


  if (isset($_POST['logout'])) {
    unset($_SESSION['otp_verified']);
    unset($_SESSION['otp_details']);
    unset($_SESSION['phone_number']);
    unset($_SESSION['user_details']);

    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
  }

  $conn->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Send OTP</title>
  <link rel="stylesheet" href="otp.css">
  <style>
    .logout-btn {
      position: absolute;
      top: 10px;
      right: 10px;
    }
  </style>
</head>

<body>
  <?php if (isset($_SESSION['otp_verified'])) : ?>
    <form method="post">
      <input type="submit" value="Logout" class="logout-btn" name="logout">
    </form>
  <?php endif; ?>

  <?php if (isset($_SESSION['otp_verified'])) : ?>
    <div class="container">
      <?php
      if (isset($_SESSION['user_details'])) {
        $user_details = $_SESSION['user_details'];
        echo "<strong>Name:</strong> " . $user_details['name'] . "<br>";
        if (isset($user_details['employment id'])) {
          echo "<strong>Employment ID:</strong> " . $user_details['employment id'] . "<br>";
        }
        echo "<strong>Subject:</strong> " . $user_details['subject'] . "<br>";
        echo "<strong>Mobile No:</strong> " . $user_details['mobile_no'] . "<br>";
      }
      ?>
    </div>
  <?php endif; ?>

  <?php if (!isset($_SESSION['otp_verified'])) : ?>
    <div class="container">
      <h2></h2>
      <form method="post">
        <label for="phone_number">Enter Phone Number:</label><br>
        <input type="text" id="phone_number" name="phone_number" placeholder="Enter your phone number" required><br><br>
        <input type="submit" value="Send OTP" name="send_otp">
      </form>
    </div>
  <?php endif; ?>

  <?php if (isset($_SESSION['otp_details']) && !isset($_SESSION['otp_verified'])) : ?>
    <div class="container">
      <form method="post">
        <label for="otp">Enter OTP:</label><br>
        <input type="text" id="otp" name="otp" placeholder="Enter OTP" required><br><br>
        <input type="submit" value="Submit OTP" name="submit_otp">
      </form>
    </div>
  <?php endif; ?>
</body>

</html>
