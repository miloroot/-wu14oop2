<?php

	class Nerd extends Base {

		public $name;
		public $class = "Allround nerd";
		public $focus = 50;
		public $level = 1;

		public $nerdness = 25;
		public $htmlcss = 25;
		public $javascript = 25;
		public $php = 25;

		public function __construct($name /*$class*/) {
			$this->name = $name;
			//$this->class = $class;
		}

		public function get_name() {
			return $this->name;
		}

		public function get_class() {
			return $this->class;
		}

		public function greet() {
			return 'Hi, my name is '.$this->name. '!'. ' And im a '.$this->class.'!';
		}

		public function isAlive() {
			return $this->focus > 0;
		}

		public function attack(&$otherCharacter, $randomness = 1) {
			$this->focus += 10;
			$otherCharacter->focus -= 10;
			return '<br>'.$this->name. ' nerds out on '. $otherCharacter->name. '!'. '<br>';
		}


	}