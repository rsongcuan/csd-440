<!--
Ryan Songcuan
9/18/22
Module 6 Assignment
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>RyanMyInteger.php</title>
    <?php
    class RyanMyInteger {
        public $num;

        //Constructor
        function __construct($num) {
            $this->num = $num;
        }

        //isEven(int) and isOdd(int) methods
        function isEven(int $var) {
            $var = $this->num;
            if ($var % 2 == 0) {
                return $var . " is Even";
            }
            else {
                return $var . " is not Even";
            }
        }

        function isOdd(int $var) {
            $var = $this->num;
            if ($var % 2 != 0) {
                return $var . " is Odd";
            }
            else {
                return $var . " is not Odd";
            }
        }

        function isPrime(int $var) {
            $var = $this->num;
            if ($var == 1)
                return $var . " is not Prime";
            for ($i = 2; $i <= $var/2; $i++) {
                if ($var % $i == 0)
                    return $var . " is not Prime";
            }
            return $var . " is Prime";
        }


        //Getter and Setter methods
        function set_num($num) {
            $this->num = $num;
        }

        function get_num() {
            return $this->num;
        }
    }
    ?>
</head>
<body>
<h1>Module 6: PHP Objects</h1>
<h3>This program tests an integer to see if it is even, is odd, or is a prime number.</h3>
<?php
$newLine = "<br/>";
$twoLine = "<br/><br/>";

//The class is to hold a single integer that is set in the constructor by a parameter
$instance1 = new RyanMyInteger(1);
$instance2 = new RyanMyInteger(2);

//Test all methods
$instance1->set_num(11);
$instance2->set_num(42);

echo "The first integer is " . $instance1->get_num();
echo $newLine;
echo "The second integer is " . $instance2->get_num();
echo $twoLine;

echo $instance1->isEven($instance1->get_num());
echo $newLine;
echo $instance2->isEven($instance2->get_num());
echo $twoLine;

echo $instance1->isOdd($instance1->get_num());
echo $newLine;
echo $instance2->isOdd($instance2->get_num());
echo $twoLine;

echo $instance1->isPrime($instance1->get_num());
echo $newLine;
echo $instance2->isPrime($instance2->get_num());
?>

</body>
</html>