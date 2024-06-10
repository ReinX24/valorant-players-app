<?php

$pdo =  require_once "database.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $player_id = $_GET["player_id"];

    $get_player_info_sql =
        "SELECT
        *
    FROM
        players
    WHERE
        id = :id";

    $statement = $pdo->prepare($get_player_info_sql);

    $statement->bindValue(":id", $player_id);

    $statement->execute();

    $player = $statement->fetch(PDO::FETCH_ASSOC);
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $in_game_name = $_POST["in_game_name"];
    $name = $_POST["name"];
    $team = $_POST["team"];
    $age = $_POST["age"];
    $join_date = $_POST["join_date"];
    $region = $_POST["region"];

    $update_player_sql =
        "UPDATE
            players
        SET
            in_game_name = :name,
            name = :name,
            team = :team,
            age = :age,
            join_date = :join_date,
            region = :region
        WHERE
            id = :id";

    $statement = $pdo->prepare($update_player_sql);

    $statement->bindValue(":in_game_name", $id);
    $statement->bindValue(":name", $name);
    $statement->bindValue(":team", $team);
    $statement->bindValue(":age", $age);
    $statement->bindValue(":join_date", $join_date);
    $statement->bindValue(":region", $region);

    $statement->bindValue(":id", $id);

    if ($statement->execute()) {
        header("Location: show_players.php");
    }
}

?>

<?php require_once "includes/header.php"; ?>

<div class="container">
    <h1 class="my-4">Edit Player Information</h1>

    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="POST">
        <div class="mb-4">
            <label for="in_game_name" class="form-label">In-game name</label>
            <input type="text" name="in_game_name" class="form-control" value="<?= $player["in_game_name"]; ?>">
        </div>

        <div class="mb-4">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="<?= $player["name"]; ?>">
        </div>

        <div class="mb-4">
            <label for="team" class="form-label">Team</label>
            <input type="text" name="team" class="form-control" value="<?= $player["team"]; ?>">
        </div>

        <div class="mb-4">
            <label for="age" class="form-label">Age</label>
            <input type="number" name="age" class="form-control" value="<?= $player["age"]; ?>">
        </div>

        <div class="mb-4">
            <label for="region" class="form-label">Region</label>
            <input type="text" name="region" class="form-control" value="<?= $player["region"]; ?>">
        </div>

        <div class="mb-4">
            <label for="join_date" class="form-label">Join Date</label>
            <input type="date" name="join_date" class="form-control" value="<?= $player["join_date"]; ?>">
        </div>

        <input type="hidden" name="id" value="<?= $player["id"]; ?>">

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="show_players.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<?php require_once "includes/footer.php"; ?>