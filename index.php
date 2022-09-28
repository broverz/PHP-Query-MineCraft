<?php
require_once('query.php');

$server = new Query('localhost', 25565, 3);
$server->connect();

$info = $server->get_info();
print_r($info);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Minecraft IP : <?= $info['hostip'] ?></title>
</head>

<body>
    <?php if ($info === false) { ?>
        <h1 style="color: red">OFFLINE</h1>
    <?php } else { ?>
        <h1 style="color: greenyellow">ONLINE</h1>
        <h1>Slots : <?= $info['numplayers'] ?> / <?= $info['maxplayers'] ?></h1>
        <h1>Players : <?= implode(', ', $info['players']) ?></h1>
    <?php } ?>
</body>

</html>
