<?php

require_once 'vendor/autoload.php';

use zlokomatic\phpLoL\LoLClient;

$client = new LoLClient('Username', 'Password', 'NA' );

$summoner = $client->getSummonerByName("SummonerName");
$publicSummonerData = $client->getAllPublicSummonerDataByAccount($summoner->getAcctId());

$names = $client->getSummonerNames(array($summoner->getAcctId(), 123456));

$games = $client->getRecentGames($summoner->getAcctId());

$stats = $client->getPlayerStatsByAccountId($summoner->getAcctId());

$aggStats = $client->getAggregatedStats($summoner->getAcctId(), 'CLASSIC', 'CURRENT');

$leagues = $client->getAllLeaguesForPlayer($summoner->getSummonerId());
