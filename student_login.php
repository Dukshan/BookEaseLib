<?php
// Database connection parameters
$host = "localhost";
$user = "root";
$password = "";
$dbname = "ebooks";

// Create connection
$con = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Check if 'id' is set in GET parameters and is a positive integer
if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
    $id = intval($_GET['id']);

    // Step 1: Fetch student details from tbl_registration
    $stmt = $con->prepare("SELECT firstname, lastname, email, password FROM tbl_registration WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $student = $result->fetch_assoc();

        $firstname = $student['firstname'];
        $lastname = $student['lastname'];
        $email = $student['email'];
        $password = $student['password']; // assuming password is hashed

        // Step 2: Insert into student_login table
        $insert_stmt = $con->prepare("INSERT INTO student_login (firstname, lastname, email, password) VALUES (?, ?, ?, ?)");
        if ($insert_stmt) {
            $insert_stmt->bind_param("ssss", $firstname, $lastname, $email, $password);
            if ($insert_stmt->execute()) {
                // Step 3: Update status in tbl_registration
                $update_stmt = $con->prepare("UPDATE tbl_registration SET status = 1 WHERE id = ?");
                $update_stmt->bind_param("i", $id);
                $update_stmt->execute();
                $update_stmt->close();

                // Redirect after success
                header("Location: adpview.php");
                exit();
            } else {
                echo "Error inserting into student_login: " . $insert_stmt->error;
            }
            $insert_stmt->close();
        } else {
            echo "Prepare failed for insert: " . $con->error;
