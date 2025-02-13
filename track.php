<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.html");
    exit;
}

include 'connection.php'; // Include the database connection file

// Retrieve job applications for the logged-in user
$username = $_SESSION['username'];
$sql = "SELECT * FROM job_applications WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    // Handle the database query error
    die("Database query error: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Job Application Tracking</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css"> <!-- Assuming you have a home.css file -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
    .tracking {
        margin-top: 200px;
    }
    .tracking h2{
        text-align: center;
    }
    </style>
</head>
<body>
    <?php require('navbar.php'); ?> 

    <div class="tracking">
        <h2>Job Application Tracking</h2>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <table class="table table-striped">
                    <tr>
                    <thead>
                        <tr>
                            <th>Application ID</th>
                            <th>Job Title</th>
                            <th>Status</th>
                            <th>Date Applied</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['application_id'] . "</td>";
                            echo "<td>" . $row['job_title'] . "</td>";
                            echo "<td>" . $row['status'] . "</td>";
                            echo "<td>" . $row['dt'] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
