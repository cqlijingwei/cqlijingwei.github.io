window.onload = function() {
	getGPA();
}

function numberOnly(input, obj)
{
	var ev = input || window.event;
	var keydown = event.keyCode || event.which;
	keydown = String.fromCharCode(keydown);
	var regex = /[0-9]|\./;
	var regexDec = /\./;
	var alreadyContainsDecimal = regexDec.test(keydown) && regexDec.test(obj.value);
	if(!regex.test(keydown) || alreadyContainsDecimal) 
	{
		event.returnValue = false;
		if(ev.preventDefault) 
			ev.preventDefault();
	}
}

function getGPA()
{
	var cGP=0.00;
	var cWeight=0.00;
	var curGPA = document.getElementById("currentVal").value;
	var curWeight = document.getElementById("currentWei").value;
	var GPA=0.00;
	var numOfCourse = document.getElementById("numCourse").value;

	if (curGPA != "" && curWeight != "") {
		cGP += parseFloat(curGPA) * parseFloat(curWeight);
		cWeight += parseFloat(curWeight);
	}

	if (numOfCourse!="") {
		var textBoxes1 = document.getElementsByName("point");
		var textBoxes2 = document.getElementsByName("weight");
		for (var i=0; i<textBoxes1.length; i++) {
			for (var j=0; j<textBoxes2.length; j++) {
				if (textBoxes1[i].value != "" && textBoxes2[j].value != "") {
					if (textBoxes1[i].getAttribute("id")==textBoxes2[j].getAttribute("id")) {
						cGP += parseFloat(textBoxes1[i].value) * parseFloat(textBoxes2[j].value);
						cWeight += parseFloat(textBoxes2[j].value);
					}
				}
			}
		}
	}

	GPA = (cGP/cWeight).toFixed(2);
	document.getElementById("credits").innerHTML = cWeight;
	document.getElementById("cGPA").innerHTML = GPA;
}