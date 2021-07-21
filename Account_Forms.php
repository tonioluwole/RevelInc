<!DOCTYPE html>
<html>

	<!--Header -->
	<?php include 'header.php';	?>
	
<!----------------------Start Page------------------------------------------------------------------------------------------------------------>
	
	<center><table class="headings">
		<tr>
			<th colspan="9" style="text-align:center">Account</th>
		</tr>
	</table></center>
			
	<body style="font-family:open sans; text-align:left">
			
	<form id="item1" method="post" action="action_page.php">
		<fieldset id="legendary" class="fieldset">
		<legend style="font-family:K2D; font-size:25px"><b>Account information:</b></legend>
			<b>First Name:</b>
				<input class="form" type="text" name="First_name" value="e.g John";>
			
			<b>Last Name:</b>
				<input class="form" type="text" name="Last_name" value="e.g Doe";></br></br>
		
			<b>Username:</b><br/>
				<input class="form" type="text" name="username" value=><br/>	
			<b>Password:</b><br/>
				<input type="password" name="password" value=><br/></br>
		
			<b>How did you hear about us?</b></br>
				<input type="radio" name="how they heard about us" value="Facebook Page" />
				Facebook Page</br>
				
				<input type="radio" name="how they heard about us" value="Google Ad" />
				Google Ad</br>
				
				<input type="radio" name="how they heard about us" value="Third-Party Blog" />
				Third-Party Blog</br>
				
				<input type="radio" name="how they heard about us" value="Friends & Family" />
				Friends & Family</br>
				
				<input type="radio" name="how they heard about us" value="Online Search" />
				Online Search</br></br>
			
		<b>Home City:</b>
		<input class="homecity" list="Home city" />
			<datalist id="Home city">
				<option value="Ottawa" />
				<option value="Toronto" />
				<option value="Montreal" />
			</datalist></br>
			(If you do not see yours in the list it means we do not ship to you... yet!)
			</br></br>
		
		<b>Favourite Colour:</b>
		<input type="color" name="Cape Color"></br>
		<input type="radio" name="Preference 1" value="Set default apparel colour to favourite colour" />Set default apparel colour to favourite colour</br></br>
		
		</br>
			
		<b>Bio (For public Profile):</b></br>
		<textarea class="form" name="bio" rows="10" cols="100" style="font-family:Trebuchet MS; text-align:left">
</textarea></br></br>	
		
		<b>How likely are you to finish filling out this questionnaire:</b></br>
		Not likely at all <input type="range" id="likelihood" list="tickmarks" name="reccomendation likelihood" min="0" max="10" value="5" /> Very likely
		<br /></br>
		
		<b>How many times do you buy clothes online each month?:</b>
			<input type="number" id="b" name="b" value="4"><br/></br>
			
		<b>Favourite Item of clothing (Check all that apply):</b></br>
			<input onclick="calc();" type="checkbox" id="testing" name="Item 1" value="T-Shirt" />
			T-Shirt</br>
			
			<input type="checkbox" id="tested" name="Item 2" value="Beanies" />
			Beanies</br>
			
			<input type="checkbox" name="Item 3" value="Hats" />
			Hats</br>
			
			<input type="checkbox" name="Item 4" value="Dress Hoodies" />
			Dress Hoodies</br>
			
			<input type="checkbox" name="Item 5" value="Footwear" />
			Footwear</br>
			
			<input type="checkbox" name="Item 6" value="Jackets" />
			Jackets</br>
			
		Other:</br>
		<textarea class="form" name="other fave item of clothing" rows="1" cols="50" style="font-family:Trebuchet MS; text-align:left">
</textarea></br></br>
			
			
		<b>What's your favourite car? (We are partnered with the clothing department of these car brands... #Ad)</b>
		<select name="Favourite Car">
			<option value="Acura">Acura</option>
			<option value="Audi">Audi</option>
			<option value="BMW">BMW</option>
			<option value="Chevrolet" >Chevrolet</option>
			<option value="Ferrari">Ferrari</option>
			<option value="Fiat">Fiat</option>
			<option value="Honda">Honda</option>
			<option value="Hyundai">Hyundai</option>
			<option value="Jaguar">Jaguar</option>
			<option value="Kia">Kia</option>
			<option value="Land Rover">Land Rover</option>
			<option value="Mercedes">Mercedes</option>
			<option value="Nissan">Nissan</option>
			<option value="Porsche">Porsche</option>
			<option value="Suzuki">Suzuki</option>
			<option value="Tesla">Tesla</option>
			<option value="Toyota">Toyota</option>
			<option value="Volkswagen">Volkswagen</option>
			
		<form action="homepage.html">
		<input type="submit" value="Don't click me!" onclick="alert('Why did you click me?!')">
			</button><br /></form>
			
		<input type="submit" value="Submit Answers" onclick="alert('Thank You!')">
		<input type="reset" value="Reset" /> 
	</fieldset>
	</form>
	</body>
<!--End of Forms------------------------------------------------------------------------------------------------------------------------------>
	<hr>
	<!--Footer -->
	<?php include 'footer.php';	?>
<html>