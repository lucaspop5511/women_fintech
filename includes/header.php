<?php
$base_url = "http://" . $_SERVER['HTTP_HOST'] . "/women_fintech/public";
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women in FinTech</title>
    <link rel="stylesheet" href="<?php echo $base_url; ?>/../assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?php echo $base_url; ?>/index.php">Women in FinTech</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_url; ?>/members/list_members.php">Members</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $base_url; ?>/events/list_events.php">Events</a>
                    </li>
                </ul>
                <button id="darkModeToggle" class="btn btn-secondary ml-auto" title="Toggle Dark Mode">
                    <span id="darkModeIcon" class="material-icons">dark_mode</span>
                </button>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
