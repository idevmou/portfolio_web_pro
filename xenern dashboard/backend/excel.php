<?php

// Database connection parameters
$host = 'localhost';
$dbname = 'xenerninfotech';
$user = 'root';
$password = '';
$tableName = 'webdesign';

// Create a database connection
$mysqli = new mysqli($host, $user, $password, $dbname);

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Fetch data from the database
$query = "SELECT `sno`, `name`, `email`, `collegename`, `degree`, `course`, `passedout`, `phone` FROM `webdesign`";
$result = $mysqli->query($query);

if (!$result) {
    die("Query failed: " . $mysqli->error);
}

// Fetch data into an array
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Close the database connection
$mysqli->close();

// Set headers for the Excel file
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="database_export.xls"');
header('Cache-Control: max-age=0');

// Output the Excel file
$output = fopen('php://output', 'w');

// Add header row
$columns = array_keys($data[0]);
fputcsv($output, $columns, "\t");

// Add data rows
foreach ($data as $row) {
    fputcsv($output, $row, "\t");
}

fclose($output);
exit;
