<?php

session_start();
$like= $_GET["page"];
$array= array("Gandhi"=>"Dandi");
$_SESSION[$like]=$array[$like];
echo"$_SESSION[$like]";
?>