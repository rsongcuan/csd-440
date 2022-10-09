<!--
Ryan Songcuan
9/25/22
Module 8 Assignment
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>RyanQuery.php</title>
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
        .columns {display:grid; grid-template-columns: auto auto auto auto auto;margin-left: 25%;}
        #column1, #column2, #column3 {text-align: center;}
    </style>
</head>
<body>
<?php
$db = new mysqli("127.0.0.1", "student1", "pass", "baseball_01");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') { ?>
<h1>SEARCH</h1>
<div class="card">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <label for="id">Rank<br>
            <select name="id">
                <option value="" disabled hidden selected>--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select>
        </label><br><br>
        <label for="title">Movie Title (Starts with:)</label><br>
        <div class="columns">
            <div id="column1">
                <input type="radio" id="a" name="title" value="A">
                <label for="a">A</label><br>
                <input type="radio" id="b" name="title" value="b">
                <label for="b">B</label><br>
                <input type="radio" id="c" name="title" value="c">
                <label for="c">C</label><br>
                <input type="radio" id="d" name="title" value="d">
                <label for="d">D</label><br>
                <input type="radio" id="e" name="title" value="e">
                <label for="e">E</label><br>
                <input type="radio" id="f" name="title" value="f">
                <label for="f">F</label><br>
                <input type="radio" id="g" name="title" value="g">
                <label for="g">G</label><br>
                <input type="radio" id="h" name="title" value="h">
                <label for="h">H</label><br>
                <input type="radio" id="i" name="title" value="i">
                <label for="i">I</label><br>
            </div>
            <div id="column2">
                <input type="radio" id="j" name="title" value="j">
                <label for="j">J</label><br>
                <input type="radio" id="k" name="title" value="k">
                <label for="k">K</label><br>
                <input type="radio" id="l" name="title" value="l">
                <label for="l">L</label><br>
                <input type="radio" id="m" name="title" value="m">
                <label for="m">M</label><br>
                <input type="radio" id="n" name="title" value="n">
                <label for="n">N</label><br>
                <input type="radio" id="o" name="title" value="o">
                <label for="o">O</label><br>
                <input type="radio" id="p" name="title" value="p">
                <label for="p">P</label><br>
                <input type="radio" id="q" name="title" value="q">
                <label for="q">Q</label><br>
                <input type="radio" id="r" name="title" value="r">
                <label for="r">R</label><br>
            </div>
            <div id="column3">
                <input type="radio" id="s" name="title" value="s">
                <label for="s">S</label><br>
                <input type="radio" id="t" name="title" value="t">
                <label for="t">T</label><br>
                <input type="radio" id="u" name="title" value="u">
                <label for="u">U</label><br>
                <input type="radio" id="v" name="title" value="v">
                <label for="v">V</label><br>
                <input type="radio" id="w" name="title" value="w">
                <label for="w">W</label><br>
                <input type="radio" id="x" name="title" value="x">
                <label for="x">X</label><br>
                <input type="radio" id="y" name="title" value="y">
                <label for="y">Y</label><br>
                <input type="radio" id="z" name="title" value="z">
                <label for="z">Z</label>
            </div>
        </div><br>
        <label for="gross">Worldwide Gross</label><br>
        <label for="gross">List all films with a gross greater than:</label><br>
        <label for="gross">$</label>
        <input type="number" id="gross" name="gross" min="1000000000" style="width:35%;"
               placeholder="Hint: The lowest gross in the Top 20 is $1,242,805,359"><br><br>
        <label for="year">Year Released</label><br>
        <input type="number" id="year" name="year" min="1900" max="2023" style="width:35%;"
               placeholder="Hint: The earliest year in the Top 20 is 1997"><br><br>
        <label for="director">Director<br>
            <select name="director">
                <option value="" disabled hidden selected>--</option>
                <option value="anthony">Anthony Russo</option>
                <option value="condon">Bill Condon</option>
                <option value="bird">Brad Bird</option>
                <option value="buck">Chris Buck</option>
                <option value="trevorrow">Colin Trevorrow</option>
                <option value="yates">David Yates</option>
                <option value="bayona">J.A. Bayona</option>
                <option value="cameron">James Cameron</option>
                <option value="wan">James Wan</option>
                <option value="lee">Jennifer Lee</option>
                <option value="abrams">J.J. Abrams</option>
                <option value="joe">Joe Russo</option>
                <option value="favreau">Jon Favreau</option>
                <option value="watts">Jon Watts</option>
                <option value="kosinski">Joseph Kosinski</option>
                <option value="whedon">Joss Whedon</option>
                <option value="johnson">Rian Johnson</option>
                <option value="coogler">Ryan Coogler</option>
            </select>
        </label><br><br>
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

    function displayData($result) {
        if ($result->num_rows > 0) { ?>
            <table border="1">
            <caption><h3>Highest-Grossing Films of All Time</h3></caption>
            <tr>
                <th>Rank</th>
                <th>Movie Title</th>
                <th>Worldwide Gross</th>
                <th>Year Released</th>
                <th>Director(s)</th>
            </tr>
        <?php }
        else {
            echo "No results found.";
            echo "<br><br><br><a href='RyanQueryTable.php'>Click Here to view Top 20</a>";
        }
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
    <?php }

    if(isset($rank)) {
        $sql = "SELECT * FROM films WHERE id = $rank LIMIT 1";
        $result = $db->query($sql);
        displayData($result);
    }
    if (isset($title)) {
        $sql = "SELECT * FROM films WHERE (title LIKE '".$title."%"."%') ORDER BY title";
        $result = $db->query($sql);
        displayData($result);
    }
    if (isset($gross)) {
        $gross_value = (int) $gross;
        if ($gross_value != 0) {
            $sql = "SELECT * FROM films WHERE (gross >= $gross_value)";
            $result = $db->query($sql);
            displayData($result);
        }
    }
    if (isset($year)) {
        $year_value = (int) $year;
        if ($year_value != 0) {
            $sql = "SELECT * FROM films WHERE (year = $year_value)";
            $result = $db->query($sql);
            displayData($result);
        }
    }
    if (isset($director)) {
        $sql = "SELECT * FROM films WHERE (`director` LIKE '%".$director."%')";
        $result = $db->query($sql);
        displayData($result);
    }

    $db->close();
} ?>
<footer>
    <br><br>
    <a href="RyanIndex.php">Back to Index Page</a>
</footer>
</body>
</html>