<?php

	class challenge {

		public $challenge;

		public function __construct() {
			$this->challenge = array (
				array('title' => "Do them tags!",'description' => 'Who creates the best HTML-only website?','htmlcss' => 20);
				array('title' => "Surf that DOM!",'description' => 'Who is the better DOM surfer and manipulator?','javascript' => 45);
				array('title' => "Connect them PDOs.", 'description' => 'Who is the better PDOer?','php' => 50);
				array('title' => "I like them nerdy!", 'description' => 'Who wins that girl who has a thingy for nerds?','nerdness' => 25);
			);
		}

		public function get_challenges() {
			return $this->challenge[array_rand($this->challenge, 1)];
		}
	}