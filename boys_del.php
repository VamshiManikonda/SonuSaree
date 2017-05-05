<?php

      $con = mysql_connect("localhost","root","");
	  mysql_select_db("login",$con);
   
    if(isset($_GET['del']))
	{
		$id= $_GET['del'];
		$qry = "delete from boys where id='$id'";
		
		$result = mysql_query($qry,$con);
		
				if($result)
				{
					echo "<br><br><br> Image successfully Deleted ";
					
                    header('Location:boys.php');
                    
					
				}
				else
				{
					Echo"<br> Image is Not Deleted";
					
                    header('Location:boys.php');
                   
				}
				 
	}
?>