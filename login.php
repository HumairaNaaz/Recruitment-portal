<?php
session_start();

// If user is already logged in, redirect to another page
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Redirect to profile page if necessary
    header("location: profile.php");
    exit;
}

$login = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connection.php';
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM signup WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                $login = true;
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                
                // Redirect based on user role
                if ($row['user_role'] == 'job_seeker') {
                    header("location: profile.php");
                } elseif ($row['user_role'] == 'administrator') {
                    header("location: administrator.php");
                } elseif ($row['user_role'] == 'recruiter') {
                    header("location: recruiter.php");
                } else {
                    header("location: home.php"); // Redirect to a default page for other roles
                }
                exit; // Add exit to stop further execution
            } else {
                $showError = true;
            }
        }
    } else {
        $showError = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="home.css">
    <script src="https://kit.fontawesome.com/3b57a2a2a7.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <?php require('navbar.php'); ?>

    <section>
        <div class="colour"></div>
        <div class="colour"></div>
        <div class="colour"></div>
        <div class="box">
            <div class="square" style="--I: 0"></div>
            <div class="square" style="--I: 1"></div>
            <div class="square" style="--I: 2"></div>
            <div class="square" style="--I: 3"></div>
            <div class="square" style="--I: 4"></div>
            <!-- Login Form -->
            <div class="Container">
                <div class="Form">
                    <h2>Login</h2>
                    <form id="loginForm" action="login.php" method="post">
                        <div class="Input__box">
                            <i class="fa fa-envelope"></i>
                            <input type="text" placeholder="Username" name="username" />
                        </div>
                        <div class="Input__box">
                            <i class="fa fa-key"></i>
                            <input type="password" id="password" placeholder="Password" name="password" />
                            <i class="far fa-eye" id="eyeIcon" style="margin-left: -30px; cursor: pointer;"></i>
                        </div>
                        <div class="Input__box">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <span class="button-space"></span>
                        </div>
                        <br>
                        <p class="Forget">
                            Forgot Password? <a href="#">Click here</a>
                        </p>
                        <p class="Forget">
                            Don't have An Account? <a href="signup.php">Sign Up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Show Password -->
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', () => {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                togglePassword.classList.remove('fa-eye');
                togglePassword.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                togglePassword.classList.remove('fa-eye-slash');
                togglePassword.classList.add('fa-eye');
            }
        });

        // Disable back button after successful login
        document.getElementById('loginForm').addEventListener('submit', function() {
            window.history.pushState(null, '', window.location.href);
        });

        // Log out user on window close
        window.addEventListener('beforeunload', function() {
            // Perform logout action
            // Redirect to logout page or clear session data
            <?php
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                    // Clear session data
                    session_unset();
                    session_destroy();
                }
            ?>
        });
    </script>
</body>

</html>
