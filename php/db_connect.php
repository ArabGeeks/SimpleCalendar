<?php
// db_connect.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "calendarDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT eventName, calendar, color, date FROM Events";
$result = $conn->query($sql);

$events = array();
while ($row = $result->fetch_assoc()) {
    $events[] = $row;
}

echo json_encode($events);

$conn->close();
/*
$date = date('Y-m-d'); // current date in 'YYYY-MM-DD' format
$sql = "INSERT INTO Events (eventName, calendar, color, date) VALUES ('Event Name', 'Calendar Name', 'blue', '$date')";


*/
?>