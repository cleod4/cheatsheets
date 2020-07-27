<!-- Mandatory header. -->
<?php
	// Including other files. __DIR__ is current folder location.
	include_once (__DIR__.'/folder/file.php');

	// ####################
	// ### Control Flow ###
	// ####################

	// Function declaration.
	function MyFunction($variable) {
	}

	// Typical 'for' loop.
	for ($i = 0; $i < $value; $i++) {
	}

	// foreach.
	foreach ($object in $object_container) {
	}

	// ###############
	// ### Strings ###
	// ###############

	// Concantenate strings.
	$concat = "This" . "/That";

	// Split.
	$split = explode("/", $string);

	// #############################
	// ### Arrays and Structures ###
	// #############################

	// Side of a structure.
	sizeof($array);

	// Array key find. returns a bool.
	array_key_exists($needle, $haystack);

	// Array append.
	array_push($array, $value);

	// Decode json to structure.
	$decoded = json_decode($json, true);

	// ##################################
	// ### Echoing and Error Checking ###
	// ##################################

	// Printing to console, while server running.
	error_log("Hello World");

	// Get a text dump of a structure (such as an array or dict).
	$dump = var_export($structure, true);

	// #####################
	// ### File handling ###
	// #####################

	// Opening a file for processing.
	$file = fopen($filename, "w");

	// Writing to file.
	fwrite($file, "Content");

	// #############################
	// ### Operating System Work ###
	// #############################

	// Change the executing program's directory.
	chdir("new_folder");

	// Simple system command.
	system("cp * folder/");

	// Execute command and capture text output.
	shell_exec("ls -al");

// Mandatory footer.
?>