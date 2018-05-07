<?php
$dbhost = "localhost";
$dbuser = "mysql";
$dbpasswd = "mysql";
$dbname = "boardgameRecommendation";

$db = mysqli_connect($dbhost, $dbuser, $dbpasswd, $dbname);

$bgid = mysqli_real_escape_string($db, $_GET["bgid"]);
$userid = mysqli_real_escape_string($db, $_GET["userid"]);
$op = mysqli_real_escape_string($db, $_GET["op"]);

$query = "SELECT game FROM barmanager WHERE userid=$userid AND game=$bgid";
$query_result = mysqli_query($db, $query);

$display_string = "";

//if($ = mysqli_fetch_array($query_result))

echo "Well done, $userid! You have clicked $bgid.";
?>