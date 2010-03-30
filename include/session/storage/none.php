<?php

/* $Id: none.php 8 2009-01-11 06:02:53Z nico-izo $ */


defined('SE_PAGE') or exit();


class SESessionStorageNone extends SESessionStorage
{
	function register()
	{
		// Handled by PHP (C code faster than PHP code)
    return;
	}
}

?>