<?php
// Add Group To All Online User
// thanks to https://r4p3.net/members/kalle.2563/
//connection variable
$port="9987";
$psw="Query Password";
$user="serveradmin";
$ip="127.0.0.1";
$qport="10011";
$botnick="Werty";

//request libraries
require_once("libraries/TeamSpeak3/TeamSpeak3.php");
//connect to ts3
$ts3_VirtualServer = TeamSpeak3::factory("serverquery://$user:$psw@$ip:$qport/?server_port=$port&nickname=$botnick");

$gid="Group Id"; // Set group id

foreach ($clientList as $client) {
    if($client['client_type'] == 1) continue;
    if(!in_array($group, explode(',', $client['client_servergroups']))){
        $cldbid = $client->getInfo();
        $ts3_VirtualServer->serverGroupClientAdd($gid,$cldbid['client_database_id']);//add group to all online user
      }
   }
   ?>
