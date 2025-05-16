<?php
$name = $_POST["n"];
$pass = $_POST["p"];

$con = mysqli_connect("localhost", "root", "", "ebooks");

// Always sanitize input to prevent SQL injection (better to use prepared statements, but keeping your style)
$name = mysqli_real_escape_string($con, $name);
$pass = mysqli_real_escape_string($con, $pass);

$r = mysqli_query($con, "SELECT * FROM admin_login WHERE username='$name' AND password='$pass'");

if ($row = mysqli_fetch_array($r)) {
    // Login successful: redirect to admin panel
    header("Location: adpview.php");
    exit();
} else {
    // Login failed: show alert and redirect back to login form
    echo "<script>
            alert('Invalid username or password!');
            window.location.href = 'adminlogin.php';
          </script>";
    exit();
}
?>
