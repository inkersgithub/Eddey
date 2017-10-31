<?php
$dbHost = 'localhost';
$dbUsername = 'user_anoop';
$dbPassword = 'admin';
$dbName = 'eddey_db';
//connect with the database
$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $db->query("SELECT * FROM colleges WHERE Title LIKE '%".$searchTerm."%' ORDER BY id ASC LIMIT 12");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['Title'];
}
//return json data
echo json_encode($data);
?>
