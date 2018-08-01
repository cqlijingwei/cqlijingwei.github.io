var category = document.getElementById('measureCate');

// Function from online resource
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

// Function from online resource
function convert(obj)
{
	var originalIdTag = obj.getAttribute("id")
	var textBoxes = document.getElementsByTagName("input");
	for (var i = 0; i < textBoxes.length; i++) 
	{
		var currIdTag = textBoxes[i].getAttribute("id");
		textBoxes[i].value = unitConvert(obj.value, originalIdTag, currIdTag);
	}
}

function unitConvert(val, origId, currId) {
	switch (category.value) {
		case 'weight':
			weightConvert(val, origId, currId);
			break;
		case 'length':
			lengthConvert(val, origId, currId);
			break;
		case 'area':
			areaConvert(val, origId, currId);
			break;
		case 'volume':
			volumeConvert(val, origId, currId);
			break;
	}
}

function weightConvert(val, origId, currId)
{
	if(origId == "kg")
	{
		switch (currId) {
			case "kg":
				return val;
			case "g":
				return parseFloat(val)*1000;
			case "lbs":
				return parseFloat(val)*2.20462;
			case "oz":
				return parseFloat(val)*35.274;
			case "st":
				return parseFloat(val)*0.157473;
			case "tn":
				return parseFloat(val)*0.00110231;
			default:
				return val + "(could not convert)";
		}
	}
	
	if(origId == "g")
	{
		switch (currId) {
			case "kg":
				return parseFloat(val)*0.001;
			case "g":
				return val;
			case "lbs":
				return parseFloat(val)*0.00220462;
			case "oz":
				return parseFloat(val)*0.035274;
			case "st":
				return parseFloat(val)*0.000157473;
			case "tn":
				return parseFloat(val)*0.00000110231;
			default:
				return val + "(could not convert)";
		}
	}
	
	if(origId == "lbs")
	{
		switch (currId) {
			case "kg":
				return parseFloat(val)*0.453592;
			case "g":
				return parseFloat(val)*453.592;
			case "lbs":
				return val;
			case "oz":
				return parseFloat(val)*16;
			case "st":
				return parseFloat(val)*0.0714286;
			case "tn":
				return parseFloat(val)*0.0005;
			default:
				return val + "(could not convert)";
		}
	}
	
	if(origId == "oz")
	{
		switch (currId) {
			case "kg":
				return parseFloat(val)*0.0283495;
			case "g":
				return parseFloat(val)*28.3495;
			case "lbs":
				return parseFloat(val);
			case "oz":
				return val;
			case "st":
				return parseFloat(val)*0.00446429;
			case "tn":
				return parseFloat(val)*0.00003125;
			default:
				return val + "(could not convert)";
		}
	}

	if(origId == "st")
	{
		switch (currId) {
			case "kg":
				return parseFloat(val)*6.35029;
			case "g":
				return parseFloat(val)*6350.29;
			case "lbs":
				return parseFloat(val)*14;
			case "oz":
				return parseFloat(val)*224;
			case "st":
				return val;
			case "tn":
				return parseFloat(val)*0.007;
			default:
				return val + "(could not convert)";
		}
	}

	if(origId == "tn")
	{
		switch (currId) {
			case "kg":
				return parseFloat(val)*907.185;
			case "g":
				return parseFloat(val)*907185;
			case "lbs":
				return parseFloat(val)*2000;
			case "oz":
				return parseFloat(val)*32000;
			case "st":
				return parseFloat(val)*142.857;
			case "tn":
				return val;
			default:
				return val + "(could not convert)";
		}
	}
}