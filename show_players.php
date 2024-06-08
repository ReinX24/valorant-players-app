<?php

$pdo = require_once "database.php";

// TODO: implement other search methods
$in_game_name = $_GET["search_text"] ?? "";

if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($in_game_name)) {
    $get_by_in_game_name_sql =
        "SELECT
            *
        FROM
            players
        WHERE
            in_game_name
        LIKE
            :in_game_name";

    $statement = $pdo->prepare($get_by_in_game_name_sql);

    $statement->bindValue(":in_game_name", "%" . $in_game_name . "%");

    $statement->execute();

    $all_players = $statement->fetchAll(PDO::FETCH_ASSOC);
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    $get_all_players_sql =
        "SELECT 
            * 
        FROM
            players";

    $statement = $pdo->prepare($get_all_players_sql);

    $statement->execute();

    $all_players = $statement->fetchAll(PDO::FETCH_ASSOC);
}

?>

<?php require_once "header.php"; ?>

<div class="container my-4">

    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="GET" class="d-flex align-items-center gap-2 my-4">
        <select name="search_choices" class="form-select w-25">
            <option name="">In-game name</option>
            <option name="">Name</option>
            <option name="">Team</option>
            <option name="">Age</option>
            <option name="">Region</option>
        </select>
        <input type="text" name="search_text" class="form-control w-25" value="<?= $_GET["search_text"] ?? "" ?>">
        <button type="search" class="btn btn-primary">Search</button>
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>In-game Name</th>
                <th>Name</th>
                <th>Age</th>
                <th>Team</th>
                <th>Region</th>
                <th>Join Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($all_players as $player) : ?>
                <tr>
                    <th><?= $player["id"]; ?></th>
                    <td><?= $player["in_game_name"]; ?></td>
                    <td><?= $player["name"]; ?></td>
                    <td><?= $player["team"]; ?></td>
                    <td><?= $player["age"]; ?></td>
                    <td><?= $player["region"]; ?></td>
                    <td><?= $player["join_date"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once "footer.php"; ?>