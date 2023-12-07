function darkMode(){
	var element = document.body;
	element.classList.toggle("dark");
	document.getElementById("toggleBttn").value="Light Mode";
}

var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};