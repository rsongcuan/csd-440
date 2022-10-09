<!--
Ryan Songcuan
9/25/22
Module 8 Assignment
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>RyanPopulateTable.php</title>
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
VALUES ('Avengers: Infinity War', 2048359754, 2018, 'Anthony Russo, Joe Russo');";
$sql .= "INSERT INTO films (title, gross, year, director)
VALUES ('Spider-Man: No Way Home', 1915809309, 2021, 'Jon Watts');";
$sql .= "INSERT INTO films (title, gross, year, director)
VALUES ('Jurassic World', 1671537444, 2015, 'Colin Trevorrow');";
$sql .= "INSERT INTO films (title, gross, year, director)
VALUES ('The Lion King', 1656943394, 2019, 'Jon Favreau');";
$sql .= "INSERT INTO films (title, gross, year, director)
VALUES ('The Avengers', 1518812988, 2012, 'Joss Whedon');";
$sql .= "INSERT INTO films (title, gross, year, director)
VALUES ('Furious 7', 1516045911, 2015, 'James Wan');";
$sql .= "INSERT INTO films (title, gross, year, director)
VALUES ('Top Gun: Maverick', 1463516973, 2022, 'Joseph Kosinski');";
$sql .= "INSERT INTO films (title, gross, year, director)
VALUES ('Frozen II', 1450026933, 2019, 'Chris Buck, Jennifer Lee');";
$sql .= "INSERT INTO films (title, gross, year, director)
VALUES ('Avengers: Age of Ultron', 1402809540, 2015, 'Joss Whedon');";
$sql .= "INSERT INTO films (title, gross, year, director)
VALUES ('Black Panther', 1347280838, 2018, 'Ryan Coogler');";
$sql .= "INSERT INTO films (title, gross, year, director)
VALUES ('Harry Potter and the Deathly Hallows - Part 2', 1342025430, 2011, 'David Yates');";
$sql .= "INSERT INTO films (title, gross, year, director)
VALUES ('Star Wars: The Last Jedi', 1332539889, 2017, 'Rian Johnson');";
$sql .= "INSERT INTO films (title, gross, year, director)
VALUES ('Jurassic World: Fallen Kingdom', 1309484461, 2018, 'J.A. Bayona');";
$sql .= "INSERT INTO films (title, gross, year, director)
VALUES ('Frozen', 1290000000, 2013, 'Chris Buck, Jennifer Lee');";
$sql .= "INSERT INTO films (title, gross, year, director)
VALUES ('Beauty and the Beast', 1263521126, 2017, 'Bill Condon');";
$sql .= "INSERT INTO films (title, gross, year, director)
VALUES ('Incredibles 2', 1242805359, 2018, 'Brad Bird');";

if ($db->multi_query($sql) === TRUE) {
    echo "New records entered successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();
?>
<footer>
    <br><br><br><br><br>
    <a href="RyanIndex.php">Back to Index Page</a>
</footer>
</body>
</html>