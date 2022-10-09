<!--
Ryan Songcuan
9/25/22
Module 8 Assignment
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>RyanDropTable.php</title>
</head>
<body>
<h1>Module 8: MySQL and PHP</h1>
<?php
$db = new mysqli("127.0.0.1", "student1", "pass", "baseball_01");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$sql = "DROP TABLE IF EXISTS films";

if ($db->query($sql) === TRUE) {
    echo 'Table "films" dropped successfully.';
} else {
    echo "Error dropping table: " . $db->error;
}

$db->close();
?>

</body>
</html>