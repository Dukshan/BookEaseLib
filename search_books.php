<?php
$con = mysqli_connect("localhost", "root", "", "ebooks");
if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_POST['query'])) {
    $search = trim($_POST['query']);
    $search = mysqli_real_escape_string($con, $search);

    if ($search !== '') {
        $sql = "SELECT addbook FROM ebook WHERE b_title LIKE '%$search%' LIMIT 6";
        $result = mysqli_query($con, $sql);

        if (!$result) {
            die("Query failed: " . mysqli_error($con));
        }

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<li class="list-group-item search-item" style="cursor:pointer;">' . htmlspecialchars($row['title']) . '</li>';
            }
        } else {
            echo '<li class="list-group-item text-muted">No results found</li>';
        }
    } else {
        echo '<li class="list-group-item text-muted">Please enter a search term</li>';
    }
}

mysqli_close($con);
?>
