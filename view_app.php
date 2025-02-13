<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.html");
    exit;
}

include 'connection.php'; // Include the database connection file

// Retrieve job applications from the database
$sql = "SELECT * FROM job_applications";
$result = mysqli_query($conn, $sql);

if (!$result) {
    // Handle the database query error
    die("Database query error: " . mysqli_error($conn));
}

// Handle status update form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $application_id = $_POST['application_id'];
    $new_status = $_POST['new_status'];

    // Update the status in the database
    $update_sql = "UPDATE job_applications SET status='$new_status' WHERE application_id='$application_id'";
    $update_result = mysqli_query($conn, $update_sql);

    if ($update_result) {
        // Redirect to the same page after successful status update
        header("location: view_app.php");
        exit;
    } else {
        // Handle database update error
        echo "Error updating status: " . mysqli_error($conn);
    }
}
?>

<!-- Display job applications with options to update status -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="home.css">
    <style>
        .table{
            margin-top: 25vh;
        }
    </style>
</head>
<body>
<?php 
    require('navbar.php');
    ?>
    <table class="table">
        <thead>
            <tr>
                <th>Application ID</th>
                <th>Job Title</th>
                <th>Status</th>
                <th>Date Applied</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['application_id']; ?></td>
                    <td><?php echo $row['job_title']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><?php echo $row['dt']; ?></td>
                    <td>
                        <!-- Form to update status -->
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <input type="hidden" name="application_id" value="<?php echo $row['application_id']; ?>">
                            <select name="new_status">
                                <option value="Pending">Pending</option>
                                <option value="In Review">In Review</option>
                                <option value="Accepted">Accepted</option>
                                <option value="Rejected">Rejected</option>
                            </select>
                            <button type="submit">Update Status</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.html");
    exit;
}

include 'connection.php'; // Include the database connection file

// Retrieve job applications from the database
$sql = "SELECT * FROM job_applications";
$result = mysqli_query($conn, $sql);

if (!$result) {
    // Handle the database query error
    die("Database query error: " . mysqli_error($conn));
}

// Handle status update form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $application_id = $_POST['application_id'];
    $new_status = $_POST['new_status'];

    // Update the status in the database
    $update_sql = "UPDATE job_applications SET status='$new_status' WHERE application_id='$application_id'";
    $update_result = mysqli_query($conn, $update_sql);

    if ($update_result) {
        // Redirect to the same page after successful status update
        header("location: view_app.php");
        exit;
    } else {
        // Handle database update error
        echo "Error updating status: " . mysqli_error($conn);
    }
}
?>

<!-- Display job applications with options to update status -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="home.css">
    <style>
        .table{
            margin-top: 25vh;
        }
    </style>
</head>
<body>
<?php 
    require('navbar.php');
    ?>
    <table class="table">
        <thead>
            <tr>
                <th>Application ID</th>
                <th>Job Title</th>
                <th>Status</th>
                <th>Date Applied</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['application_id']; ?></td>
                    <td><?php echo $row['job_title']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><?php echo $row['dt']; ?></td>
                    <td>
                        <!-- Form to update status -->
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <input type="hidden" name="application_id" value="<?php echo $row['application_id']; ?>">
                            <select name="new_status">
                                <option value="Pending">Pending</option>
                                <option value="In Review">In Review</option>
                                <option value="Accepted">Accepted</option>
                                <option value="Rejected">Rejected</option>
                            </select>
                            <button type="submit">Update Status</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.html");
    exit;
}

include 'connection.php'; // Include the database connection file

// Retrieve job applications from the database
$sql = "SELECT * FROM job_applications";
$result = mysqli_query($conn, $sql);

if (!$result) {
    // Handle the database query error
    die("Database query error: " . mysqli_error($conn));
}

// Handle status update form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $application_id = $_POST['application_id'];
    $new_status = $_POST['new_status'];

    // Update the status in the database
    $update_sql = "UPDATE job_applications SET status='$new_status' WHERE application_id='$application_id'";
    $update_result = mysqli_query($conn, $update_sql);

    if ($update_result) {
        // Redirect to the same page after successful status update
        header("location: view_app.php");
        exit;
    } else {
        // Handle database update error
        echo "Error updating status: " . mysqli_error($conn);
    }
}
?>

<!-- Display job applications with options to update status -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="home.css">
    <style>
        .table{
            margin-top: 25vh;
        }
    </style>
</head>
<body>
<?php 
    require('navbar.php');
    ?>
    <table class="table">
        <thead>
            <tr>
                <th>Application ID</th>
                <th>Job Title</th>
                <th>Status</th>
                <th>Date Applied</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['application_id']; ?></td>
                    <td><?php echo $row['job_title']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><?php echo $row['dt']; ?></td>
                    <td>
                        <!-- Form to update status -->
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <input type="hidden" name="application_id" value="<?php echo $row['application_id']; ?>">
                            <select name="new_status">
                                <option value="Pending">Pending</option>
                                <option value="In Review">In Review</option>
                                <option value="Accepted">Accepted</option>
                                <option value="Rejected">Rejected</option>
                            </select>
                            <button type="submit">Update Status</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.html");
    exit;
}

include 'connection.php'; // Include the database connection file

// Retrieve job applications from the database
$sql = "SELECT * FROM job_applications";
$result = mysqli_query($conn, $sql);

if (!$result) {
    // Handle the database query error
    die("Database query error: " . mysqli_error($conn));
}

// Handle status update form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $application_id = $_POST['application_id'];
    $new_status = $_POST['new_status'];

    // Update the status in the database
    $update_sql = "UPDATE job_applications SET status='$new_status' WHERE application_id='$application_id'";
    $update_result = mysqli_query($conn, $update_sql);

    if ($update_result) {
        // Redirect to the same page after successful status update
        header("location: view_app.php");
        exit;
    } else {
        // Handle database update error
        echo "Error updating status: " . mysqli_error($conn);
    }
}
?>

<!-- Display job applications with options to update status -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="home.css">
    <style>
        .table{
            margin-top: 25vh;
        }
    </style>
</head>
<body>
<?php 
    require('navbar.php');
    ?>
    <table class="table">
        <thead>
            <tr>
                <th>Application ID</th>
                <th>Job Title</th>
                <th>Status</th>
                <th>Date Applied</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['application_id']; ?></td>
                    <td><?php echo $row['job_title']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><?php echo $row['dt']; ?></td>
                    <td>
                        <!-- Form to update status -->
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <input type="hidden" name="application_id" value="<?php echo $row['application_id']; ?>">
                            <select name="new_status">
                                <option value="Pending">Pending</option>
                                <option value="In Review">In Review</option>
                                <option value="Accepted">Accepted</option>
                                <option value="Rejected">Rejected</option>
                            </select>
                            <button type="submit">Update Status</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.html");
    exit;
}

include 'connection.php'; // Include the database connection file

// Retrieve job applications from the database
$sql = "SELECT * FROM job_applications";
$result = mysqli_query($conn, $sql);

if (!$result) {
    // Handle the database query error
    die("Database query error: " . mysqli_error($conn));
}

// Handle status update form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $application_id = $_POST['application_id'];
    $new_status = $_POST['new_status'];

    // Update the status in the database
    $update_sql = "UPDATE job_applications SET status='$new_status' WHERE application_id='$application_id'";
    $update_result = mysqli_query($conn, $update_sql);

    if ($update_result) {
        // Redirect to the same page after successful status update
        header("location: view_app.php");
        exit;
    } else {
        // Handle database update error
        echo "Error updating status: " . mysqli_error($conn);
    }
}
?>

<!-- Display job applications with options to update status -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="home.css">
    <style>
        .table{
            margin-top: 25vh;
        }
    </style>
</head>
<body>
<?php 
    require('navbar.php');
    ?>
    <table class="table">
        <thead>
            <tr>
                <th>Application ID</th>
                <th>Job Title</th>
                <th>Status</th>
                <th>Date Applied</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['application_id']; ?></td>
                    <td><?php echo $row['job_title']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><?php echo $row['dt']; ?></td>
                    <td>
                        <!-- Form to update status -->
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <input type="hidden" name="application_id" value="<?php echo $row['application_id']; ?>">
                            <select name="new_status">
                                <option value="Pending">Pending</option>
                                <option value="In Review">In Review</option>
                                <option value="Accepted">Accepted</option>
                                <option value="Rejected">Rejected</option>
                            </select>
                            <button type="submit">Update Status</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
