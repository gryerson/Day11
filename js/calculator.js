// create helper function
var $ = function (id) {
	return document.getElementById(id);
}

function calculate () {
	
	// get user input
	var listPrice = $('list_price').valueAsNumber;
	//var discountPercent = document.getElementById('discount_percent').valueAsNumber;
	var customerType = $('type').value;
	
	// call calculate discount percent function
	var discountPercent = discPercCalc(listPrice, customerType);
	
	// call calculate discount amount function
	var discount = discAmountCalc(listPrice, discountPercent);
	
	// call discount price function
    var discountPrice = discPriceCalc(listPrice, discount);

	//set output in currency format (sort of)
	$('discount_percent').valueAsNumber = discountPercent;
	
	discount = '$'+discount.toFixed(2);
	$('discount').value = discount;

	discountPrice = '$'+discountPrice.toFixed(2);
	$('discount_price').value = discountPrice;

} // end calculate

// calculate discount percent function
function discPercCalc (listPrice, customerType)
{
	//alert('inside discPercCalc');
	if (customerType == 'R')
	{
		if (listPrice < 100) discountPercent = 0;
		else if (listPrice >= 100 && listPrice < 250) discoutnPercent = 10;
		else if (listPrice >= 250) discountPercent = 25;
	} 
	else if (customerType == 'C')
	{
		if (listPrice < 250) discountPercent = 20;
		else discountPercent = 30;
	}
	discountPercent = parseFloat(discountPercent);
	//alert('discountPercent = ' + discountPercent);
	return discountPercent;
}

// calculate discount amount function
function discAmountCalc (listPrice, discountPercent)
{
   //alert('inside discAmountCalc');
   var discAmount = listPrice * discountPercent * .01;
   //alert('discAmount = ' + discAmount);
   return discAmount;
}

// calculate discount price amount
function discPriceCalc (listPrice, discount)
{
   //alert('inside discPriceCalc');
   var discPrice = listPrice - discountPercent; // wrong
   //alert('discPrice = ' + discPrice);
   return discPrice;
}

// date function
function getToday() 
{
   // Create new date
   var currentDate = new Date();
	
   // Get current month, day, year values
   var month = currentDate.getMonth() +1;
   var day = currentDate.getDate();
   var year = currentDate.getFullYear();
   
   // Set date formats
   month = (month < 10) ? "0" + month : month;
   day = (day < 10) ? "0" + day : day;
   
   // Return date output
   var dateString = "Today is " + month + "/" + day + "/" + year;
   document.writeln(dateString);
   
} // end getToday()