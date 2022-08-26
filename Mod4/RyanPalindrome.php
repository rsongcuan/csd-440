<!--
Ryan Songcuan
8/28/22
Module 4 Assignment

Write a program that checks to see if a string is a palindrome.
Include six examples in your code that displays the string in both orders, three being a palindrome and three not.
Indicate in your display the resulting test in a function you have written to test each of the six strings.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>RyanPalindrome.php</title>
</head>
<body>
<h1>Module 4: PHP Strings</h1>
<h3>This program uses a function to check if a given string is a palindrome.</h3>
<?php
    $string1 = "mom";
    $string2 = "dad";
    $string3 = "kayak";
    $string4 = "cadillac";
    $string5 = "computer";
    $string6 = "bellevue";

    function palindrome($str) {
        $rev = strrev($str);

        echo "String: " . $str . "<br />";
        echo "Reversed: " . $rev . "<br />";
        echo "Is this a palindrome?: ";

        if ($str == $rev) {
            return "Yes<br />";
        }
        else {
            return "No<br />";
        }
    }

    echo palindrome($string1) . "<br />";
    echo palindrome($string2) . "<br />";
    echo palindrome($string3) . "<br />";
    echo palindrome($string4) . "<br />";
    echo palindrome($string5) . "<br />";
    echo palindrome($string6) . "<br />";
?>
</body>
</html>