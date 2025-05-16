<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";  // your DB password
$dbname = "ebooks"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request is POST and required fields exist
if ($_SERVER['REQUEST_METHOD'] === 'POST' && 
    isset($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'])) {

    // Retrieve and sanitize POST data
    $first_name = trim($_POST['firstname']);
    $last_name = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $pass = $_POST['password'];

    // Basic validation
    if (empty($first_name) || empty($last_name) || empty($email) || empty($pass)) {
        die("Please fill all required fields.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // Check if email already exists
    $stmt = $conn->prepare("SELECT id FROM student_login WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->close();
        die("This email is already registered. Please use another or login.");
    }
    $stmt->close();

    // Insert password exactly as input (no hashing), and set status = 0
    $stmt = $conn->prepare("INSERT INTO student_login (firstname, lastname, email, password, status) VALUES (?, ?, ?, ?, 0)");
    $stmt->bind_param("ssss", $first_name, $last_name, $email, $pass);

    if ($stmt->execute()) {
        echo "<script>
            alert('Thank you for registering!');
            window.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Error: " . addslashes($stmt->error) . "');
            window.location.href = 'index.php';
        </script>";
    }

    $stmt->close();
} else {
    // If not a POST request or missing fields
    die("Invalid request.");
}

$conn->close();
?>
