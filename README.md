This is a very basic php client for League of Legends

=====================================================

I just wanted to do something in php and studied the lolrtmpsclient to get this working, so big props to this project. Also i had to modify the excellent SabreAMF lib which is also in this Repo.

-----------------------------------------------------

**To get started change the $clientVersion in LoLConfig.php according to the current current patch version (Its located in the upper left corner in the client)**

Example usage:

$client = new LoLClient('Username', 'password');

var_dump($client->getSummonerByName("SummonerName"));


Available functions:

getSummonerByName($name)

getAllPublicSummonerDataByAccount($id)

getSummonerNames($ids)

getRecentGames($accountId)

getPlayerStatsByAccountId($accountId)

getAggregatedStats($accountId)
