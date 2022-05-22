<!DOCTYPE html>
<html>
<head>
	<title>Jeu</title>
</head>
<body>
	<h1>JEU</h1>
	<script type="text/javascript">

		var style = document.createElement('style');
				style.type = 'text/css';
				style.innerHTML = 'label{border:solid black 1px}div{display:inline;border: solid black 1px}';
				document.getElementsByTagName('head')[0].appendChild(style);
		
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

				//créer div joueur

				var labNom=document.createElement("div");
				labNom.setAttribute("for","nomJoueur");
				var txtNom=document.createTextNode("Nom joueur");
				labNom.appendChild(txtNom);
				fieldset1.appendChild(labNom);

				//créer div score

				var labScore=document.createElement("div");
				labScore.setAttribute("for","score");
				var txtScore=document.createTextNode("Score");
				labScore.appendChild(txtScore);
				fieldset1.appendChild(labScore);


				var date = new Date();

				var vdate = date.getDate()+"-"+(date.getMonth()+1+"-"+date.getFullYear());

				var test=1;

				var labDate=document.createElement("div");
				labDate.setAttribute("id","idDate"+test);
				txtDate=document.createTextNode(vdate);
				labDate.appendChild(txtDate);
				fieldset1.appendChild(labDate);



				var btnAdd=document.createElement("input");
				btnAdd.setAttribute("type","button");
				btnAdd.setAttribute("value","Ajouter");
				btnAdd.setAttribute("onclick","ajouter()");
				fieldset1.appendChild(btnAdd);

				//Variable test pour incrémenter le compteur pour avoir des id différents
				


				function ajouter(){
					console.log("test");
					console.log(test);




					var fieldset=document.createElement("fieldset");
					fieldset.setAttribute("name","nomfield");
					fieldset.setAttribute("id","idField"+test);
					form1.appendChild(fieldset);
					var br=document.createElement("br");
					fieldset.appendChild(br);




					//Nom
					var testNom=document.createElement("div");
					testNom.setAttribute("id","idjoueur"+test);
					var testtxtNom=document.createTextNode("NomJoueur");
					testNom.appendChild(testtxtNom);
					fieldset.appendChild(testNom);
					//Score
					var testScore=document.createElement("div");
					testScore.setAttribute("id","idscore"+test);
					var testtxtScore=document.createTextNode("Score");
					testScore.appendChild(testtxtScore);
					fieldset.appendChild(testScore);
					//date
					var testDate=document.createElement("div");
					testDate.setAttribute("id","idDate"+test);
					testtxtDate=document.createTextNode(vdate);
					testDate.appendChild(testtxtDate);
					fieldset.appendChild(testDate);

					//btn modifier
					var btnModifier=document.createElement("input");
					btnModifier.setAttribute("id","idModifier"+test);
					btnModifier.setAttribute("type","button");
					btnModifier.setAttribute("value","Modifier");
					btnModifier.setAttribute("onclick","modifier()");
					fieldset.appendChild(btnModifier);

					//btn supprimer
					var btnSupprimer=document.createElement("input");
					btnSupprimer.setAttribute("id","idSupprimer"+test)
					btnSupprimer.setAttribute("type","button");
					btnSupprimer.setAttribute("value","Supprimer");
					btnSupprimer.setAttribute("onclick","supprimer("+test+")");
					fieldset.appendChild(btnSupprimer);

					// btn supprimer 

					var btnAdd2=document.createElement("input");
					btnAdd2.setAttribute("type","button");
					btnAdd2.setAttribute("id","idAjouter"+test);
					btnAdd2.setAttribute("value","Ajouter");
					btnAdd2.setAttribute("onclick","ajouter()");
					fieldset.appendChild(btnAdd2);


					var stLigne=document.createElement("br");
					document.body.appendChild(stLigne);
					test=test+1;
				}


				function modifier(){



				}
				var cpt=1

				function supprimer(suppr){
					var tst=document.getElementById('idField'+suppr);
					//tst.removeChild(tst.lastChild);
					tst.remove();
					//test=test-1;
					console.log("cpt="+cpt);
					console.log("test="+test);
					console.log(suppr);

				}
	</script>

</body>
</html>