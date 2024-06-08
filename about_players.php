<?php

$pdo = require_once "database.php";

$describe_table_sql =
    "DESCRIBE players";

$statement = $pdo->prepare($describe_table_sql);

$statement->execute();

$table_description = $statement->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
var_dump($table_description);
echo "</pre>";
?>

<?php require_once "header.php"; ?>

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
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem nulla quae architecto accusamus animi ipsum obcaecati delectus nostrum? Modi sit, rem unde quis debitis rerum. Assumenda qui ipsum incidunt blanditiis quas voluptate consequatur, reprehenderit repudiandae dolore autem veritatis, exercitationem, ipsam sint est maxime laboriosam corporis? Reiciendis omnis in magni veniam.</p>
    </div>

    <div class="container my-4">
        <h4 class="fw-bold">Players Table Fields</h4>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem nulla quae architecto accusamus animi ipsum obcaecati delectus nostrum? Modi sit, rem unde quis debitis rerum. Assumenda qui ipsum incidunt blanditiis quas voluptate consequatur, reprehenderit repudiandae dolore autem veritatis, exercitationem, ipsam sint est maxime laboriosam corporis? Reiciendis omnis in magni veniam.</p>
    </div>

    <div class="container my-4">
        <h4 class="fw-bold">Players Table Structure</h4>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem nulla quae architecto accusamus animi ipsum obcaecati delectus nostrum? Modi sit, rem unde quis debitis rerum. Assumenda qui ipsum incidunt blanditiis quas voluptate consequatur, reprehenderit repudiandae dolore autem veritatis, exercitationem, ipsam sint est maxime laboriosam corporis? Reiciendis omnis in magni veniam.</p>
    </div>

</div>

<?php require_once "footer.php"; ?>