<!--
Ryan Songcuan
9/18/22
Module 7 Assignment
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>RyanForm.php</title>
</head>
<body>
<h1>Module 7: Forms</h1>
<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
$day = $_POST['day'];
$num = $_POST['num'];
$consent = $_POST['consent'];

$tried = ($_POST['tried'] == 'yes');

if ($tried) {
    $entered = (!empty($fname) && !empty($lname) && !empty($birthday) && !empty($email) && !empty($day) &&
        !empty($num) && !empty($consent));
}

$fnameTest = $lnameTest = $emailTest = $numTest = "";
$fnameErr = $lnameErr = $emailErr = $numErr = "";
if ($tried && $entered) {
    $fnameTest = test_input($fname);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fnameTest)) {
        $fnameErr = "Only letters and white space allowed in 'First Name' field<br>";
    }
    $lnameTest = test_input($lname);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lnameTest)) {
        $lnameErr = "Only letters and white space allowed in 'Last Name' field<br>";
    }
    $emailTest = test_input($email);
    if (!filter_var($emailTest, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format<br>";
    }
    if (is_int($num) == 1) {
        $numErr = "Only integers without decimals allowed in the 'Favorite Number' field<br>";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function daySelected($selection) {
    global $weekDay;
    if ($weekDay == $selection) {
        echo "selected";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') { ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <h3>User Profile</h3>
        <p>*All fields required</p>
        <!-- 1 --><label for="fname">First Name</label><br>
        <input type="text" id="fname" name="fname" value="<?php echo $fname; ?>">
        <span>&nbsp;<?php echo $fnameErr?></span><br><br>
        <!-- 2 --><label for="lname">Last Name</label><br>
        <input type="text" id="lname" name="lname">
        <span>&nbsp;<?php echo $lnameErr?></span><br><br>
        <!-- 3 --><label for="birthday">Date of Birth</label><br>
        <input type="date" id="birthday" name="birthday"><br><br>
        <!-- 4 --><label for="email">Email Address</label><br> <!-- https://www.w3schools.com/php/php_form_url_email.asp -->
        <input type="text" id="email" name="email">
        <span>&nbsp;<?php echo $emailErr?></span><br><br>
        <label for="day">What day of the week are you completing this form?<br>
            <!-- 5 --><select name="day">
                <option value="" disabled hidden selected>Choose Day of the Week</option>
                <option value="Sunday" <?php daySelected("Sunday");?> >Sunday</option>
                <option value="Monday" <?php daySelected("Monday");?> >Monday</option>
                <option value="Tuesday" <?php daySelected("Tuesday");?> >Tuesday</option>
                <option value="Wednesday" <?php daySelected("Wednesday");?> >Wednesday</option>
                <option value="Thursday" <?php daySelected("Thursday");?> >Thursday</option>
                <option value="Friday" <?php daySelected("Friday");?> >Friday</option>
                <option value="Saturday" <?php daySelected("Saturday");?> >Saturday</option>
            </select>
        </label><br><br>
        <!-- 6 --><label for="num">Enter your favorite number (no decimals)</label><br>
        <input type="number" id="num" name="num">
        <span>&nbsp;<?php echo $numErr?></span><br><br>
        <!-- 7 --><input type="checkbox" id="consent" name="consent" value="active"
            <?php if ($consent == "active") {echo "checked";} ?> >
        <label for="consent">I consent to the use of my personal data entered above</label><br><br>
        <input type="hidden" name="tried" value="yes">
        <input type="submit" value="<?php echo $tried ? "Continue" : "Submit"; ?>">
    </form>
<?php }
else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = "";
    $error = $fnameErr . $lnameErr . $emailErr . $emailErr . $numErr;
    if (!$entered) {
        echo "All fields must be completed for the form to be submitted.";
        echo "<br>";
        echo "Please go back, correct the errors, and try again.";
    }
    else if ($error != "") {
        echo $error;
        echo "Please go back, correct the errors, and try again.";
    }
    else {
        echo "<h3>Your Input</h3>";
        echo "Full name: " . $fname . " " . $lname;
        echo "<br>";
        echo "Date of Birth: " . $birthday;
        echo "<br>";
        echo "Email Address: " . $email;
        echo "<br>";
        echo "Today's Day of the Week: " . $day;
        echo "<br>";
        echo "Favorite Number: " . $num;
    }
}
else {
    die("Unable to process request");
} ?>
</body>
</html>