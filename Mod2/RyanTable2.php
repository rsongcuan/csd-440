<!--
Ryan Songcuan
8/21/22
Module 2 Assignment
Write a program that creates an HTML table using a PHP nested loop structure.
In the loop structure you are to display a two dimensional table holding PHP generated random numbers in each cell.
Do not use PHP to display the actual table tags.
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RyanTable2.php</title>
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
                    <?php } ?>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>