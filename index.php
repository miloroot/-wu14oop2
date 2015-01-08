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

	// creating and storing the characters

	// if user chooses allround nerd
	if(isset($_REQUEST['nerd'])) {
		if (count($ds->nerds) === 0) {
			// input users values here - todo

			$ds->nerds[] = new designNerd("Mr Doodler");
			$ds->nerds[] = new phpNerd("PeeDeeOer");
			$ds->nerds[] = new javascriptNerd("Hot Jeezer");

			echo json_encode($ds->nerds->name);
		}
	}

	// if user chooses javascript nerd
	if(isset($_REQUEST['javascriptNerd'])) {
		if (count($ds->nerds) === 0) {
			// input users values here - todo

			$ds->nerds[] = new Nerd("5inch Glasses");
			$ds->nerds[] = new phpNerd("Dumper");
			$ds->nerds[] = new designNerd("Mr Pixels");
		}
	}

	// if user chooses design nerd
	if(isset($_REQUEST['designNerd'])) {
		if (count($ds->nerds) === 0) {
			// input users values here - todo

			$ds->nerds[] = new Nerd("Tommy Two Tag");
			$ds->nerds[] = new javascriptNerd("Sir Var-Alot");
			$ds->nerds[] = new phpNerd("Fifty Shades Girl");
		}
	}

	// if user chooses php nerd
	if(isset($_REQUEST['phpNerd'])) {
		if (count($ds->nerds) === 0) {
			// input users values here - todo

			$ds->nerds[] = new Nerd("John Table-Rocks Doe");
			$ds->nerds[] = new javascriptNerd("Sir BugALot");
			$ds->nerds[] = new designNerd("Gimp-a-fella");
		}
	}