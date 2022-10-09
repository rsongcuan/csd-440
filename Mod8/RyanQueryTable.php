<!--
Ryan Songcuan
9/25/22
Module 8 Assignment
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>RyanQueryTable.php</title>
    <style>
        table {text-align:center;width:70%;margin:0 auto 0 auto;}
        .data:hover {background-color:#33C8CC;}
        td:hover {background-color:white;border:1px solid #33C8CC;box-shadow: 0 4px 8px 0 #33C8CC;}
    </style>
</head>
<body>
<?php
$db = new mysqli("127.0.0.1", "student1", "pass", "baseball_01");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$sql = "SELECT id, title, gross, year, director FROM films";
$result = $db->query($sql);

if ($result->num_rows > 0) { ?>
<table border="1">
    <caption><h3>Top 5 Highest-Grossing Films of All Time</h3></caption>
    <tr>
        <th>Rank</th>
        <th>Movie Title</th>
        <th>Worldwide Gross</th>
        <th>Year Released</th>
        <th>Director(s)</th>
    </tr>
    <?php }
    while($row = $result->fetch_assoc()) { ?>
        <tr class="data">
            <td><?php echo "{$row['id']}"; ?></td>
            <td><?php echo "{$row['title']}"; ?></td>
            <td>$<?php echo number_format("{$row['gross']}"); ?></td>
            <td><?php echo "{$row['year']}"; ?></td>
            <td><?php echo "{$row['director']}"; ?></td>
        </tr>
    <?php } ?>
</table>
<?php
$result->close();
$db->close();
?>

</body>
</html>