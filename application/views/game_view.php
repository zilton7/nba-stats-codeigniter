<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
</head>

<body>

    <?php foreach ($games_data as $game) {
    if ($game->league == 'standard') {?>
    <div>
        <p><b><?=$game->vTeam->fullName . ' ' . $game->vTeam->score->points . ' - ' .
        ' ' . $game->hTeam->score->points . ' ' . $game->hTeam->fullName;?></b>
        </p>

        <p><b>Arena: </b><?=$game->arena;?></p>

        <p><a href="<?=base_url() . 'games/stats/' . $game->gameId?>">
                View Stats</a></p>

        <?php
}?>
    </div>
    <?
}
?>

</body>

</html>