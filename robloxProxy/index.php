<?php

/*
      Filename: robloxProxy.php
      Written by: Sparksammy
      Based off of: PostToDiscord.php by Celebras
      Date: 4/3/2018
*/

//Get details
$URL       =      $_GET["URL"]; //URL you want to send content to
$Content       =      $_GET["Content"]; //Content you want to send.
$Method       =      $_GET["Method"]; //GET or POST

//GET or POST what content we want, depending on the Method.
function BypassHTTP($URL, $Content, $Method)
{
      $Curl = curl_init($URL);
      curl_setopt($Curl, CURLOPT_CUSTOMREQUEST, $Method);
      curl_setopt($Curl, CURLOPT_POSTFIELDS, $Content);
      curl_setopt($Curl, CURLOPT_RETURNTRANSFER, true);
      return curl_exec($Curl);
}

//Display our output.
echo BypassHTTP($URL, $Content, $Method);

?>