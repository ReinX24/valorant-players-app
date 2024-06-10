<?php

$current_page = "about_players";

$pdo = require_once "database.php";

$describe_table_sql =
    "DESCRIBE players";

$statement = $pdo->prepare($describe_table_sql);

$statement->execute();

$table_description = $statement->fetchAll(PDO::FETCH_ASSOC);

$count_records_sql =
    "SELECT COUNT(*) FROM players";

$statement = $pdo->prepare($count_records_sql);

$statement->execute();

$record_count = $statement->fetch(PDO::FETCH_ASSOC);

// echo "<pre>";
// var_dump($table_description);
// echo "</pre>";
?>

<?php require_once "includes/header.php"; ?>

<div class="container">

    <div class="container my-4">
        <h4 class="fw-bold">Players Table Structure</h4>
        <table class="table table-bordered border border-secondary-subtle">
            <thead>
                <tr>
                    <th>Field</th>
                    <th>Type</th>
                    <th>Null</th>
                    <th>Key</th>
                    <th>Default</th>
                    <th>Extra</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($table_description as $row) : ?>
                    <tr>
                        <th><?= $row["Field"]; ?></th>
                        <td><?= $row["Type"]; ?></td>
                        <td><?= $row["Null"]; ?></td>
                        <td><?= $row["Key"]; ?></td>
                        <td><?= $row["Default"] ?? "NULL"; ?></td>
                        <td><?= $row["Extra"]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <p>The structure of the players table, information gathered by using DESCRIBE on the players table.</p>
    </div>

    <div class="container my-4">
        <h4 class="fw-bold">Players Table Information</h4>
        <p>Database name: valorant_players_db</p>
        <p>Table name: players</p>
        <p>Rows / Records: <?= $record_count["COUNT(*)"] ?></p>
    </div>

    <div class="container my-4">
        <h4 class="fw-bold">Group 8 Members</h4>
        <ul class="list-group">
            <li class="list-group-item active">Rein Solis (Leader)</li>
            <li class="list-group-item">Jhuvan Caraulia</li>
            <li class="list-group-item">John Wayne Diaz</li>
            <li class="list-group-item">Nathaniel Roquiza</li>
            <li class="list-group-item">Norman Jay Tibule</li>
            <li class="list-group-item">Janelle Ylagan</li>
        </ul>
    </div>

</div>

<?php require_once "includes/footer.php"; ?>