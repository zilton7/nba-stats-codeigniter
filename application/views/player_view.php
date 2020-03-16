<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player</title>
</head>

<body>
    <h2> <?=$player_data->firstName;?> <?=$player_data->lastName;?></h2>
    <?if ($team_data): ?>
    <div>
        <img src="<?php echo base_url(); ?>assets/images/logos/teams/<?=$team_data->shortName;?>.gif" height="30px"
            alt="<?=$team_data->fullName;?> logo">
        <h4 style='display:inline;'><?=$team_data->fullName;?>
        </h4>
    </div>
    <?endif;?>
    <p><b>DOB:</b> <?=$player_data->dateOfBirth;?></p>
    <p><b>Years Pro:</b>
        <?=date("Y") - $player_data->startNba;?>
    </p>
    <p><b>Country:</b> <?=$player_data->country;?></p>
    <p><b>Height:</b>
        <?if ($player_data->heightInMeters) {echo $player_data->heightInMeters . ' m';} else {echo '-';}
;?>
    </p>
    <p><b>Weight:</b>
        <?if ($player_data->heightInMeters) {echo $player_data->weightInKilograms . ' kg';} else {echo '-';}
;?>
    </p>


</body>

</html>