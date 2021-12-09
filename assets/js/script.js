edit.onclick = function () {
	var input = document.getElementsByClassName('form-control');
	var btn = document.getElementById('submit');

	for ( let i = 0; i < input.length; i++ ){
		input[i].removeAttribute("disabled");

	}

	btn.removeAttribute("disabled");
}