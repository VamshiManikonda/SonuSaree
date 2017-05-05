<html>
     <head>
	     <title> Pakistani Suites Page</title>
		 <link rel="stylesheet" type="text/css" href="style.css">
		 <style type="text/css">
			div#abc {
			  background-color: white;
			}
			
			div#abc{
			  text-align:center;
			}

			div#abc img, div#abc a {
			  margin-left: auto; 
			  margin-right: auto;
			}
		 
		 </style>
	</head>
    <body>
	     <div class="container">

				<header>
				   <h1>SONU SAREE PALACE</h1>
				   <p>1420, GERARD STREET EAST, TORONTO, ON, M4L 1Z6 <i> (EST 1979)</i></p>
				</header>

				<ul>
				  <li><a href="homepage.html">HOME</a></li>
				  <li><a href="contactus.html">CONTACT US</a></li>
				  <li><a href="aboutus.html">ABOUT US</a></li>
				  <li class="dropdown">
					<a href="javascript:void(0)" class="dropbtn">MENS</a>
					<div class="dropdown-content">
					  <a href="sherwanis.php">SHERWANIS</a>
					  <a href="kurthapyjama.php">KURTH PYJAMAS</a>
					  <a href="vestcoats.php">VEST COATS</a>
					  <a href="shoes.php">SHOES</a>
					</div>
				  </li>
				  <li class="dropdown">
					<a href="javascript:void(0)" class="dropbtn">LADIES</a>
					<div class="dropdown-content">
					  <a href="sarees.php">SAREES</a>
					  <a href="lehenga.php">LEHENGAS</a>
					  <a href="pakistani_suites.php">PAKISTANI SUITES</a>
					  <a href="blouse.php">READYMADE BLOUSES</a>
					  <a href="cotton_dresses.php">COTTON DRESSES</a>
					  <a href="sandals.php">SANDLES, HIGH HEELS</a>
					</div>
				  </li>
				  <li class="dropdown">
					<a href="javascript:void(0)" class="dropbtn">CHILDREN</a>
					<div class="dropdown-content">
					  <a href="boys.php">BOYS SHERWANIS(2-14 YEARS)</a>
					  <a href="girls.php">GIRL'S SUITES</a>
					</div>
				  </li>
				   <li class="dropdown">
					<a href="javascript:void(0)" class="dropbtn">OTHER ACCESSORIES</a>
					<div class="dropdown-content">
					  <a href="bridal_set.php">BRIDAL SETS</a>
					  <a href="fabrics.php">LINING MATERIALES</a>
					  <a href="dhuphatas.php">READYMADE DHUPATTAS</a>
					  <a href="bangles.php">ALL KINDS OF BANGLES</a>
					</div>
				  </li>
				  <li><a href="login.php">ADMIN</a></li>
				  
				</ul>


	
	
	<?php
	session_start();
	
	$formCode = <<<HTML
			<form action="" method ="POST" enctype="multipart/form-data">
				<h2 align ="center">PAKISTANI SUITES IMAGE UPLOAD PAGE</h2>
				<table align="center">
				<tr>
				<td><label>Image</label>
				<td><label>:</label>
				<td><label><input type="file" name="img" required></label></td>
				</tr>
				<tr>
				<td><label></label>
				<td><label></label>
				<td><label><input type="submit" name="save_btn" value="SAVE"></label></td>
				</tr>
				</table>
			</form>
	<br/><table align="center"><td> <a href="logout.php"><button>Logout</button></a></td></table><br/>
HTML;

//var_dump($_SESSION);

	if(isset($_SESSION['is_admin']) && ($_SESSION['is_admin'] == true)) {
		echo $formCode;
	}
	
	
	if($con= mysqli_connect("localhost","root","","login")) {
				
					//echo" Image Inserted Successfully";
				    $q = mysqli_query($con, "SELECT id, path from pakistani_suites");
					
					while($row = $q->fetch_assoc()) {
						//var_dump($row); exit;
						$images[$row['id']] = $row['path'];
						
					
					
					//var_dump($images);exit;
					echo '<div id=\'abc\'>';
					foreach ($images as $id=>$img) {
						echo "<img src='$img' width='500' border=\"2px\" /><br/>";
					}

						if(isset($_SESSION['is_admin']) && ($_SESSION['is_admin'] == true)) {
										echo "<a href='fabric_del.php?del=$id'><br/><button>Delete</button></a><br/><br/>";
									}

						
					}
					echo '</div>';
					
	}
	
	    if(isset($_POST['save_btn']))
		{
			if($con)
			{
				$imgFolder = $_FILES['img'];
				$filetmp= $imgFolder['tmp_name'];
				$filename= $imgFolder['name'];
				$filetype= $imgFolder['type'];
				$filepath= "pakistanisuites/".$filename;
				
				move_uploaded_file($filetmp, $filepath);
				$query = mysqli_query($con,"INSERT INTO pakistani_suites(name, path, type) VALUES('$filename','$filepath','$filetype')");

			}
		}
		
	
	?>
		<footer>
				<p> Copyright &copy; Sonu Saree Palace<br>
				<style="color:red"></style>E-mail us @: someone@example.com.<br>
				Phone Number: +416-469-2800</p>
       </footer>

</div>
	
	</body>
	
</html>
	
	
	
	

    	