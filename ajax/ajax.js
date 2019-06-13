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
}