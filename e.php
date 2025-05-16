<!DOCTYPE html>
<html>
<head>
    <title>Upload Book - Admin Panel</title>
    <style>
        body {
            background: url('bgs/bg10.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
        }

        table {
            margin: 100px auto;
            width: 50%;
            background-color: #ffffffcc;
            border: 2px solid #003366;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        }

        th {
            background-color: #003366;
            color: yellow;
            font-size: 24px;
            padding: 15px;
            border-top-left-radius: 13px;
            border-top-right-radius: 13px;
        }

        td {
            padding: 15px;
            font-size: 18px;
            color: #003366;
        }

        td:first-child {
            font-weight: bold;
            width: 40%;
            vertical-align: middle;
        }

        input[type="text"],
        select,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #003366;
            border-radius: 8px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #003366;
            color: yellow;
            padding: 10px 20px;
            border: none;
            font-size: 18px;
            border-radius: 8px;
            cursor: pointer;
            width: 50%;
        }

        input[type="submit"]:hover {
            background-color: #0055aa;
        }

        tr:last-child td {
            text-align: center;
        }
    </style>
</head>

<body>
    <form action="enext.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <th colspan="2">UPLOAD A BOOK</th>
            </tr>
            <tr>
                <td>Book Category</td>
                <td>
                    <select name="c" required>
                        <?php
                        $con = mysqli_connect("localhost", "root", "", "ebooks");
                        $r = mysqli_query($con, "SELECT * FROM category");
                        while ($row = mysqli_fetch_array($r)) {
                            echo "<option value='$row[1]'>$row[1]</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Book Title</td>
                <td><input type="text" name="c1" required></td>
            </tr>
            <tr>
                <td>Book Photo</td>
                <td><input type="file" name="pho" required></td>
            </tr>
            <tr>
                <td>Book Description</td>
                <td><input type="text" name="p1" required></td>
            </tr>
            <tr>
                <td>Upload Book</td>
                <td><input type="file" name="p2" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Upload Book">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
