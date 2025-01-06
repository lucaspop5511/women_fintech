<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once "../../config/database.php";

$database = new Database();
$conn = $database->getConnection();

$query = "SELECT * FROM events";
$stmt = $conn->prepare($query);
$stmt->execute();

echo "<h1>Lista Evenimentelor</h1>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Titlu</th><th>Descriere</th><th>Data</th><th>Locație</th><th>Creat la</th></tr>";

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    echo "<td>{$row['title']}</td>";
    echo "<td>{$row['description']}</td>";
    echo "<td>{$row['date']}</td>";
    echo "<td>{$row['location']}</td>";
    echo "<td>{$row['created_at']}</td>";
    echo "</tr>";
}
echo "</table>";
?>
