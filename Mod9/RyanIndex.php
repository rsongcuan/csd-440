<!--
Ryan Songcuan
9/25/22
Module 8 Assignment
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>RyanIndex.php</title>
    <link href="https://fonts.googleapis.com/css2?family=Rammetto+One&family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {text-align: center;font-family: 'Roboto', sans-serif;}
        h1 {font-family: 'Rammetto One', cursive}
        table {width: 60%;margin:0 auto 0 auto;border-radius: 15px;}
        td {width:33%;border:1px solid black;border-radius:15px;background-color:#33C8CC;}
        td:hover {background-color:white;border:1px solid #33C8CC;box-shadow: 0 4px 8px 0 #33C8CC;border-radius:15px;}
        a {text-decoration:none;color:black;display:block;padding:10px 0 10px 0;}
    </style>
</head>
<body>
<?php
echo "<h1>Highest-Grossing Films of All Time</h1><br>";

echo "<table>";
echo "<caption><h3>Database Manipulation</h3></caption>";
echo "<tr>";
echo "<td><a href='RyanCreateTable.php'>Create Table</a>";
echo "<td><a href='RyanDropTable.php'>Drop Table</a>";
echo "<td><a href='RyanPopulateTable.php'>Populate Table</a>";
echo "</tr>";
echo "</table><br>";

echo "<table>";
echo "<caption><h3>Database Queries</h3></caption>";
echo "<tr>";
echo "<td><a href='RyanQueryTable.php'>Top 20 Highest-Grossing Films</a>";
echo "<td><a href='RyanQuery.php'>Search</a>";
echo "<td><a href='RyanForms.php'>Add a Record</a>";
echo "</tr>";
echo "</table><br>";
?>
</body>
</html>