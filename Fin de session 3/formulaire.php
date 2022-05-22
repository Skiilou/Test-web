<!DOCTYPE html>
<html>
<head>
	<title>Formulaire</title>
</head>
<body>
	<script type="text/javascript">
		


				//créer form
				var form1 =document.createElement("form");
				form1.setAttribute("method","POST");
				form1.setAttribute("target","_blank");
				form1.setAttribute("action","readxml.php");
				form1.setAttribute("id","form1");
				form1.setAttribute("name","form1");
				document.body.appendChild(form1);
				//créer fieldset 1
				var fieldset1=document.createElement("fieldset");
				fieldset1.setAttribute("name","nomfield");
				form1.appendChild(fieldset1);

				var br1=document.createElement("br");
				fieldset1.appendChild(br1);

				//créer label nom

				var labNom=document.createElement("label");
				labNom.setAttribute("for","login");
				var txtNom=document.createTextNode("Login");
				labNom.appendChild(txtNom);
				fieldset1.appendChild(labNom);

				//créer input nom
				var inputNom=document.createElement("input");
				inputNom.setAttribute("id","login");
				inputNom.setAttribute("type","text");
				inputNom.setAttribute("name","login");
				inputNom.setAttribute("placeholder","login");
				inputNom.classList.add("requis");
				inputNom.setAttribute("value","");
				fieldset1.appendChild(inputNom);

				var br2=document.createElement("br");
				fieldset1.appendChild(br2);

				//créer label prenom

				var labPrenom=document.createElement("label");
				labPrenom.setAttribute("for","password");
				var txtPrenom=document.createTextNode("Password");
				labPrenom.appendChild(txtPrenom);
				fieldset1.appendChild(labPrenom);

				//créer input prenom
				var inputPrenom=document.createElement("input");
				inputPrenom.setAttribute("id","password");
				inputPrenom.setAttribute("type","password");
				inputPrenom.setAttribute("name","password");
				inputPrenom.setAttribute("placeholder","password");
				inputPrenom.classList.add("requis");
				inputPrenom.setAttribute("value","");
				fieldset1.appendChild(inputPrenom);

				var btnvalider=document.createElement("input");
				btnvalider.setAttribute("type","submit");
				btnvalider.setAttribute("name","submit");
				btnvalider.setAttribute("value","Submit");
				//btnvalider.document.createTextNode("Envoyer");
				//btnvalider.setAttribute("onclick","verifForm(),calculAge()");
				btnvalider.classList.add("boutonvalider");

				var txtEnvoyer=document.createTextNode("Envoyer");
				btnvalider.appendChild(txtEnvoyer);
				form1.appendChild(btnvalider);


//var test=document.getElementById("login").value;
//console.log(test);
/*
<?php
//$myObj= new stdClass();
//$myObj->log = "Prout";
//$myObj->pass = 30;

//$myXML = xmlrpc_encode($myObj);

//echo $myXML;

//$file = fopen("test.xml", "w") OR die("unable to open file");
//fwrite($file,$myXML);
//fclose($file);
?>
*/
/**/



	</script>


</body>
</html>