<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
</head>

<body>

    <table id="standings-table" class="table table-striped table-bordered table-hover sortable">
        <thead>
            <tr>
                <th class="th-sm" title="Wins">Away Team</th>
                <th class="th-sm" title="Loss"></th>
                <th class="th-sm" title="Loss">Home Team</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <!-- Load away team info from db using teamId -->
                    <?php foreach ($teams_data as $team_data): ?>
                    <?php if ($team_data->teamId == $statistics[0]->teamId): ?>
                    <img src="<?php echo base_url(); ?>assets/images/logos/teams/<?=$team_data->shortName;?>.gif"
                        height="30px" alt="<?=$team_data->fullName;?> logo">
                    <b>
                        <?=$team_data->fullName?>
                    </b>
                    <?endif;?>
                    <?endforeach;?>
                </td>
                <td>
                    <?=$statistics[0]->points;?>
                    - <b></b><?=$statistics[1]->points;?>
                </td>
                <td>
                    <!-- Load away home info from db using teamId -->
                    <?php foreach ($teams_data as $team_data): ?>
                    <?php if ($team_data->teamId == $statistics[1]->teamId): ?>
                    <img src="<?php echo base_url(); ?>assets/images/logos/teams/<?=$team_data->shortName;?>.gif"
                        height="30px" alt="<?=$team_data->fullName;?> logo">
                    <b>
                        <?=$team_data->fullName?>
                    </b>
                    <?endif;?>
                    <?endforeach;?>
                </td>
            <tr>
                <!-- Show FG M/A plus calculate the percentage -->
                <td>
                    <?=$statistics[0]->fgm . '/' . $statistics[0]->fga . ' (' . number_format((float) ($statistics[0]->fgm / $statistics[0]->fga) * 100, 2, '.', '') . '%)';?>
                </td>
                <td><b>FGs Made/Attempted</b></td>
                <td>
                    <?=$statistics[1]->fgm . '/' . $statistics[1]->fga . ' (' . number_format((float) ($statistics[1]->fgm / $statistics[1]->fga) * 100, 2, '.', '') . '%)';?>
                </td>
            </tr>
            <tr>
                <!-- FT M/A plus calculate the percentage -->
                <td>
                    <?=$statistics[0]->ftm . '/' . $statistics[0]->fta . ' (' . number_format((float) ($statistics[0]->ftm / $statistics[0]->fta) * 100, 2, '.', '') . '%)';?>
                </td>
                <td><b>FTs Made/Attempted</b></td>
                <td>
                    <?=$statistics[1]->ftm . '/' . $statistics[1]->fta . ' (' . number_format((float) ($statistics[1]->ftm / $statistics[1]->fta) * 100, 2, '.', '') . '%)';?>
                </td>
            </tr>
            <tr>
                <!-- TP M/A plus calculate the percentage -->
                <td>
                    <?=$statistics[0]->tpm . '/' . $statistics[0]->tpa . ' (' . number_format((float) ($statistics[0]->tpm / $statistics[0]->tpa) * 100, 2, '.', '') . '%)';?>
                </td>
                <td><b>3-Pointers Made/Attempted</b></td>
                <td>
                    <?=$statistics[1]->tpm . '/' . $statistics[1]->tpa . ' (' . number_format((float) ($statistics[1]->tpm / $statistics[1]->tpa) * 100, 2, '.', '') . '%)';?>
                </td>
            </tr>
            <tr>
                <td>
                    <?=$statistics[0]->offReb;?>
                </td>
                <td><b>Offensive Rebounds</b></td>
                <td>
                    <?=$statistics[1]->offReb;?>
                </td>
            <tr>
            <tr>
                <td>
                    <?=$statistics[0]->defReb;?>
                </td>
                <td><b>Defensive Rebounds</b></td>
                <td>
                    <?=$statistics[1]->defReb;?>
                </td>
            <tr>
            <tr>
                <td>
                    <?=$statistics[0]->assists;?>
                </td>
                <td><b>Assists</b></td>
                <td>
                    <?=$statistics[1]->assists;?>
                </td>
            <tr>
            <tr>
                <td>
                    <?=$statistics[0]->pFouls;?>
                </td>
                <td><b>Fouls</b></td>
                <td>
                    <?=$statistics[1]->pFouls;?>
                </td>
            <tr>
            <tr>
                <td>
                    <?=$statistics[0]->steals;?>
                </td>
                <td><b>Steals</b></td>
                <td>
                    <?=$statistics[1]->steals;?>
                </td>
            <tr>
            <tr>
                <td>
                    <?=$statistics[0]->turnovers;?>
                </td>
                <td><b>Turnovers</b></td>
                <td>
                    <?=$statistics[1]->turnovers;?>
                </td>
            <tr>
            <tr>
                <td>
                    <?=$statistics[0]->blocks;?>
                </td>
                <td><b>Blocks</b></td>
                <td>
                    <?=$statistics[1]->blocks;?>
                </td>
            <tr>
            <tr>
                <td><?=$statistics[0]->fastBreakPoints;?></td>
                <td><b>Fast Break Points</b></td>
                <td><?=$statistics[1]->fastBreakPoints;?></td>
            </tr>
            <tr>
                <td>
                    <?=$statistics[0]->pointsInPaint;?>
                </td>
                <td><b>Points in Paint</b></td>
                <td>
                    <?=$statistics[1]->pointsInPaint;?>
                </td>
            </tr>
            <tr>
                <td>
                    <?=$statistics[0]->biggestLead;?>
                </td>
                <td><b>Points in Paint</b></td>
                <td>
                    <?=$statistics[1]->biggestLead;?>
                </td>
            </tr>
        </tbody>
    </table>


    </div>

</body>

</html>