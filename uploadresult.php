<?php
	include 'header.php'; ?>

<html>
	<body>
    <center></br>
	<table class="headings">
		<tr>
			<th colspan="9" style="text-align:center">Upload</th>
		</tr>
	</table>

	<h2 style="font-family:Source sans pro; font-size:25pt;">Thanks for uploading! </h2>
	<h3 style="font-family:Source sans pro; font-size:15pt;">Your item:</h3>

	<?php
		$target_dir = "Posters/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$from = $_FILES["fileToUpload"]["tmp_name"];
		$to = "Posters/".basename($_FILES["fileToUpload"]["name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

		move_uploaded_file($from, $to);
		if($check !== false) {
			$uploadOk = 1;
		} else {
			$uploadOk = 0; 
			}
		}
		
		$servername = "localhost";
		$username = "main";
		$password = "password";
		$dbname = "items";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}

		$name=$_POST["name"];
		$price=$_POST["price"];
		$rating=$_POST["rating"];
		$category=$_POST["category"];
		$link="productpage.php";
		
		$sql = "INSERT INTO posters (name, price, rating, link, category, imgpath)
		VALUES ('$name', '$price', '$rating', '$link', '$category', '$target_file')";
		
		if ($conn->query($sql) === TRUE) {
			echo '</br>';
			echo "New record created successfully";
			} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
			}
		
			$conn->close();
		?>

	<p style="font-family:Source Sans Pro;"> Name: <?php echo $name ?>, Price: <?php echo $price ?>, Rating: <?php echo $rating ?> Star(s), Category: <?php echo $category ?>, File: <?php echo $target_file ?> </p>
	<img border=1 style="width:320px; height:auto;" src='<?php echo $target_file ?>'></img>
	</center>
	</body>
	<hr>
</html>

	<?php include 'footer.php' ?>
