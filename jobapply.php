<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}

include 'connection.php'; // Include the database connection file

// Retrieve user information from the database based on the logged-in user's username
$username = $_SESSION['username'];
$sql = "SELECT * FROM signup WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    // Handle the database query error
    die("Database query error: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $email = $row['email'];
    $phone = $row['phone'];
} else {
    // Handle the case where the user is not found in the database
    die("User not found in the database");
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form data here

    // Generate unique application ID
    $application_id = uniqid('APP-');

    // Retrieve job application details from the form
    $job_title = $_POST["job_title"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $resume = $_POST["resume"];
    $cover_letter = $_POST["cover_letter"];

    // Insert job application details into the database
    $insert_sql = "INSERT INTO job_applications (username, application_id, job_title, name, email, resume, cover_letter, status) VALUES ('$username', '$application_id', '$job_title','$name', '$email', '$resume', '$cover_letter', 'Pending')";
    $insert_result = mysqli_query($conn, $insert_sql);

    if ($insert_result) {
        // Redirect to track.php after successful insertion
        header("location: track.php");
        exit;
    } else {
        // Handle database insertion error
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Job Application</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- <link rel="stylesheet" href="profile.css"> -->
    <!-- <link rel="stylesheet" href="home.css"> -->
    <link rel="stylesheet" href="jobapply.css">

</head>
<body>
    <?php require('navbar.php'); ?>
    <div class="container">
                <h3 class="apply">Apply for Job</h3>
                <div class="form">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-group">
                        <label for="job_title">Job Title:</label>
                           <input type="text" class="form-control" id="job_title" name="job_title" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                     <div class="form-group">
                        <label for="email">Resume:</label>
                        <input type="file" class="form-control" id="resume" name="resume" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="cover_letter">Cover Letter:</label>
                        <textarea class="form-control" id="cover_letter" name="cover_letter" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Application</button>
                </form>
                </div>
         </div>
</body>
</html>