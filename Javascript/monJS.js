var nombre1,nombre2,nombre3,nombre4,nombre5,nombre6,nombre7,nombre8,nombre9,nombre10,nombre11,nombre12,somme,produit,moyenne,maximum;
	
function calculsomme(){

nombre1=Number(document.getElementById("nombre1").value);
nombre2=Number(document.getElementById("nombre2").value);
nombre3=Number(document.getElementById("nombre3").value);
somme= nombre1+nombre2+nombre3;
document.getElementById("somme").value=somme;
}



function calculproduit(){

nombre4=Number(document.getElementById("nombre4").value);
nombre5=Number(document.getElementById("nombre5").value);
nombre6=Number(document.getElementById("nombre6").value);
produit= nombre4/nombre5/nombre6;
document.getElementById("produit").value=produit;
	
}

function calculmoyenne(){
	
nombre7=Number(document.getElementById("nombre7").value);
nombre8=Number(document.getElementById("nombre8").value);
nombre9=Number(document.getElementById("nombre9").value);
moyenne=(nombre7+nombre8+nombre9)/3;
document.getElementById("moyenne").value=moyenne;	

}

function max(){

nombre10=Number(document.getElementById("nombre10").value);
nombre11=Number(document.getElementById("nombre11").value);
nombre12=Number(document.getElementById("nombre12").value);
maximum=	nombre10;				

if (nombre11>maximum) {
	maximum=nombre11}
if (nombre12>maximum) {
	maximum=nombre12}

document.getElementById("maximum").value=maximum;
}