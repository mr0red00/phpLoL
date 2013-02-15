This is a very basic php client for League of Legends

=====================================================

I just wanted to do something in php and studied the lolrtmpsclient to get this working, so big props to this project. Also i had to modify the excellent SabreAMF lib which is also in this Repo.

-----------------------------------------------------
Example usage:

$client = new LoLClient('Username', 'password');
var_dump($client->getSummonerByName("SummonerName");
