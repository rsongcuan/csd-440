<!--
Ryan Songcuan
9/25/22
Module 8 Assignment
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>RyanCreateTable.php</title>
    <link href="https://fonts.googleapis.com/css2?family=Rammetto+One&family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {text-align: center;font-family: 'Roboto', sans-serif;}
        h1 {font-family: 'Rammetto One', cursive}
        footer {text-align: center;}
        a {padding:5px;color: black; text-decoration: none;border:1px solid black;border-radius:15px;background-color:#33C8CC;}
        a:hover {background-color: white;}
    </style>
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
    id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50) NOT NULL,
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
<footer>
    <br><br><br><br><br>
    <a href="RyanIndex.php">Back to Index Page</a>
</footer>
</body>
</html>