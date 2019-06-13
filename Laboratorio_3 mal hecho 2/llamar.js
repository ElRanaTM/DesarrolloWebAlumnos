var op = 0;
console.log(op);
function suma() {
	op = 1;
	operacion();
	console.log(op);
}

function resta() {
	op = 2;
	operacion();
	console.log(op);
}

function multiplicacion() {
	op = 3;
	operacion();
	console.log(op);
}

function division() {
	op = 4;
	operacion();
	console.log(op);
}

function operacion() {

	if(op!=0){
		var numero = document.getElementById('num').value;
		console.log("entraaaaa")
		switch(op) {
			case 1: llamar("suma.php?txtN="+numero);
			break;
			case 2: llamar("resta.php?txtN="+numero);
			break;
			case 3: llamar("multiplicacion.php?txtN="+numero);
			break;
			case 4: llamar("division.php?txtN="+numero);
			break;
		}
	}
}

function llamar(url) {
	var ajax = new XMLHttpRequest();
	console.log(url)
	ajax.onreadystatechange = function () {
		console.log("entro")
		if (ajax.readyState == 4) {
			document.getElementById('contenido').innerHTML = ajax.responseText;
		}
	};
	ajax.open('GET',url,true);
	ajax.send();
	delete ajax;
}