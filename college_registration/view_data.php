<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM registrations";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Education Qualification</th>
    <th>Year</th>
    <th>D.O.B</th>
    <th>Gender</th>
    <th>College Name</th>
    <th>Phone No</th>
    <th>Email ID</th>
    <th>Events</th>
    <th>Date of Registration</th>
    </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["id"] . "</td>
        <td>" . $row["name"] . "</td>
        <td>" . $row["education_qualification"] . "</td>
        <td>" . $row["year"] . "</td>
        <td>" . $row["dob"] . "</td>
        <td>" . $row["gender"] . "</td>
        <td>" . $row["college_name"] . "</td>
        <td>" . $row["phone_no"] . "</td>
        <td>" . $row["email_id"] . "</td>
        <td>" . $row["events"] . "</td>
        <td>" . $row["date_of_registration"] . "</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
