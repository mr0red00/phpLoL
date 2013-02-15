<?php

include 'LoLClient.php';

$client = new LoLClient('Username', 'password');
var_dump($client->getSummonerByName("SummonerName"));
