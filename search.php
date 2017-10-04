<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'eddey_db';
//connect with the database
$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $db->query("SELECT * FROM colleges WHERE college_institution LIKE '%".$searchTerm."%' ORDER BY id ASC LIMIT 12");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['college_institution'];
}
//return json data
echo json_encode($data);
?>
