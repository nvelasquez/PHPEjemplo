var inputs = ["matricula", "nombre", 'n1', "n2", "n3", "n4", "promedio", "EQ"]
function insertar () {
	var tabla = fbi("tableForm")
	var tr = dce("tr");

	for (var i = 0; i < inputs.length; i++) {
		var td = dce("td");
		var input = dce("input");

		attr(input, "type", "text");
		attr(input, "id", inputs[i]);	

		append(td, input);
		append(tr, td);
	};

	append(tabla, tr);
}


function dce (argument) {
	return document.createElement(argument);
}

function dct (argument) {
	return document.createTextNode(argument);
}

function append (parent, child) {
	parent.appendChild(child);
}

function attr (element, attr, val) {
	element.setAttribute(attr, val);
}

function fbt (argument) {
	return document.getElementsByTagName(argument);
}

function fbi (argument) {
	return document.getElementById(argument);
}
