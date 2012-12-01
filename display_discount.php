<?php 
	// Declare and instantiate variables
	$product_description = null;
	$list_price = null;
	$discount_percent = null;
	
	// Get the user data from the form
	$product_description = $_POST['product_description'];
	$list_price = $_POST['list_price'];
	$discount_percent = $_POST['discount_percent'];	

	// Calculate the discount
	$discount = $list_price * $discount_percent * .01;
	$discount_price = $list_price - $discount;

	// Apply currency formatting to the dollar amount for output
	$list_price_formatted = "$".number_format($list_price, 2);
	$discount_percent_formatted = $discount_percent."%";
	$discount_formatted = "$".number_format($discount, 2);
	$discount_price_formatted = "$".number_format($discount_price, 2);

	// Output the results
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Product Discount Calculator</title>
	<link rel="shortcut icon" href="images/homer.ico" />
	<!-- <link rel="stylesheet" href="css/reset.css" /> -->
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/nav.css" />
		<style>
		/* Layout */
		
		form {
			width: 450px;
			margin: 0 auto;
			padding: 15px;
		}
		
		label {
			width: 10em;
			padding-right: 1em;
			float: left;
		}
		
		#data input {
			float: left;
			width: 15em;
			margin-bottom: .5em;
		}
		
		#button input {
			float: left;
			margin-bottom: .5em;
		}
		
		br {
			clear: left;
		}
		
		#mainContent {
			text-align: center;
			color: navy;
		}
		
		/* Presentation */
		
		form {
			border: 2px solid navy;
		}
		
		section {
			overflow: auto;
		}
	</style>
</head>
<body>
<header>
		<img src="images/Homer_Rock_and_Roll.jpg" alt="Homer" width="100" height="100" />
		<hgroup>
			<h1>Homer's Music Store</h1>
			<h2>Rock On!</h2>
		</hgroup>
		<nav>
			<ul id="main">
				<li><a href="index.html">Home</a></li>
				<li><a href="multi_column.html">Layout</a>
					<ul>
						<li><a href="two_column_left.html">2 Column Float Left</a></li>
						<li><a href="two_column_right.html">2 Column Float Right</a></li>
						<li><a href="three_column.html">3 Column Float</a></li>
					</ul>
				</li>
				<li><a href="table.html">Tables</a></li>
				<li><a href="images.html">Graphics</a></li>
				<li><a href="video.html">Multimedia</a></li>
				<li><a href="email_form.html">Forms</a></li>
				<li><a href="product.php">Products</a></li>
				<li><a href="geolocation.html">Stuff</a></li>
			</ul>
		</nav>
	</header>
	<section id="container">
    	<div id="content">
        	<h1>Product Discount</h1>

        	<label>Product Description:</label>
        	<output><?php echo $product_description; ?></output><br />

        	<label>List Price:</label>
        	<output><?php echo $list_price_formatted; ?></output><br />

        	<label>Standard Discount:</label>
        	<output><?php echo $discount_percent_formatted; ?></output><br />

        	<label>Discount Amount:</label>
        	<output><?php echo $discount_formatted; ?></output><br />

        	<label>Discount Price:</label>
        	<output><?php echo $discount_price_formatted; ?></output><br />

        	<p>&nbsp;</p>
    	</div>
    </section>
    <footer>
		<p>&copy; 2012 Homer J. Simpson</p>
	</footer>
</body>
</html>