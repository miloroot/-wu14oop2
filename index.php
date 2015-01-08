<?php

	//Nodebite black box
	include_once("nodebite-swiss-army-oop.php");
	$ds = new DBObjectSaver(array(
	  "host" => "127.0.0.1",
	  "dbname" => " wu14oop2",
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

	// challenges
	// all challenges are in this file, getting randomzied in the array
	include_once("classes/challenge.class.php");

	// items/tools classes
	// yet do be done...

	// storing the characters
	$designerGeek = new Nerd ("Designer Geek");
	$hotjs = new javascriptNerd ("Hot JavaScripter");

	if(isset($_REQUEST['create'])){
		
	}