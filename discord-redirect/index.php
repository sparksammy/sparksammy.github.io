<?php

/*
      Filename: PostToDiscord.php
      Written by: Celebras
      Date: 4/3/2018
*/

$Content       =      $_GET["Content"];
$Discord       =      $_GET["Discord"];

function PostToDiscord($Content, $Discord)
{
      $Curl = curl_init($Discord);
      curl_setopt($Curl, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($Curl, CURLOPT_POSTFIELDS, $Content);
      curl_setopt($Curl, CURLOPT_RETURNTRANSFER, true);
      return curl_exec($Curl);
}

echo PostToDiscord($Content, $Discord);

?>