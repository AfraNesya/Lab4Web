<?php 

$mod = @$_REQUEST['mod']; 

switch ($mod) { 
	case "home": 
	  require("home.php"); 
	  break; 
	case "pengertian": 
	  require("pengertian.php"); 
	  break;
	 case "fungsi": 
	  require("fungsi.php"); 
	  break; 
	default: 
	  require("home.php"); 
} 
?>