<?php
require_once 'bush.php';
class ChildOfbush extends Bush {
	function __construct($lo,$ol) {
		$this -> lo = $lo;
		$this -> ol = $ol;
	}
		function fase (){
		 $this -> lol = $this -> lo * $this -> ol;
   }
};
?>

