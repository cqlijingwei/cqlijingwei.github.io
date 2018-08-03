var x=0; //Number of Course

window.onload = function() {
	getGPA();
}

$(document).ready(function() {
    var max_fields      = 10;
    var wrapper         = $(".container1"); 
    var add_button      = $(".add_form_field"); 
    
    x = 0; 
    $(add_button).click(function(e){ 
        e.preventDefault();
        if(x < max_fields){ 
            x++; 
            $(wrapper).append('<div><p>Course '+x+':<input type="text" name="mytext[]"/> Weight/Credit:<input type="text" name="mytext[]"/></p></div>'); //add input box
        }
		else
		{
		alert('You Reached the limits')
		}
    });
});

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

	if (curGPA != "" && curWeight != "") {
		cGP += curGPA * curWeight;
		cWeight += curWeight;
	}

	if (x != 0) {
		var textBoxes1 = document.getElementsById("courseGP");
		var textBoxes2 = document.getElementsById("courseWei");
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
	}

	GPA = (cGP/cWeight).toFixed(2);
	document.getElementById("cGPA").innerHTML = GPA;
}