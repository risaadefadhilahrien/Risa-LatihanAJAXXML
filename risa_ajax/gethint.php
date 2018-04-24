<?php
//Array with names
$a[]="Risa";
$a[]="Ade";
$a[]="Resti";
$a[]="Sonia";
$a[]="Rien";
$a[]="Yulia";

//get the parameter from URL
$q=$_REQUEST["q"];
$hint="";

//Lookup all hints from array if $q is different from ""
if ($q !== ""){
	$q=strtolower($q);
	$len=strlen($q);
	foreach($a as $name){
	if (stristr($q,substr($name,0,$len))){
	if ($hint === ""){
	$hint = $name;
	} else {
	$hint .=", $name";
	}
	}
	}
	}

	//Output no suggestions if no hint was found or output correct values
	echo $hint === ""? "No Suggestions" : $hint;
	?>
