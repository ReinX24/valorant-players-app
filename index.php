<?php

$current_page = "index";

?>

<?php require_once "includes/header.php"; ?>

<div class="container my-5">
    <div class="p-5 text-center bg-body-tertiary rounded-3">
        <div class="d-flex justify-content-center">
            <img src="valorant_logo.png" class="bi mt-4 mb-3" height="200">
        </div>
        <h1 class="text-body-emphasis">Valorant Players Database</h1>
        <p class="col-lg-8 mx-auto fs-5 text-muted">
            This is a database consisting of Valorant Pro Players' information. This database contains the 'players' table.
        </p>
        <p class="col-lg-8 mx-auto fs-5 text-muted">
        </p>
        <div class="d-inline-flex gap-2 mb-5">
            <a class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" href="show_players.php">
                Players Table
            </a>
            <a class="btn btn-outline-secondary btn-lg px-4 rounded-pill" href="about_players.php">
                About Players Table
            </a>
        </div>
    </div>
</div>


<?php require_once "includes/footer.php"; ?>