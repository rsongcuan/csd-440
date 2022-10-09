<!--
Ryan Songcuan
10/2/2022
Module 10 Assignment
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>RyanForm.php</title>
</head>
<body>
<h1>Module 10: JSON</h1>
<h3>This program encodes and displays the form data in JSON format.</h3>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') { ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <h3>User Profile</h3>
        <!-- 1 --><label for="fName">First Name</label><br>
        <input type="text" id="fName" name="fName"><br><br>
        <!-- 2 --><label for="mName">Middle Name</label><br>
        <input type="text" id="mName" name="mName"><br><br>
        <!-- 3 --><label for="lName">Last Name</label><br>
        <input type="text" id="lName" name="lName"><br><br>
        <!-- 4 --><label for="birthday">Date of Birth</label><br>
        <input type="date" id="birthday" name="birthday"><br><br>
        <!-- 5 --><label for="num">Enter your favorite number (no decimals)</label><br>
        <input type="number" id="num" name="num"><br><br>
        <!-- 6 --><label for="animal">Favorite Animal</label><br>
        <input type="text" id="animal" name="animal"><br><br>
        <!-- 7 --><label for="sport">Favorite Sport</label><br>
        <input type="text" id="sport" name="sport"><br><br>
        <label for="day">What day of the week are you completing this form?<br>
            <!-- 8--><select name="day">
                <option value="" disabled hidden selected>Choose Day of the Week</option>
                <option value="Sunday">Sunday</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
            </select>
        </label><br><br>
        <input type="submit" value="Submit">
    </form>
<?php }
else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fName = $_POST['fName'];
    $mName = $_POST['mName'];
    $lName = $_POST['lName'];
    $birthday = $_POST['birthday'];
    $num = $_POST['num'];
    $animal = $_POST['animal'];
    $sport = $_POST['sport'];
    $day = $_POST['day'];

    $user = array("First Name"=>$fName, "Middle Name"=>$mName, "Last Name"=>$lName, "Birthday"=>$birthday,
        "Favorite Number"=>$num, "Favorite Animal"=>$animal,"Favorite Sport"=>$sport, "Day of the Week"=>$day);


    try {
        $jsonData = json_encode($user, JSON_PRETTY_PRINT, JSON_THROW_ON_ERROR);
        echo "<pre>" . $jsonData . "</pre>";
    } catch (JsonException $e) {
        $e->getMessage();
        $e->getCode();
    }
}
else {
    die("Unable to process request");
} ?>
</body>
</html>