<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: #fef9e7; /* light yellow */
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            margin: 40px auto;
            width: 60%;
            background-color: #ffffff;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }

        th {
            background-color: #003366; /* dark blue */
            color: yellow;
            padding: 20px;
            font-size: 24px;
        }

        td {
            padding: 15px;
            font-size: 18px;
            background-color: #e6f0ff; /* light blue */
        }

        td a {
            text-decoration: none;
            background-color: #ffcc00; /* yellow */
            color: #003366;
            padding: 10px 15px;
            border-radius: 5px;
            font-weight: bold;
        }

        td a:hover {
            background-color: #ffd633;
            color: #000033;
        }

        tr:not(:first-child):hover td {
            background-color: #d9eaff;
        }
    </style>
</head>
<body>
    <?php
    // Connect to the database
    $con = mysqli_connect("localhost", "root", "", "ebooks");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Admin panel menu table
    echo "<table border='0' cellspacing='0' cellpadding='10'>
        <tr>
            <th colspan='2'>ADMIN PANEL</th>
        </tr>
        <tr>
            <td>TO ADD A BOOK CATEGORY</td>
            <td><a href='bcate.php'>CLICK HERE</a></td>
        </tr>
        <tr>
            <td>TO ADD A BOOK</td>
            <td><a href='e.php'>CLICK HERE</a></td>
        </tr>
        <tr>
            <td>TO EDIT STUDENTS/USERS</td>
            <td><a href='sl.php'>CLICK HERE</a></td>
        </tr>
        <tr>
            <td>TO VIEW BOOKS</td>
            <td><a href='eview.php'>CLICK HERE</a></td>
        </tr>
        <tr>
            <td>LOGOUT</td>
            <td><a href='logout.php'>CLICK HERE</a></td>
        </tr>
    </table>";

    // Query the student_login table for unverified users (status = 0)
    $sql = "SELECT id, firstname, lastname, email FROM student_login WHERE status = 0";
    $result = mysqli_query($con, $sql);

    echo "<table border='0' cellspacing='0' cellpadding='10'>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>";

    if ($result && mysqli_num_rows($result) > 0) {
        while ($student = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>" . htmlspecialchars($student['firstname']) . "</td>
                    <td>" . htmlspecialchars($student['lastname']) . "</td>
                    <td>" . htmlspecialchars($student['email']) . "</td>
                    <td><a href='verify_student.php?id=" . urlencode($student['id']) . "'>Verify</a></td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='4' style='text-align:center;'>No pending student registrations.</td></tr>";
    }

    echo "</table>";

    mysqli_close($con);
    ?>
</body>
</html>
