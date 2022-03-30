
function updateOutput(options) {
	var ourOutput = document.getElementById('output');
	var outputString = '';
	options.forEach(function (option) {
		outputString += `<p>${option}</p>`
	})
	ourOutput.innerHTML = outputString;
}


function onSubmit(){
	var select = document.getElementById('options');
	var selectedVal = select.value;
	fetch('http://localhost:8000/backend.php?query=' + selectedVal, {
		method: 'GET',
	})
		.then(response => response.json())
  		.then(data => updateOutput(data));
}

var button = document.getElementById('submit');
button.addEventListener('click', onSubmit);
