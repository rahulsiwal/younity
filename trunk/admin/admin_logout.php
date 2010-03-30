<?php

/* $Id: admin_logout.php 8 2009-01-11 06:02:53Z nico-izo $ */

$page = "admin_logout";
include "admin_header.php";

$admin->admin_logout();

// FORWARD TO ADMIN LOGIN PAGE
cheader("admin_login.php");
exit();
?>