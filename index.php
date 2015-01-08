<?php

	//Nodebite black box
	include_once("nodebite-swiss-army-oop.php");
	$ds = new DBObjectSaver(array(
	  "host" => "127.0.0.1",
	  "dbname" => "nerdbattle_db",
	  "username" => "root",
	  "password" => "mysql",
	  "prefix" => "character"
	));

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