<?php
/*
	Page: index.php	
	Desc: Loads up and runs requested page (if authenticated).
*/
include 'inc.header.php';
include 'view/'.$page.'.php';
include 'inc.footer.php';
?>
