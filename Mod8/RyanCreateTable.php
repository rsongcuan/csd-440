<!--
Ryan Songcuan
9/25/22
Module 8 Assignment
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>RyanCreateTable.php</title>
</head>
<body>
<h1>Module 8: MySQL and PHP</h1>
<?php
$db = new mysqli("127.0.0.1", "student1", "pass", "baseball_01");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} else {
    echo "Connected successfully<br><br>";
}

$sql = "CREATE TABLE films (
    id INT(1) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(30) NOT NULL,
    gross BIGINT(10) NOT NULL,
    year YEAR NOT NULL,
    director VARCHAR(100) NOT NULL
)";

if ($db->query($sql) === TRUE) {
    echo 'Table "films" created successfully';
} else {
    echo "Error creating table: " . $db->error;
}

$db->close();
?>

</body>
</html>