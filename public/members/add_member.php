<?php
include_once "../../config/database.php";
include_once "../../includes/header.php";

$database = new Database();
$db = $database->getConnection();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $query = "INSERT INTO members (first_name, last_name, email, profession, company, expertise, linkedin_profile) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $db->prepare($query);

    if ($stmt->execute([
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['profession'],
        $_POST['company'],
        $_POST['expertise'],
        $_POST['linkedin_profile']
    ])) {
        echo "<div class='alert alert-success'>Member added successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Failed to add member. Please try again.</div>";
    }
}
?>

<div class="container">
    <h2>Add Member</h2>
    <form method="POST">
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" class="form-control" id="first_name" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" class="form-control" id="last_name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>
        <div class="form-group">
            <label for="profession">Profession</label>
            <input type="text" name="profession" class="form-control" id="profession">
        </div>
        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" name="company" class="form-control" id="company">
        </div>
        <div class="form-group">
            <label for="expertise">Expertise</label>
            <textarea name="expertise" class="form-control" id="expertise"></textarea>
        </div>
        <div class="form-group">
            <label for="linkedin_profile">LinkedIn Profile</label>
            <input type="url" name="linkedin_profile" class="form-control" id="linkedin_profile">
        </div>
        <button type="submit" class="btn btn-primary">Add Member</button>
    </form>
</div>

<?php
include_once "../../includes/footer.php";
?>
