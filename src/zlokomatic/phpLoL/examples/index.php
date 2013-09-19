<?php

require_once 'vendor/autoload.php';

use zlokomatic\phpLoL\LoLClient;

$client = new LoLClient('Username', 'Password', 'NA' );
var_dump($client->getAggregatedStats(12345, 'CLASSIC', 'CURRENT'));
