
<?php 
     // getting the values from login.php
session_start();
     $username =  $_POST['user'];
	 $password =  $_POST['pass'];
	 
	 
	 //to prevent sql injection
	 $username =stripcslashes($username);
	 $password =stripcslashes($password);
	 
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	
	// connecting to the server and select the data base
	
	 mysql_connect("localhost","root","");
	 mysql_select_db("login");
	 
	 // query the database for user
	 $result = mysql_query("select * from users where user = '$username' and password='$password'")
	   or die("Failed to querry Database" .mysql_error());
		
		$row = mysql_fetch_array($result);
		if($row['user'] == $username && $row['password'] == $password)
		{
			echo "Login Succes!! Welcome".$row["user"];
			if($row['is_admin']==true){
				$_SESSION['is_admin'] = true;
			}
			
			header('Location:adminlogin.php');
			
			//if(isset($_SESSION['is_admin']) && ($_SESSION['is_admin'] == true)) {
			//	echo 'this is admin';
			//}
			
			echo "<a href=\"logout.php\"><button>Logout</button></a>";
		}
		else
		{
			echo' <h1 align="center">Failed to login</h1>';
		}
?>

		 
		 
		 
	 </body>
</html>	 
