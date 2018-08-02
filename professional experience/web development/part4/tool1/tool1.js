var category = document.getElementById('measureCate');
var w1,w2,w3,w4,w5,w6; w1,w2,w3,w4,w5,w6=1;

setUnit();

category.onchange = function() {
	setUnit();
}

function setUnit() {
	switch(category.value) {
		case 'weight':
			document.getElementById("unit1").innerHTML = "Kilogram(kg)";
			document.getElementById("unit2").innerHTML = "Gram(g)";
			document.getElementById("unit3").innerHTML = "Metric Ton(t)";
			document.getElementById("unit4").innerHTML = "Pound(lbs)";
			document.getElementById("unit5").innerHTML = "Ounce(oz)";
			document.getElementById("unit6").innerHTML = "US Stone(st)";
			break;
		case 'length':
			document.getElementById("unit1").innerHTML = "Meter(m)";
			document.getElementById("unit2").innerHTML = "Centimeter(cm)";
			document.getElementById("unit3").innerHTML = "Kilometer(km)";
			document.getElementById("unit4").innerHTML = "Mile(mi)";
			document.getElementById("unit5").innerHTML = "Foot(ft)";
			document.getElementById("unit6").innerHTML = "Inch(in)";
			break;
		case 'area':
			document.getElementById("unit1").innerHTML = "Square Meter(m^2)";
			document.getElementById("unit2").innerHTML = "Square Centimeter(cm^2)";
			document.getElementById("unit3").innerHTML = "Square Kilometer(km^2)";
			document.getElementById("unit4").innerHTML = "Acre(ac)";
			document.getElementById("unit5").innerHTML = "Square Foot(ft^2)";
			document.getElementById("unit6").innerHTML = "Square Inch(in^2)";
			break;
		case 'volume':
			document.getElementById("unit1").innerHTML = "Cubic Meter(m^3)";
			document.getElementById("unit2").innerHTML = "Cubic Centimeter(cm^3)";
			document.getElementById("unit3").innerHTML = "Cubic Kilometer(km^3)";
			document.getElementById("unit4").innerHTML = "Liter(L)";
			document.getElementById("unit5").innerHTML = "Milliliter(mL)";
			document.getElementById("unit6").innerHTML = "Gallon(gal)";
			break;
	}
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

function convert(obj)
{
	var originalIdTag = obj.getAttribute("id")
	var textBoxes = document.getElementsByTagName("input");
	for (var i = 0; i < textBoxes.length; i++) 
	{
		var currIdTag = textBoxes[i].getAttribute("id");
		textBoxes[i].value = unitConvert(obj.value, originalIdTag, currIdTag, category.value);
	}
}

function unitConvert(val, origId, currId, unitName)
{
	switch (unitName) {
		case 'weight':
			w1=1.000;
			w2=0.001;
			w3=1000.000;
			w4=0.45359237;
			w5=0.0283495231;
			w6=5.669904625;
			break;
		case 'length':
			w1=1.000;
			w2=0.01;
			w3=1000.000;
			w4=1609.344;
			w5=0.3048;
			w6=0.0254;
			break;
		case 'area':
			w1=1.000;
			w2=0.0001;
			w3=1000000.000;
			w4=4046.8564224;
			w5=0.09290304;
			w6=0.00064516;
			break;
		case 'volume':
			w1=1.000;
			w2=1.0e-6;
			w3=1.0e9;
			w4=0.001;
			w5=1.0e-6;
			w6=0.0037854118;
			break;
	}

	if(origId == "unit1val")
	{
		switch (currId) {
			case "unit1val":
				return val;
			case "unit2val":
				return parseFloat(val)*w1/w2;
			case "unit3val":
				return parseFloat(val)*w1/w3;
			case "unit4val":
				return parseFloat(val)*w1/w4;
			case "unit5val":
				return parseFloat(val)*w1/w5;
			case "unit6val":
				return parseFloat(val)*w1/w6;
			default:
				return val + "(could not convert)";
		}
	}
	
	if(origId == "unit2val")
	{
		switch (currId) {
			case "unit1val":
				return parseFloat(val)*w2/w1;
			case "unit2val":
				return val;
			case "unit3val":
				return parseFloat(val)*w2/w3;
			case "unit4val":
				return parseFloat(val)*w2/w4;
			case "unit5val":
				return parseFloat(val)*w2/w5;
			case "unit6val":
				return parseFloat(val)*w2/w6;
			default:
				return val + "(could not convert)";
		}
	}
	
	if(origId == "unit3val")
	{
		switch (currId) {
			case "unit1val":
				return parseFloat(val)*w3/w1;
			case "unit2val":
				return parseFloat(val)*w3/w2;
			case "unit3val":
				return val;
			case "unit4val":
				return parseFloat(val)*w3/w4;
			case "unit5val":
				return parseFloat(val)*w3/w5;
			case "unit6val":
				return parseFloat(val)*w3/w6;
			default:
				return val + "(could not convert)";
		}
	}
	
	if(origId == "unit4val")
	{
		switch (currId) {
			case "unit1val":
				return parseFloat(val)*w4/w1;
			case "unit2val":
				return parseFloat(val)*w4/w2;
			case "unit3val":
				return parseFloat(val)*w4/w3;
			case "unit4val":
				return val;
			case "unit5val":
				return parseFloat(val)*w4/w5;
			case "unit6val":
				return parseFloat(val)*w4/w6;
			default:
				return val + "(could not convert)";
		}
	}

	if(origId == "unit5val")
	{
		switch (currId) {
			case "unit1val":
				return parseFloat(val)*w5/w1;
			case "unit2val":
				return parseFloat(val)*w5/w2;
			case "unit3val":
				return parseFloat(val)*w5/w3;
			case "unit4val":
				return parseFloat(val)*w5/w4;
			case "unit5val":
				return val;
			case "unit6val":
				return parseFloat(val)*w5/w6;
			default:
				return val + "(could not convert)";
		}
	}

	if(origId == "unit6val")
	{
		switch (currId) {
			case "unit1val":
				return parseFloat(val)*w6/w1;
			case "unit2val":
				return parseFloat(val)*w6/w2;
			case "unit3val":
				return parseFloat(val)*w6/w3;
			case "unit4val":
				return parseFloat(val)*w6/w4;
			case "unit5val":
				return parseFloat(val)*w6/w5;
			case "unit6val":
				return val;
			default:
				return val + "(could not convert)";
		}
	}
}
