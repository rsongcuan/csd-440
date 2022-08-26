<!--
Ryan Songcuan
8/28/22
Module 3 Assignment - Table File
Starting with the PHP table created in Module 2, write a function that will be used to generate the value to be
displayed in each cell. The function will take two random numbers as the parameters and will then return the sum.
The function is to be placed in an external file.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>RyanTable3.php</title>
</head>
<body>
<table border="1" width="1000">
    <caption>
        Table Contents Created with a Function
    </caption>
    <thead>
    <tr>
        <td colspan="10" style="text-align:center;">
            Adding Random Numbers 1 - 1000
        </td>
    </tr>
    </thead>
    <tbody>
    <?php
        include "RyanMod3Function.php";
        for($i = 0; $i < 10; ++$i){
    ?>
        <tr>
            <?php for($j = 0; $j < 10; ++$j){ ?>
                <td>
                    <?php
                        $a = rand(1,1000);
                        $b = rand(1,1000);
                        echo randomAdd($a, $b);
                    ?>
                </td>
            <?php } ?>
        <?php } ?>
    </tbody>
</table>
</body>
</html>