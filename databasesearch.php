<!DOCTYPE html>
<html>
	
<!--Header -->
<?php include 'header.php';	echo "<br><br><br>"?>

<?php
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

//Getting posted search results
$searchValue=$_POST["searchbar"];

$sql2 = "SELECT * FROM posters WHERE name like '%$searchValue%'";
$results=$conn->query($sql2);

//New array based on search results
echo "<br>";
$someproducts = Array();
$i = 0;
while($row = $results->fetch_assoc()){
    $someproducts[$i] = $row;
    $i++;   
    }//Closing while
    $products = json_encode($someproducts);

    echo "<script>var products = " . $products . "; </script>";
?> 

<script type="text/javascript" src="JavaScript/databasejavascript.js"></script>

<!---------------------------------Beginning of Page---------------------------------------->

<table class="headings">
		<tr>
			<th colspan="9">Results </th>
		</tr>
    </table>
    </br>
	<main>
    
        <body>
            <div class = "filter-list">
                <b>Filter By:</b>
                <input type="checkbox" id="one" name="stars" value="1"/>
                1 Star
                <input type="checkbox" id="two" name="stars" value="2"/>
                2 Stars
                <input type="checkbox" id="three" name="stars" value="3"/>
                3 Stars
                <input type="checkbox" id="four" name="stars" value="4"/>
                4 Stars
                <input type="checkbox" id="five" name="stars" value="5"/>
                5 Stars
                </br>
            </div>

            <div class="sort-list">
                <b>Sort By:</b>
                <select id ="sorting" name="Sorting">
                    <option id = "lowhigh" value="lowhigh">Lowest Price First</option>
                    <option id = "highlow" value="highlow">Highest Price First</option>
                </select>
            </div></br>
        <center>

    <!--SEARCH RESULTS START-->
    <div id="biggercontainer">    
        <div id="container" class="searchresult">
            <p id ="details"> <!-- --> </p>
        </div>    
    </div>
</main>
<!---------------------------------End of Page---------------------------------------->
</br>
<hr>
    <!--Footer -->
	<?php include 'footer.php';	?>
    <?php $conn->close()?>
</html>