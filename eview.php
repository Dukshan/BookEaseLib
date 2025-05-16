<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Uploaded Books</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/36a236c794.js" crossorigin="anonymous"></script>

    <style>
        body {
            background-color: antiquewhite;
            font-family: 'Source Sans Pro', sans-serif;
        }

        .container {
            margin-top: 4rem;
        }

        h3 {
            color: #003366;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .table-wrapper {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
            padding: 20px;
        }

        table {
            border-collapse: separate;
            border-spacing: 0;
            width: 100%;
        }

        thead th {
            background-color: #003366;
            color: #fff;
            text-align: center;
            vertical-align: middle;
        }

        tbody tr:hover {
            background-color: #f1f9ff;
        }

        td {
            vertical-align: middle;
            text-align: center;
        }

        .btn-custom-yellow {
            background-color: #ffcc00;
            color: #000;
            border: none;
            border-radius: 6px;
            padding: 6px 12px;
        }

        .btn-custom-yellow:hover {
            background-color: #e6b800;
        }

        .btn-custom-blue {
            background-color: #003366;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 6px 12px;
        }

        .btn-custom-blue:hover {
            background-color: #002244;
        }

        .book-img {
            width: 70px;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
            border: 2px solid #003366;
        }

        .table td, .table th {
            border: 1px solid #dee2e6;
            padding: 0.75rem;
        }

    </style>
</head>
<body>

<div class="container">
    <h3 class="text-center">📚 Uploaded Books</h3>

    <div class="table-wrapper">
        <table class="table table-bordered align-middle table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Photo</th>
                    <th>Description</th>
                    <th>Uploaded File</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $con = mysqli_connect("localhost", "root", "", "ebooks");
                $r = mysqli_query($con, "SELECT * FROM addbook");

                while ($row = mysqli_fetch_array($r)) {
                    echo "<tr>
                            <td>{$row[0]}</td>
                            <td>{$row[1]}</td>
                            <td>{$row[2]}</td>
                            <td><img src='photos/{$row[3]}' alt='No Image' class='book-img'></td>
                            <td>{$row[4]}</td>
                            <td><a href='PopBooks/{$row[5]}' target=''>{$row[5]}</a></td>
                            <td><a href='edelete.php?a={$row[0]}' class='btn btn-sm btn-custom-yellow'><i class='fas fa-trash-alt'></i> Delete</a></td>
                            <td><a href='eedit.php?a={$row[0]}' class='btn btn-sm btn-custom-blue'><i class='fas fa-edit'></i> Update</a></td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Bootstrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
