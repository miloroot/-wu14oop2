<?php

	class Nerd extends Base {

		public $name;
		public $health = 100;
		public $level = 1;

		public $nerdness = 25;
		public $htmlcss = 25;
		public $javascript = 25;
		public $php = 25;

		public function __construct($name) {
			$this->name = $name;
		}

		public function greet() {
			return 'Hi, my name is '.$this->name. '!';
		}

		public function isAlive() {
			return $this->health > 0;
		}

		public function attack(&$otherCharacter, $randomness = 1) {
			return '<br>'.$this->name. ' nerds out on '. $otherCharacter->name. '!';
		}


	}