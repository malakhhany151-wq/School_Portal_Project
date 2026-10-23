<?php

require_once "connect.php";
include_once "nav.php";


if (isset($_GET['delete_id'])) {
    $delet = $_GET['delete_id'];
    $sql = "DELETE FROM studentss WHERE id = $delet";
    mysqli_query($con, $sql);
    header("Location: index1.php"); 
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $score = $_POST['score'];

    if ($name !== '' && is_numeric($score)) {
        $sql = "INSERT INTO studentss (name, score) VALUES ('$name', '$score')";
        mysqli_query($con, $sql);
        header("Location: index1.php"); 
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">

    
    <div class="card p-4 mb-4 mt-3 shadow-sm">
        <h3>Add New Student</h3>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Student Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Score:</label>
                <input type="number" name="score" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Add Student</button>
        </form>
    </div>

    
    <h2>Student List</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Score</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            $result = mysqli_query($con, "SELECT * FROM studentss");

            
            while ($row = mysqli_fetch_assoc($result)) {
                
                $status = ($row['score'] >= 50)
                    ? '<span class="badge bg-success">Pass</span>'
                    : '<span class="badge bg-danger">Fail</span>';

                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                echo "<td>" . $row['score'] . "</td>";
                echo "<td>" . $status . "</td>";
                echo "<td>
                        <a href='index1.php?delete_id=" . $row['id'] . "' 
                           class='btn btn-danger btn-sm' 
                           onclick=\"return confirm('Are you sure you want to delete this student?');\">
                           Delete
                        </a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>
