<?php
class bush {
	public $lo, $ol, $lol;
	function __construct($lo,$ol) {
		$this -> lo = $lo;
		$this -> ol = $ol;
	}
	function sum(){
		 $this -> lol = $this -> lo + $this -> ol;
   }
};
?>