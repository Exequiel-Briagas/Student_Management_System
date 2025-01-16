<?php
// Start the session and include the database connection file
session_start();
include_once 'database.php';

// Check if the request method is POST to handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $stmt = $con->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a matching user exists
    if ($result->num_rows > 0) {
        // Fetch user details and set session variables
        $user = $result->fetch_assoc();
        $_SESSION['UserLogin'] = $user['username']; 
        $_SESSION['Access'] = $user['access'];

        // Redirect to the main page
        header("Location: index.php"); 
        exit;
    } else {
        // Show an alert and redirect back to the login page on failure
        echo "<script>
        alert('Invalid username or password.');
        window.location.href = 'login.php';
      </script>";
        exit();
    }

    // Close the statement and database connection
    $stmt->close(); 
    $con->close(); 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font/bootstrap-icons.css">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="css/login.css">
    <title>Student Management System</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="logo">Student Management System</div>
            <div class="form-value">
                <h2 style="text-align: left;">Welcome!</h2>
                <p style="text-align: left;">Please log in to your account.</p>
                <form method="POST">
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" name="username" required value="<?php if (isset($_COOKIE["user_login"])) { echo $_COOKIE["user_login"]; } ?>">
                        <label>Username</label>
                        <i class="bi bi-person-fill input-icon"></i> <!-- Bootstrap Person Icon -->
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required value="<?php if (isset($_COOKIE["userpassword"])) { echo $_COOKIE["userpassword"]; } ?>">
                        <label>Password</label>
                        <i class="bi bi-lock-fill input-icon"></i> <!-- Bootstrap Lock Icon -->
                    </div>
                    <div class="forget">
                        <label><input type="checkbox" name="remember" <?php if (isset($_COOKIE["user_login"])) { ?> checked <?php } ?>>Remember Me</label>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" name="login">Log In</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
