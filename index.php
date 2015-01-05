<?php

	// character/player classes
	include_once("classes/base.class.php");
	include_once("classes/nerd.class.php");
	include_once("classes/javascriptnerd.class.php");
	include_once("classes/designnerd.class.php");
	include_once("classes/phpnerd.class.php");

	// items/tools classes

	$designerGeek = new Nerd ("Designer Geek");
	$hotjs = new javascriptNerd ("Hot JavaScripter");

	if(isset($_REQUEST["fight"])){
		echo json_encode(
			$hotjs->attack($designerGeek).''
			.$designerGeek->name.' focus decreased to '.$designerGeek->focus.'.'.'<br>'
			.$hotjs->name.' focus increased to '.$hotjs->focus.'.'
		);
	}