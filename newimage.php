<?php
      
	  ini_set('mysql.connect_timeout',300);
	  ini_set('default_socket_timeout',300);

?>
<html>
     <head>
	     <title></title>
	</head>
	<body>
	     <form method="post" enctype="multipart/form-data">
		 <br>
		    
		 <input type ="file" name="image">
         <br>
		 <br>
		 <input type="submit" name="sumit" value="upload">
		 </form>
		 
		 <?php
		 
		 if(isset($_POST['sumit']))
		 {
			 if(getimagesize($_FILES['image']['tmp_name'])== FALSE)
			 {
				 echo"Please select an image";
			 }
			 else
			 {
				 $image = addslashes($_FILES['image']['tmp_name']);
				 $name = addslashes($_FILES['image']['name']);
				 $image = file_get_contents($image);
				 $image = base64_encode($image);
				 saveimage($name,$image);
				 
			 }
		 }
		      displayimage();
		     function saveimage($name, $image)
			 {
				 $con = mysql_connect("localhost","root","");
				 mysql_select_db("login",$con);
				 $qry = "insert into image_new (name, image) values('$name', '$image')";
				 $result = mysql_query($qry,$con);
				if($result)
				{
					//echo "<br><br><br> Image Uploaded";
				}
				else
				{
					Echo"<br> Image is Not uploaded";
				}
				 
			 }
			 
			 function displayimage()
			 
			 {
				 $con = mysql_connect("localhost","root","");
				 mysql_select_db("login",$con);
				 $qry = "select * from image_new"; 
				 $result = mysql_query($qry,$con);
				 while($row = mysql_fetch_assoc($result))
				 {
					// var_dump($row);
					 //exit;
					 echo'<img height="500" width="500" align = "center" src="data:image;base64,'.$row['image'].'">
					  <a href="delete.php?del='.$row['id'].'"><button>Delete</button></a><br><br><br>'; 
					 
					 
				 }
				 mysql_close($con);
			 }
		 ?>
	</body>
</html>	