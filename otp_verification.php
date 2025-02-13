<?php
session_start(); // Start session

$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve OTP from session
    $saved_email_otp = $_SESSION['email_otp'];

    // Get user-entered OTP
    $user_entered_email_otp = $_POST['email_otp'];


    // Check if entered OTP matches generated OTP
    if ($user_entered_email_otp == $saved_email_otp ) {
        // OTPs match, proceed with signup

        // Get user data from session
        $user_data = $_SESSION['user_data'];

        // Insert user data into database
        include 'connection.php'; // Make sure to include your database connection file

        $user_role = $user_data['user_role'];
        $username = $user_data['username'];
        $email = $user_data['email'];
        $phone = $user_data['phone'];
        $password = $user_data['password'];
        
        // Hash password
        $hash = password_hash($password, PASSWORD_DEFAULT);

        // Insert user data into database
        $sql = "INSERT INTO `signup` (`user_role`, `username`, `email`, `phone`, `password`, `cpassword`, `dt`) 
                VALUES ('$user_role', '$username', '$email', '$phone', '$hash', '$hash', current_timestamp())";
        
        $result = mysqli_query($conn, $sql);

        if ($result) {
            // User successfully registered, redirect to login page
            header("location: login.php?success=true");
            exit();
        } else {
            // Error inserting user data into database
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        // OTPs don't match, show error
        $showError = true;
    }
}

// Include your HTML form below
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">

    <title>OTP Verification</title>
    <style>
        .container{
            position: relative;
            top: 22vh;
        }
    </style>
</head>
<body>
<?php 
    require('navbar.php');
    ?>
<div class="container">
    <h2>OTP Verification</h2>
    <?php if ($showError): ?>
        <div class="alert alert-danger" role="alert">
            Incorrect OTPs. Please try again.
        </div>
    <?php endif; ?>
    <form action="otp_verification.php" method="post">
        <div class="form-group">
            <label for="email_otp">Email OTP:</label>
            <input type="text" class="form-control" id="email_otp" placeholder="Enter email OTP" name="email_otp" required>
        </div>
        <button type="submit" class="btn btn-primary" >Verify OTP</button>
    </form>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
