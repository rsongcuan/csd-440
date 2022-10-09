<!--
Ryan Songcuan
9/25/22
Module 8 Assignment
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>RyanForms.php</title>
    <link href="https://fonts.googleapis.com/css2?family=Rammetto+One&family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {text-align: center;font-family: 'Roboto', sans-serif;}
        h1 {font-family: 'Rammetto One', cursive}
        table {text-align:center;width:70%;margin:0 auto 0 auto;}
        .data:hover {background-color:#33C8CC;}
        td:hover {background-color:white;border:2px solid #33C8CC;box-shadow: 0 4px 8px 0 #33C8CC;}
        a {padding:5px;color: black; text-decoration: none;border:1px solid black;border-radius:15px;background-color:#33C8CC;}
        a:hover {background-color: white;}
        .card {border: 1px solid black;text-align:center;width:70%;margin:0 auto 0 auto;padding:10px;}
        input[type=text], input[type=number] {width:40%;}
    </style>
</head>
<body>
<?php
$db = new mysqli("127.0.0.1", "student1", "pass", "baseball_01");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') { ?>
<h1>Add a record</h1>
<h3>The database already contains records for films ranked 1-20.</h3>
    <h3>Additional records can be added with this form.</h3>
    <h3>All field must be entered to submit entry.</h3>
<div class="card">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <label for="id">Rank</label><br>
        <input type="number" id="id" name="id"><br><br>
        <label for="title">Movie Title</label><br>
        <input type="text" id="title" name="title"><br><br>
        <label for="gross">Worldwide Gross</label><br>
        <label for="gross">$</label>
        <input type="number" id="gross" name="gross"><br><br>
        <label for="year">Year Released</label><br>
        <input type="number" id="year" name="year" min="1900" max="2022"><br><br>
        <label for="director">Director</label><br>
        <input type="text" id="director" name="director"><br><br>
        <input type="submit" value="Submit">
    </form>
</div>
<?php }
else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rank = $_POST['id'];
    $title = $_POST['title'];
    $gross = $_POST['gross'];
    $year = $_POST['year'];
    $director = $_POST['director'];

    $rank_value = (int)$rank;
    $gross_value = (int)$gross;
    $year_value = (int)$year;

    if (($rank_value != 0) && ($gross_value != 0) && ($year_value != 0)) {
        $sql = "INSERT INTO films (id, title, gross, year, director)
        VALUES ($rank_value, '$title', $gross_value, $year_value, '$director');";
    }
    else {
        echo "<footer><a href='RyanIndex.php'>Back to Index Page</a></footer><br><br><br>";
        die("Unable to process request<br>" . $db->error);
    }

    if ($db->multi_query($sql) === TRUE) {
        echo "New records entered successfully.<br><br>";
        $display = "SELECT * FROM films WHERE id = $rank LIMIT 1";
        $result = $db->query($display);
        if ($result->num_rows > 0) { ?>
        <table border="1">
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
    <?php } else {
        echo "<footer><a href='RyanIndex.php'>Back to Index Page</a></footer><br><br><br>";
        die("Unable to process request" . $sql . "<br>" . $db->error);
    }
}

?>
<footer>
    <br><br><br><br><br>
    <a href="RyanIndex.php">Back to Index Page</a>
</footer>
</body>
</html>