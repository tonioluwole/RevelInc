<!DOCTYPE html>
<html>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Serif+KR|Notable|Open+Sans|Source+Sans+Pro|Anton|K2D|Rubik|Josefin+Sans">
  <link rel="stylesheet" href="CSS/Template.css?v=<?php echo time(); ?>">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>

<head> 
  <ul class="MenuBar">
      <li class="headlist"> <a href="index.php"> <img id="RI" src="Mockups/logo.png" alt="Revel Inc Logo" style="width:35px;height:35px"></a></li>
      <li class="headlist"> <a href="OnePiece.php">ONE PIECE</a></li>
      <li class="headlist"> <a href="DemonSlayer.php">DEMON SLAYER</a></li>
      <li class="headlist"> <a href="JJK.php">JJK</a></li>
      <li class="headlist"> <a href="Haikyuu.php">HAIKYUU</a></li>
      <li class="headlist"> <a href="YourName.php">YOUR NAME</a></li>
      <li class="headlist"> <a href="AttackonTitan.php">AOT</a></li>
      <li class="headlist"> <a href="AboutUS.php">ABOUT US</a></li>
      <li class="headlist"> <a href="databasesearch.php">ALL</a></li> 
      <li class="headlist"> <a href="upload.php">UPLOAD</a></li>
      <li class="headlist" id="right"> <a href="Account_Forms.php"> <img id="RI" src="Mockups/profile.png" style="width:35px;height:35px"></a></li>
      <li class="headlist" id="right"> <a href="cart.php"> <img id="RI" src="Mockups/cart.png" style="width:35px;height:35px"></a></li>
      
      <form action="databasesearch.php" method = "POST" class="please">
          <li class="headlist" id="right"> <input id="searchbar" style="font-family:Rubik; width:70%; font-size:13pt;" type="search" placeholder="Search..." name="searchbar">
              <button style="font-family:Source Sans pro; font-size:12pt;" type="submit" id ="search">Submit</button> </li>
      </form>
  </ul>
</head>
</html>