<?php

require_once "connect.php";
include_once "nav.php";
$quary = $_POST["input"] ?? '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form method="POST">
        <input type="text" name="input" placeholder="search..." value="<?= htmlspecialchars($quary) ?>">
        <button type="submit" name="search">Submit</button>
    </form>

</body>

</html>


<?php

if (isset($_POST['input'])) {
    $name = $_POST['input'];

    $sql = "SELECT * FROM studentss WHERE name LIKE '%$name%'";

    $result = mysqli_query($con, $sql);
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Name : " . htmlspecialchars($row['name']) . "<br>";
        echo "Score : " . htmlspecialchars($row['score']);
    }
}

?>
