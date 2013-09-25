<?php

require_once 'vendor/autoload.php';

use zlokomatic\phpLoL\LoLClient;

$client = new LoLClient('Username', 'Password', 'NA' );
var_dump($client->getAggregatedStats(12345, 'CLASSIC', 'CURRENT'));

$summonerId = 12345;
$leagues = $client->getAllLeaguesForPlayer($summonerId);
$leagues = $leagues["summonerLeagues"];

foreach($leagues as $leagueArray){
    $leagueArray = $leagueArray->getAmfData();
    echo "League: " . $leagueArray['queue'] . " - " . $leagueArray['name'] . " - " . $leagueArray['tier'] . " - " . $leagueArray['requestorsRank'] . "\n";
}
