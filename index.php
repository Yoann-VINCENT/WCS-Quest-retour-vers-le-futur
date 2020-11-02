<?php
$presentTime = new DateTime('now');
$destinationTime = new DateTime();
$destinationTime->setDate (2075,10,14);
$destinationTime->setTime (23,45,0,0);
$interval = $presentTime->diff($destinationTime);
$minuteInterval = $interval->format ('%R%a') * 24 * 60;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retour vers le Turfu</title>
</head>
<body>
    <h2>Retour vers le Turfu !</h2>
    <div>
        <div><?=$destinationTime->format ('M d Y A g i'); ?></div>
        <h3>Destination Time</h3>
    </div>
    <div>
        <div><?=$presentTime->format ('M d Y A g i'); ?></div>
        <h3>Present Time</h3>
    </div>
    <div>
        <h2>Interval</h2>
        <p><?=$interval->format ('%R %Y ans %m mois %D jours %H heures et %I minutes'); ?></p>
        <p><?='Nom de Zeus ! ça fait ' . $minuteInterval . ' minutes !
        Marty, va chercher dans la réserve, il va nous falloir au mois ' . round($minuteInterval/10000) . ' litres de carburant !'; ?></p>
    </div>
</body>
</html>
