 <?php  
//xml= new DomDocument("1.0","UTF-8");
//$xml->formatOutput=true;
//Pour le format
//$xml->preserveWhitespace=false;
//$xml->load("test.xml");
//Si existe pas 
/*
if (!$xml)
{
	$test=$xml->createElement("test");
	$xml->appendChild($test);
}
else
{
	$test=$xml->firstChild;
}
*/

//$test=$xml->createElement("test");
//	$xml->appendChild($test);

$filename='test.xml';


if (!file_exists($filename))
{
	$xml= new DomDocument("1.0","UTF-8");
	echo "Le fichier n'existe pas";
	$flog=$_POST['login'];
			$fpass=$_POST['password'];


			//var_dump($user);

			//$user=$xml->createElement("user");
			//$test->appendChild($user);
			$log=$xml->createElement("login",$flog);
			$xml->appendChild($log);
			$pass=$xml->createElement("pass",$fpass);
			$xml->appendChild($pass);
			echo "<xmp>".$xml->saveXML()."</xmp>";


			$xml->save("test.xml");
			if (isset($log,$pass))
			{
				echo "CA FONCTIONNE";
			}


		
}


else{

	echo "le fichier existe";
	if (isset($_POST['submit']))
		{
			$flog=$_POST['login'];
			$fpass=$_POST['password'];


			//var_dump($user);

			//$user=$xml->createElement("user");
			//$test->appendChild($user);
			$log=$xml->createElement("login",$flog);
			$xml->appendChild($log);
			$pass=$xml->createElement("pass",$fpass);
			$xml->appendChild($pass);
			echo "<xmp>".$xml->saveXML()."</xmp>";


			$xml->save("test.xml");
			if (isset($log,$pass))
			{
				echo "CA FONCTIONNE";
			}


		}
}
//Si le bouton sumbit est appuyé



$stockLogin=$xml->getElementsByTagName('login')->item(0)->nodeValue;
$stockPass=$xml->getElementsByTagName('pass')->item(0)->nodeValue;
//echo($stockLogin);
//echo($stockPass);

/*
xml http request.xml parser. domparser. parsefromstring.new domparser pour parcourir.
xml writer//openuri et xml reader, simple xml.SimpleXml est un compromis entre simplicité et performance
var reader= new filereader();
queryselector.file_put_contents.endElement/endDocument
 */
?>