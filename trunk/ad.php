<?php

/* $Id: ad.php 8 2009-01-11 06:02:53Z nico-izo $ */

$page = "ad";
include "header.php";

if(isset($_GET['ad_id'])) { $ad_id = $_GET['ad_id']; } else { $ad_id = 0; }

$database->database_query("UPDATE se_ads SET ad_total_clicks=ad_total_clicks+1 WHERE ad_id='$ad_id' LIMIT 1");

header("Content-type: image/gif");
exit;
?>