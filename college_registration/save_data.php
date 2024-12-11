<?php
// The Below commented code is used for Debugging
// echo "save_data.php is reached.<br>"; 
// if ($_SERVER["REQUEST_METHOD"] == "POST") 
// { 
//     echo "Form submitted.<br>"; 
//     var_dump($_POST);
// }
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_registration";

$conn = new mysqli($servername, $username, $password, $dbname);

// The Below commented code is used for Debugging
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } else {
//     echo "Connected successfully<br>";
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // The Below commented code is used for Debugging
    // echo "Form submitted successfully.<br>";
    // var_dump($_POST);

    $name = $_POST['name'];
    $education_qualification = $_POST['education_qualification'];
    $year = $_POST['year'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $college_name = $_POST['college_name'];
    $phone_no = $_POST['phone_no'];
    $email_id = $_POST['email_id'];
    $events = implode(", ", $_POST['events']);
    $date_of_registration = $_POST['date_of_registration'];

    $sql = "INSERT INTO registrations (name, education_qualification, year, dob, gender, college_name, phone_no, email_id, events, date_of_registration)
    VALUES ('$name', '$education_qualification', '$year', '$dob', '$gender', '$college_name', '$phone_no', '$email_id', '$events', '$date_of_registration')";

    // The Below commented code is used for Debugging
    // echo $sql . "<br>";

    if ($conn->query($sql) === TRUE) {
        echo "Form is Submitted Successfully.<br>";
        echo "You can now exit the page...<br>";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
