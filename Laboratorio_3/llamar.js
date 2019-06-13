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
		var numero = parseInt(document.getElementById('num').value);
		console.log("entraaaaa")
		switch(op) {
			case 1:for (var i = 1; i <= 10; i++) {
				document.getElementById('td'+i+'1').value=numero;
				document.getElementById('td'+i+'2').value=i;
				document.getElementById('td'+i+'3').value=numero+i;
			};
			break;
			case 2: for (var i = 1; i <= 10; i++) {
				document.getElementById('td'+i+'1').value=numero;
				document.getElementById('td'+i+'2').value=i;
				document.getElementById('td'+i+'3').value=numero-i;
			};
			break;
			case 3: for (var i = 1; i <= 10; i++) {
				document.getElementById('td'+i+'1').value=numero;
				document.getElementById('td'+i+'2').value=i;
				document.getElementById('td'+i+'3').value=numero*i;
			};
			break;
			case 4: for (var i = 1; i <= 10; i++) {
				document.getElementById('td'+i+'1').value=numero;
				document.getElementById('td'+i+'2').value=i;
				document.getElementById('td'+i+'3').value=numero/i;
			};
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