<!DOCTYPE html>
<html>

	<!--Header -->
	<?php include 'header.php';	?>
<!----------------------Start Page------------------------------------------------------------------------------------------------------------>
	
	<center><table class="headings">
		<tr>
			<th colspan="9" style="text-align:center">Upload</th>
		</tr>
	</table></center>
			
	<body style="font-family:open sans; text-align:left">
			
	<form id="uploadform" method="POST" action="uploadresult.php" enctype="multipart/form-data"> 
		<fieldset id="legendary" class="fieldset">

		<legend style="font-family:K2D; font-size:25px"><b>Product Information:</b></legend>
		</br><b>Name of product:</b>
				<input class="form" type="text" name="name" value="";> </br></br>
			
			<b>Price of product:</b>
				<input class = "form" type="number" id="b" name="price" value="" step=".01" placeholder="Search..."></br> </br>

				<b id = "rating" class = "form">
				Rating (Stars): 
				<select name="rating" class="qty" tabindex="1" id = "rating">
					<option value="1"> 1 </option>/>
					<option value="2"> 2 </option>/>
					<option value="3"> 3 </option>/>
					<option value="4"> 4 </option>/>
					<option value="5"> 5 </option>/>
					</select> </b></br></br>

			<b>Category (Anime):</b>
				<input class="form" type="text" name="category" placeholder="e.g Dragon Ball Z";></br></br>
			
			<b>Upload Image:</b>
			<input type="file" name="fileToUpload" id="fileToUpload">
			<input type="submit" value="Upload Image" name="submit">
			<p id="uploadError"></p>

			<span id = 'hideerror'></span>

		</br></br>
		<input type="reset" value="Reset" /> 
	</fieldset>
	</form>
	</body>

<!--End of Forms------------------------------------------------------------------------------------------------------------------------------>
	<hr>
	<!--Footer -->
	<?php include 'footer.php';	?>
</html>