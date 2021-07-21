<!DOCTYPE html>
<html>
	
	<!--Header -->
	<?php include 'header.php';	?>
	<script type="text/javascript" src="JavaScript/productpage4.js"></script>
	
	<body>
	<main class="container">

		<!--Left Column/Image-->
		<div id="left-column" class="left-column">
			
		</div>

		<!--Right Column-->
		<div class="right-column">

            <h2 id="rating" style="font-family: source sans pro;">Rating: </h2>
			

			<!--Product Description-->
			<div class="product-description">
				<span id = "Category"></span>
				<h1 id = "productName"></h1>
				<p id = "description"></p>               
			</div>

			<!--Product Pricing-->

			<div class="total-price"></div>
			<span id="total_amount"></span>
		
				<!--Quantity Selector-->
				<p style="font-family: Source Sans Pro;">Quantity: 
				<select name="quantity" class="qty" tabindex="1" id = "quantity">
					<option value="1"> 1 </option>/>
					<option value="2"> 2 </option>/>
					<option value="3"> 3 </option>/>
					<option value="4"> 4 </option>/>
					<option value="5"> 5 </option>/>
					<option value="6"> 6 </option>/>
					<option value="7"> 7 </option>/>
					<option value="8"> 8 </option>/>
					<option value="9"> 9 </option>/>
					<option value="10"> 10 </option>/>
					</select></p>
					
			</div>

        
		<div class="atcbutton">
		    <input type=button class="cart-btn" type="button" value="Add to Cart" >
        </div>
        
    </main>
    </body>
	<!--Footer -->
	<?php include 'footer.php';	?>
</html>