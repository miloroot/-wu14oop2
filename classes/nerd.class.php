<?php

	class Nerd extends Base {

		public $name;
		public $health = 100;
		public $level = 1;
		public $nerdness = 10;

		public function __construct($name) {
			$this->name = $name;
		}

		public function isAlive() {
			return $this->health  > 0;
		}

		public function attack(&$otherCharacter, $randomness = 1) {
			return '<br>'.$this->name. 'attacks'. $otherCharacter->name. '!';
		}

	}