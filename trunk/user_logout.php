<?php

/* $Id: user_logout.php 8 2009-01-11 06:02:53Z nico-izo $ */

$page = "user_logout";
include "header.php";

$user->user_logout();

// FORWARD TO USER LOGIN PAGE
cheader("home.php");
exit();
?>