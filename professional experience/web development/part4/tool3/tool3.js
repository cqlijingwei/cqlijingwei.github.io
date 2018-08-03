var numOfCourse = document.getElementById("courseNum").value;

window.onload = function() {
	getGPA();
}

if ( numOfCourse > 0 ) {
	addCourses;
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

function addCourses() {
	var i;
	if (numOfCourse > 40) {
		document.getElementById("Error").innerHTML = "Error! Your input exceeds the maximum course number."
		return;
	}

	var container = document.getElementById("container");

	while (container.hasChildNodes()) {
		container.removeChild(container.lastChild);
	}

	for (i=0;i<numOfCourse;i++) {
		container.appendChild(document.createTextNode("Course " +(i+1)));
		var input1 = document.createElement("input");
		input1.type = "text";
		input1.name = i;
		input1.id = "courseGP";
		input1.onkeypress=function(){numberOnly(event, this);}
		input1.onkeyup=function(){getGPA();}
		input1.onfocus=function(){this.select();}
		container.appendChild(input1);
		container.appendChild(document.createTextNode("Weight/Credit"));
		var input2 = document.createElement("input");
		input2.type = "text";
		input2.name = i;
		input2.id = "courseWei";
		input2.onkeypress=function(){numberOnly(event, this);}
		input2.onkeyup=function(){getGPA();}
		input2.onfocus=function(){this.select();}
		container.appendChild(input2);
		container.appendChild(document.createElement("br"));
	}
}

function getGPA()
{
	var cGP=0.00;
	var cWeight=0.00;
	var curGPA = document.getElementById("currentVal").value;
	var curWeight = document.getElementById("currentWei").value;
	var textBoxes1 = document.getElementsById("courseGP");
	var textBoxes2 = document.getElementsById("courseWei");
	var GPA=0.00;

	if (curGPA != "" && curWeight != "") {
		cGP += curGPA * curWeight;
		cWeight += curWeight;
	}

	for (var i=0; i<textBoxes1.length; i++) {
		for (var j=0; j<textBoxes2.length; j++) {
			if (textBoxes1[i].getAttribute("name")==textBoxes2[j].getAttribute("name")) {
				if (textBoxes1[i].value != "" && textBoxes2[j].value != "") {
					cGP += textBoxes1[i].value * textBoxes2[j].value;
					cWeight += textBoxes2[j].value;
				}
			}
		}
	}

	GPA = (cGP/cWeight).toFixed(2);
	document.getElementById("cGPA").innerHTML = GPA;
}