function calculate () {
   
	//get user input
	var $list_price;                      
	$list_price = document.getElementById('list_price');
	$list_price = $list_price.valueAsNumber;
	
	var $discount_percent =
	document.getElementById('discount_percent').valueAsNumber;

	//calculate discount amount and discount price	
	var $discount; 
	$discount = $list_price * $discount_percent * .01;

	var $discount_price = $list_price - $discount;

	//set output in currency format (sort of)
	$discount = $discount.toFixed(2);
	$discount = '$'+$discount;
	var tempVar;
	tempVar = document.getElementById('discount');
	tempVar.value = $discount;
		   
	$discount_price = '$'+$discount_price.toFixed(2);
	document.getElementById('discount_price').value = $discount_price;

} // end calculate