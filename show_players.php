<?php

$current_page = "show_players";

$pdo = require_once "database.php";

$search_category = $_GET["search_choices"] ?? "";
$search_text = $_GET["search_text"] ?? "";

if ($search_category == "in_game_name") {
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

    $statement->bindValue(":in_game_name", "%" . $search_text . "%");

    $statement->execute();

    $all_players = $statement->fetchAll(PDO::FETCH_ASSOC);
} elseif ($search_category == "name") {
    $name = $_GET["search_text"] ?? "";
    $get_by_name_sql =
        "SELECT
            *
        FROM
            players
        WHERE
            name
        LIKE
            :name";

    $statement = $pdo->prepare($get_by_name_sql);

    $statement->bindValue(":name", "%" . $search_text . "%");

    $statement->execute();

    $all_players = $statement->fetchAll(PDO::FETCH_ASSOC);
} elseif ($search_category == "age") {
    $age = $_GET["search_text"] ?? "";
    $get_by_age_sql =
        "SELECT
            *
        FROM
            players
        WHERE
            age
        LIKE
            :age";

    $statement = $pdo->prepare($get_by_age_sql);

    $statement->bindValue(":age", "%" . $search_text . "%");

    $statement->execute();

    $all_players = $statement->fetchAll(PDO::FETCH_ASSOC);
} elseif ($search_category == "team") {
    $name = $_GET["search_text"] ?? "";
    $get_by_team_sql =
        "SELECT
            *
        FROM
            players
        WHERE
            team
        LIKE
            :team";

    $statement = $pdo->prepare($get_by_team_sql);

    $statement->bindValue(":team", "%" . $search_text . "%");

    $statement->execute();

    $all_players = $statement->fetchAll(PDO::FETCH_ASSOC);
} elseif ($search_category == "region") {
    $name = $_GET["search_text"] ?? "";
    $get_by_region_sql =
        "SELECT
            *
        FROM
            players
        WHERE
            region
        LIKE
            :region";

    $statement = $pdo->prepare($get_by_region_sql);

    $statement->bindValue(":region", "%" . $search_text . "%");

    $statement->execute();

    $all_players = $statement->fetchAll(PDO::FETCH_ASSOC);
} else {
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

<?php require_once "includes/header.php"; ?>

<div class="container my-4">
    <h4>Players</h4>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="GET" class="d-flex align-items-center gap-2 mt-4">
        <select name="search_choices" class="form-select w-25 border border-secondary">
            <option value="in_game_name" <?= $search_category == "in_game_name" ? "selected" : "" ?>>In-game name</option>
            <option value="name" <?= $search_category == "name" ? "selected" : "" ?>>Name</option>
            <option value="age" <?= $search_category == "age" ? "selected" : "" ?>>Age</option>
            <option value="team" <?= $search_category == "team" ? "selected" : "" ?>>Team</option>
            <option value="region" <?= $search_category == "region" ? "selected" : "" ?>>Region</option>
        </select>
        <input type="text" name="search_text" class="form-control w-25 border border-secondary" value="<?= $_GET["search_text"] ?? "" ?>">
        <button type="search" class="btn btn-primary">Search</button>
    </form>

    <a href="insert_player.php" class="btn btn-primary btn-sm mt-4">Insert Player Data</a>

    <table class="table table-bordered border border-secondary-subtle mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>In-game Name</th>
                <th>Name</th>
                <th>Age</th>
                <th>Team</th>
                <th>Region</th>
                <th>Join Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($all_players as $player) : ?>
                <tr>
                    <th><?= $player["id"]; ?></th>
                    <td><?= $player["in_game_name"]; ?></td>
                    <td><?= $player["name"]; ?></td>
                    <td><?= $player["age"]; ?></td>
                    <td><?= $player["team"]; ?></td>
                    <td><?= $player["region"]; ?></td>
                    <td><?= $player["join_date"]; ?></td>
                    <td class="d-flex justify-content-center gap-2">
                        <a href="edit_player.php?player_id=<?= $player["id"]; ?>" class="btn btn-secondary btn-sm">Edit</a>
                        <a href="delete_player.php?player_id=<?= $player["id"]; ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once "includes/footer.php"; ?>