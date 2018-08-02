var frequency = document.getElementById("frequency");

frequency.onchange = function() {
	mortgage();
}

window.onload = function() {
	mortgage();
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

function mortgage()
{
	var principal = document.getElementById("principal").value;
	var interest = document.getElementById("interest").value;
	var period = document.getElementById("period").value;
	var frequency = document.getElementById("frequency").value;
	var x;
	var y;
	var z;

	if(principal == "" || interest == "" || period == "")
	{
		document.getElementById("payment").innerHTML = "";
		document.getElementById("totalPayment").innerHTML = "";
		document.getElementById("totalInterest").innerHTML = "";
	}	
	else {
		var i = parseFloat(interest)/100.00;
		var n=1;
		switch (frequency.value) {
			case 'monthly':
				i=i/12;
				n=12;
				break;
			case 'biweekly':
				i=i/26;
				n=26;
				break;
			case 'weekly':
				i=i/52;
				n=52;
				break;
			default:
				i=i/12;
				n=12;
				break;
		}
		var paymentN = n * period;
		var FVofOne = Math.pow((1+i), paymentN);

		x = principal * i * FVofOne/(FVofOne-1);
		y = x * paymentN;
		z = y - principal;

		x = x.toFixed(2);
		y = y.toFixed(2);
		z = z.toFixed(2);

		document.getElementById("payment").innerHTML = x;
		document.getElementById("totalPayment").innerHTML = y;
		document.getElementById("totalInterest").innerHTML = z;
	}
}