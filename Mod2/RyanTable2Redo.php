<!--
Ryan Songcuan
10/06/22
Module 12: Redo of Module 2 Assignment
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>RyanTable2Redo.php</title>
</head>
<body>
<table border="1" width="1000">
    <caption>
        HTML Table using PHP Nested Loop Structure
    </caption>
    <thead>
    <tr>
        <td colspan="10">
            Random Numbers 1 - 1000
        </td>
    </tr>
    </thead>
    <tbody>
    <?php for($i = 0; $i < 10; ++$i){ ?>
    <tr>
        <?php for($j = 0; $j < 10; ++$j){ ?>
            <td>
                <?php echo(rand(1, 1000)); ?>
            </td>
        <?php }
        } ?>
    </tbody>
</table>
</body>
</html>