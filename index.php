<?php

$pdo = require_once "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $in_game_name = $_POST["in_game_name"];
    $name = $_POST["name"];
    $team = $_POST["team"];
    $age = $_POST["age"];
    $join_date = $_POST["join_date"];
    $region = $_POST["region"];

    $insert_sql =
        "INSERT INTO 
            players (in_game_name, name, team, age, region, join_date)
        VALUES
            (:in_game_name, :name, :team, :age, :region, :join_date)";

    $statement = $pdo->prepare($insert_sql);

    $statement->bindValue(":in_game_name", $in_game_name);
    $statement->bindValue(":name", $name);
    $statement->bindValue(":team", $team);
    $statement->bindValue(":age", $age);
    $statement->bindValue(":region", $region);
    $statement->bindValue(":join_date", $join_date);

    $statement->execute();
}

?>

<?php require_once "header.php"; ?>

<div class="container">
    <h1 class="my-4">Valorant Players</h1>

    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="POST">
        <div class="mb-4">
            <label for="in_game_name" class="form-label">In-game name</label>
            <input type="text" name="in_game_name" class="form-control">
        </div>

        <div class="mb-4">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-4">
            <label for="team" class="form-label">Team</label>
            <input type="text" name="team" class="form-control">
        </div>

        <div class="mb-4">
            <label for="age" class="form-label">Age</label>
            <input type="number" name="age" class="form-control">
        </div>

        <div class="mb-4">
            <label for="region" class="form-label">Region</label>
            <input type="text" name="region" class="form-control">
        </div>

        <div class="mb-4">
            <label for="join_date" class="form-label">Join Date</label>
            <input type="date" name="join_date" class="form-control">
        </div>

        <button type="submit">Submit</button>
    </form>
</div>

<?php require_once "footer.php"; ?>