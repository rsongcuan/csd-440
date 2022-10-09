<!--
Ryan Songcuan
9/25/22
Module 8 Assignment
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>RyanPopulateTable.php</title>
</head>
<body>
<h1>Module 8: MySQL and PHP</h1>
<?php
$db = new mysqli("127.0.0.1", "student1", "pass", "baseball_01");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$sql = "INSERT INTO films (id, title, gross, year, director)
VALUES (1, 'Avatar', 2847397339, 2009, 'James Cameron');";
$sql .= "INSERT INTO films (title, gross, year, director)
VALUES ('Avengers: Endgame', 2797501328, 2019, 'Anthony Russo, Joe Russo');";
$sql .= "INSERT INTO films (title, gross, year, director)
VALUES ('Titanic', 2187535296, 1997, 'James Cameron');";
$sql .= "INSERT INTO films (title, gross, year, director)
VALUES ('Star Wars: The Force Awakens', 2068223624, 2015, 'J.J. Abrams');";
$sql .= "INSERT INTO films (title, gross, year, director)
VALUES ('Avengers: Infinity War', 2048359754, 2018, 'Anthony Russo, Joe Russo')";

if ($db->multi_query($sql) === TRUE) {
    echo "New records entered successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();
?>

</body>
</html>