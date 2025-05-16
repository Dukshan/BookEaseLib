<?php
$con = mysqli_connect("localhost", "root", "", "ebooks");

// Handle deletion code removed as you don't want the delete table now.

// No need to fetch categories anymore since table is removed.
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Category Form</title>
    <style>
        body {
            background: url('bgs/bg10.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            margin: 30px auto;
            width: 50%;
            background-color: #ffffffcc; /* semi-transparent white */
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
        }

        th {
            background-color: #003366;
            color: yellow;
            padding: 20px;
            font-size: 24px;
            border-radius: 10px 10px 0 0;
        }

        td {
            padding: 15px;
            font-size: 18px;
            vertical-align: middle;
            text-align: center;
        }

        input[type="text"],
        input[type="file"] {
            width: 100%;
            box-sizing: border-box;
            padding: 8px 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"], .view-btn {
            background-color: #ffcc00;
            color: #003366;
            font-size: 16px;
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
        }

        input[type="submit"]:hover, .view-btn:hover {
            background-color: #ffd633;
        }

        b {
            color: #003366;
        }

        /* Center the button container */
        .button-container {
            width: 50%;
            margin: 40px auto;
            text-align: center;
        }
    </style>
</head>
<body>

<!-- Category Form -->
<form action="bcnext.php" method="post" enctype="multipart/form-data">
    <table cellspacing="0" cellpadding="10">
        <tr>
            <th colspan="2">BOOK CATEGORY FORM</th>
        </tr>
        <tr>
            <td><b>Book Category</b></td>
            <td><input type="text" name="bk" required></td>
        </tr>
        <tr>
            <td><b>Book Photo</b></td>
            <td><input type="file" name="ph" required></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="SUBMIT"></td>
        </tr>
    </table>
</form>

<!-- Button to redirect to bcviewW.php -->
<div class="button-container">
    <a href="bcviewW.php" class="view-btn">View Categories</a>
</div>

</body>
</html>
