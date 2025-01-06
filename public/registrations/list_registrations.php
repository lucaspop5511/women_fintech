<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once "../../config/database.php";

$database = new Database();
$conn = $database->getConnection();

$query = "SELECT 
            er.id, 
            m.first_name, m.last_name, 
            e.title, 
            er.created_at 
          FROM event_registrations er
          JOIN members m ON er.member_id = m.id
          JOIN events e ON er.event_id = e.id";

$stmt = $conn->prepare($query);
$stmt->execute();

echo "<h1>Lista Înregistrărilor</h1>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Membru</th><th>Eveniment</th><th>Data Înregistrării</th></tr>";

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    echo "<td>{$row['first_name']} {$row['last_name']}</td>";
    echo "<td>{$row['title']}</td>";
    echo "<td>{$row['created_at']}</td>";
    echo "</tr>";
}
echo "</table>";
?>
