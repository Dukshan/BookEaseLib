<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Category View</title>

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
            padding: 20px;
            overflow-x: auto;
        }

        thead th {
            background-color: #003366;
            color: #fff;
            text-align: center;
        }

        tbody td {
            text-align: center;
            vertical-align: middle;
        }

        tbody tr:hover {
            background-color: #f0f8ff;
        }

        .btn-yellow {
            background-color: #ffcc00;
            color: #000;
            border-radius: 6px;
            border: none;
            padding: 6px 10px;
        }

        .btn-yellow:hover {
            background-color: #e6b800;
        }

        .cat-img {
            width: 70px;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
            border: 2px solid #003366;
        }
    </style>
</head>
<body>

<div class="container">
    <h3 class="text-center">📁 Book Categories</h3>

    <!-- Redirect button -->
    <div class="mb-3 text-center">
        <a href="adpview.php" class="btn btn-warning">
            <i class="fas fa-arrow-left"></i> Back to Admin Panel
        </a>
    </div>

    <div class="table-wrapper">
        <table class="table table-bordered table-hover align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Photo</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $con = mysqli_connect("localhost", "root", "", "ebooks");

                $r = mysqli_query($con, "SELECT * FROM category");

                while ($row = mysqli_fetch_array($r)) {
                    echo "<tr>
                            <td>{$row[0]}</td>
                            <td>{$row[1]}</td>
                            <td><img src='cphoto/{$row[2]}' alt='No Image' class='cat-img'></td>
                            <td><a href='catedelete.php?a={$row[0]}' class='btn btn-sm btn-yellow'><i class='fas fa-trash-alt'></i> Delete</a></td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
