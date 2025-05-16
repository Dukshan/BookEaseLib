<?php
session_start();

// Connect to MySQL
$con = mysqli_connect("localhost", "root", "", "ebooks");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get email & password from POST
$email = $_POST['n'];
$password = $_POST['p'];

// Query
$sql = "SELECT * FROM student_login WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($con, $sql);

// Check result
if (mysqli_num_rows($result) == 1) {
    $_SESSION['email'] = $email;
    header("Location: student_login.php");
    exit();
} else {
    echo "<script>alert('Invalid username or password'); window.location.href='userlogin.php';</script>";
}
?>
