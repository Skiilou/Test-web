<?php  
$xml= new DomDocument("1.0","UTF-8");
$xml->formatOutput=true;
//Pour le format
$xml->preserveWhitespace=false;

$test=$xml->createElement("test");
$xml->appendChild($test);


	$user=$xml->createElement("user");
	$test->appendChild($user);
	$log=$xml->createElement("login","admin");
	$user->appendChild($log);
	$pass=$xml->createElement("pass","admin");
	$user->appendChild($pass);
	echo "<xmp>".$xml->saveXML()."</xmp>";
	$xml->save("test.xml");

?>