
<?php

require 'model.php';

$players = new players();

$result = $players->getAllPlayers();

include 'view.php';

?>