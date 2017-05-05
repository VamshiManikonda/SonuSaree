<html>
     <head>
	     <title> Image Insertion Page</title>
		 <style type="text/css">
			div#abc {
			  background-color: black
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
	
	
	<?php
	session_start();
	
	$formCode = <<<HTML
			<form action="" method ="POST" enctype="multipart/form-data">
				<h2 align ="center"> IMAGE INSERTION PAGE</h2>
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
	<br/><a href="logout.php"><button>Logout</button></a><br/>
HTML;

//var_dump($_SESSION);

	if(isset($_SESSION['is_admin']) && ($_SESSION['is_admin'] == true)) {
		echo $formCode;
	}
	
	
	if($con= mysqli_connect("localhost","root","","login")) {
				
					//echo" Image Inserted Successfully";
				    $q = mysqli_query($con, "SELECT id, path from image");
					
					while($row = $q->fetch_assoc()) {
						//var_dump($row); exit;
						$images[$row['id']] = $row['path'];
						
					}
					
					//var_dump($images);exit;
					echo '<div id=\'abc\'>';
					foreach ($images as $id=>$img) {
						echo "<img src='$img' width='1000' /><br/>";

						if(isset($_SESSION['is_admin']) && ($_SESSION['is_admin'] == true)) {
										echo "<a href='delete.php?del=$id'><br/>Delete<br/><br/>";
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
				$filename= $_FILES['img']['name'];
				$filetype= $_FILES['img']['type'];
				$filepath= "uploads/".$filename;
				
				move_uploaded_file($filetmp, $filepath);
				$query = mysqli_query($con,"INSERT INTO image(name, path, type) VALUES('$filename','$filepath','$filetype')");

			}
		}
		
	
	?>
	
	</body>
</html>
	
	
	
	

    	