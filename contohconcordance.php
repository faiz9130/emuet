<?php 
require ("class.filetotext.php");

$docObj = new Filetotext("test.docx");
$return = $docObj -> convertToText();

print $return;

?>
 <?php
	$sql= "SELECT id, filename FROM documents WHERE MATCH (contents) AGAINST ('search keywords here' IN NATURAL LANGUAGE MODE)";
	
	if( strpos( $contents, 'search keywords here') !== false)
	{
	 echo 'Keywords found!';
	}
	
	?>