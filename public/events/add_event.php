<?php
include_once "../../config/database.php";
include_once "../../includes/header.php";

$database = new Database();
$db = $database->getConnection();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $query = "INSERT INTO events (name, date, location, description) VALUES (?, ?, ?, ?)";
    $stmt = $db->prepare($query);

    if ($stmt->execute([
        $_POST['name'],
        $_POST['date'],
        $_POST['location'],
        $_POST['description']
    ])) {
        echo "<div class='alert alert-success'>Event added successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Failed to add event. Please try again.</div>";
    }
}
?>

<div class="container">
    <h2>Add Event</h2>
    <form method="POST">
        <div class="form-group">
            <label for="name">Event Name</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <div class="form-group">
            <label for="date">Event Date</label>
            <input type="date" name="date" class="form-control" id="date" required>
        </div>
        <div class="form-group">
            <label for="location">Event Location</label>
            <input type="text" name="location" class="form-control" id="location" required>
        </div>
        <div class="form-group">
            <label for="description">Event Description</label>
            <textarea name="description" class="form-control" id="description" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Event</button>
    </form>
</div>

<?php
include_once "../../includes/footer.php";
?>
