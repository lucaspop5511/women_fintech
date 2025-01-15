<?php
include_once "../../config/database.php";
include_once "../../includes/header.php";

$database = new Database();
$db = $database->getConnection();

$query = "SELECT * FROM events ORDER BY date ASC";
$stmt = $db->prepare($query);
$stmt->execute();
?>

<div class="container">
    <h2>Events</h2>
    <div class="row">
        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
            <div class="col-md-4">
                <div class="card member-card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($row['name']); ?></h5>
                        <p class="card-text">
                            <strong>Date:</strong> <?php echo htmlspecialchars($row['date']); ?><br>
                            <strong>Location:</strong> <?php echo htmlspecialchars($row['location']); ?><br>
                            <strong>Description:</strong> <?php echo htmlspecialchars($row['description']); ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<?php
include_once "../../includes/footer.php";
?>
