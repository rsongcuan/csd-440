<!--
Ryan Songcuan
9/4/22
Module 5 Assignment
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>RyanCustomers.php</title>
</head>
<body>
<h1>Module 5: Indexed and Associated Arrays</h1>
<h3>
    This program creates and displays an array of customers (minimum of 10 customers) that includes their first name,
    last name, age, and phone number.
</h3>
<?php
$cust1 = array("First Name" => "Magic", "Last Name" => "Johnson", "Age" => 63, "Phone Number" => "402-555-1234");
$cust2 = array("First Name" => "Larry", "Last Name" => "Bird", "Age" => 65, "Phone Number" => "402-555-5678");
$cust3 = array("First Name" => "Michael", "Last Name" => "Jordan", "Age" => 59, "Phone Number" => "402-555-2345");
$cust4 = array("First Name" => "Charles", "Last Name" => "Barkley", "Age" => 59, "Phone Number" => "402-555-6789");
$cust5 = array("First Name" => "Clyde", "Last Name" => "Drexler", "Age" => 60, "Phone Number" => "402-555-0123");
$cust6 = array("First Name" => "David", "Last Name" => "Robinson", "Age" => 57, "Phone Number" => "402-555-4567");
$cust7 = array("First Name" => "Patrick", "Last Name" => "Ewing", "Age" => 60, "Phone Number" => "402-555-8901");
$cust8 = array("First Name" => "Karl", "Last Name" => "Malone", "Age" => 59, "Phone Number" => "402-555-9876");
$cust9 = array("First Name" => "John", "Last Name" => "Stockton", "Age" => 60, "Phone Number" => "402-555-5432");
$cust10 = array("First Name" => "Scottie", "Last Name" => "Pippen", "Age" => 56, "Phone Number" => "402-555-1098");
$cust11 = array("First Name" => "Chris", "Last Name" => "Mullen", "Age" => 59, "Phone Number" => "402-555-1379");
$cust12 = array("First Name" => "Christian", "Last Name" => "Laettner", "Age" => 53, "Phone Number" => "402-555-2684");
$customers = array($cust1, $cust2, $cust3, $cust4, $cust5, $cust6, $cust7, $cust8, $cust9, $cust10, $cust11, $cust12);

$arrlength = count($customers);
$num = 0;

echo "There are " . $arrlength . " total customers, according to the count() method.";
echo "<br/><br/>";
foreach ($customers as $person) {
    $num += 1;
    echo "<b>Customer " . $num . ":</b><br/>";
    foreach ($person as $x => $x_value) {
        echo $x . ": ". $x_value;
        echo "<br/>";
    }
    echo "<br/>";
}
?>
<hr>
<h3>Sorted in Ascending Order by Phone Number</h3>
<b>Used array_column() and array_multisort() methods</b>
<br/><br/>
<?php
$phone_number = array_column($customers, "Phone Number");
array_multisort($phone_number, $customers);
foreach ($customers as $person) {
    foreach ($person as $x => $x_value) {
        echo $x . ": " . $x_value;
        echo "<br/>";
    }
    echo "<br/>";
}
?>
<hr>
<h3>Sorted in Descending Order by Last Name</h3>
<b>Sorted using array_multisort(), only returning First Name and Last Name</b>
<br/><br/>
<?php
$last_name = array_column($customers, "Last Name", "First Name");
array_multisort($last_name, SORT_DESC);
foreach ($last_name as $x => $x_value) {
    echo $x . " " . $x_value;
    echo "<br/>";
}
echo "<br/>";
?>
<hr>
<h3>Youngest and Oldest</h3>
<b>Sorted by Age ascending using asort(), then used array_shift() and array_pop() to display the youngest and oldest ages, respectively. </b>
<br/><br/>
<?php
$age = array_column($customers, "Age");
asort($age);
echo "The youngest customer is " . array_shift($age) . " years old.";
echo "<br/>";
echo "The oldest customer is " . array_pop($age) . " years old.";
echo "<br/><br/>";
?>
<hr>
<h3>60+</h3>
<b>Sorted by Age, then used the array_slice() function to only display customers with age >= 60 </b>
<br/><br/>
<?php
$age2 = array_column($customers, "Age", "Last Name");
array_multisort($age2);
$over_sixty = array_slice($age2, 7);
foreach ($over_sixty as $x => $x_value) {
    echo $x . " " . $x_value;
    echo "<br/>";
}
echo "<br/>";
?>
<hr>
<h3>In Array</h3>
<b>Uses in_array() to check if anyone named LeBron was a customer.</b>
<br/><br/>
<?php
$var = "Lebron";
if (in_array($var, $customers)) {
    echo $var . " was a customer.";
}
else {
    echo $var . " was not a customer.";
}
?>
</body>
</html>