<!--
Ryan Songcuan
10/9/22
Module 11 Assignment
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>RyanPDF_Program.php</title>
    <meta charset="UTF-8">
    <script>
        function getPDF() {
            window.open("RyanPDF.php");
        }
    </script>
    <style>
        body {text-align: center;}
        h1 {color: rgb(107,142,35);}
        button {background-color: rgb(245,222,179);border-radius: 8px;}
        button:hover {background-color: rgb(222,184,135);}
    </style>
</head>
<body>
    <h1>Top 20 Highest Grossing Films of All Time</h1>
    <button onclick="getPDF();" target="_blank">Click Here to Generate PDF</button>
</body>
</html>