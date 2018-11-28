<?php
// Add Group To All Online User
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

//Current host message
$lsthostmex=$ts3_VirtualServer->serverGetByPort("9987")->getProperty("virtualserver_welcomemessage"); 
echo $lsthostmex;

//set newost Message
$Hostmex="Inset New Welcome Message";
$ts3_VirtualServer->serverGetByPort($port)->modify(array("virtualserver_welcomemessage" => $Hostmex));
?>
