<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!--  ["teamId"]=> string(2) "26" ["win"]=> string(2) "30" ["loss"]=> string(2) "35"
["gamesBehind"]=> string(4) "23.0" ["lastTenWin"]=> string(1) "6" ["lastTenLoss"]=> string(1) "4"
["streak"]=> string(1) "3" ["seasonYear"]=> string(4) "2019" ["conference"]=> object(stdClass)#16 (4)
{ ["name"]=> string(4) "east" ["rank"]=> string(1) "8" ["win"]=> string(2) "19" ["loss"]=> string(2) "18" }
["division"]=> object(stdClass)#17 (5) { ["name"]=> string(9) "southeast" ["rank"]=> string(1) "2"
["win"]=> string(1) "9" ["loss"]=> string(1) "5" ["GamesBehind"]=> string(4) "11.0" } ["winPercentage"]=>
string(4) ".462" ["lossPercentage"]=> string(4) ".538" ["home"]=> object(stdClass)#18 (2) { ["win"]=> string(2) "16"
["loss"]=> string(2) "15" } ["away"]=> object(stdClass)#19 (2) { ["win"]=> string(2) "14" ["loss"]=> string(2) "20" }
["winStreak"]=> string(1) "1" ["tieBreakerPoints"]=> string(0) "" }  -->

<body>
    <?php if ($conference == 'east') {
    $conf = 'Eastern';
} else {
    $conf = 'Western';
}?>
    <span>
        <img src="<?php echo base_url(); ?>assets/images/logos/conferences/<?=$conference;?>.png" height="70px"
            alt="$conf logo">
        <h1 style='display:inline;'> <?php echo $year . ' ' . $conf; ?> Conference Standings</h1>
    </span>

    <form id="standings-form" class="form-horizontal" role="form" method="POST">
        <div>
            <div class="form-group col-md-6">
                <select name="year-selector" id="year-selector" class="form-control">
                    <option value="2018" <?php if ($year == "2018") {
    echo 'selected="selected" ';
}
?>>2018</option>
                    <option value="2019" <?php if ($year == "2019") {
    echo 'selected="selected" ';
}
?>>2019</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <select name="conference-selector" id="conference-selector" class="form-control">
                    <option value="east" <?php if ($conference == "east") {
    echo 'selected="selected" ';
}
?>>Eastern</option>
                    <option value="west" <?php if ($conference == "west") {
    echo 'selected="selected" ';
}
?>>Western</option>
                </select>
            </div>
        </div>

    </form>

    <table id="standings-table" class="table table-striped table-bordered table-hover sortable">
        <thead>
            <tr>
                <th class="th-sm" title="Position" data-defaultsort="asc">#</th>
                <th class="th-sm" title="Team Name">Team</th>
                <th class="th-sm" title="Wins">W</th>
                <th class="th-sm" title="Loss">L</th>
                <th class="th-sm" title="Games Behind">GB</th>
                <th class="th-sm" title="Last Ten">L10</th>
                <th class="th-sm" title="Streak">Str</th>
                <th class="th-sm" title="Win Percentage">W%</th>

            </tr>
        </thead>
        <tbody>
            <?php
// var_dump(gettype($standings));

foreach ($standings as $standing) {
    ?>
            <tr>

                <?
    foreach ($teams_data as $team_data) {
        if ($team_data->teamId == $standing->teamId) {?>
                <td>
                    <?=$standing->conference->rank;?>
                </td>
                <td>
                    <div>
                        <img src="<?php echo base_url(); ?>assets/images/logos/teams/<?=$team_data->shortName;?>.gif"
                            height="30px" alt="<?=$team_data->fullName;?> logo">
                        <h4 style='display:inline;'><?=$team_data->fullName;?></h4>
                    </div>
                </td>
                <?
        }

    }
    ?>
                </td>
                <td>
                    <?=$standing->win;?>
                </td>
                <td>
                    <?=$standing->loss;?>
                </td>
                <td>
                    <?=$standing->gamesBehind;?>
                </td>
                <td>
                    <?=$standing->lastTenWin;?>-<?=$standing->lastTenLoss;?>
                </td>
                <td>
                    <?=$standing->streak;?>
                </td>
                <td>
                    <?=$standing->winPercentage;?>
                </td>

            </tr>
            <?php
}
?>
        </tbody>
    </table>



</body>

</html>