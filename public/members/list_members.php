<?php
include_once "../../config/database.php";

$database = new Database();
$conn = $database->getConnection();

$query = "SELECT * FROM members";
$stmt = $conn->prepare($query);
$stmt->execute();

echo "<h1>Lista Membrilor</h1>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Prenume</th><th>Nume</th><th>Email</th><th>Profesie</th><th>Companie</th><th>LinkedIn</th><th>Status</th><th>Creat la</th></tr>";

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    echo "<td>{$row['first_name']}</td>";
    echo "<td>{$row['last_name']}</td>";
    echo "<td>{$row['email']}</td>";
    echo "<td>{$row['profession']}</td>";
    echo "<td>{$row['company']}</td>";
    echo "<td><a href='{$row['linkedin_profile']}' target='_blank'>LinkedIn</a></td>";
    echo "<td>{$row['status']}</td>";
    echo "<td>{$row['created_at']}</td>";
    echo "</tr>";
}
echo "</table>";
?>
