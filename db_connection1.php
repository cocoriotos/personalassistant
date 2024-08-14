<!--Developed by julian Gonzalez-->
<?php
  session_start();
  $db_host="127.0.0.1";
  $db_user="u927778197_adm";
  $db_pass="C0mp13t3501ut10n5*";
  $db_name="u927778197_appsdb";
	 
  $conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die ("Unable to connect");
  $query1 = "USE $db_name";
  $resultado1= $conn->query($query1);
  $query2 = "UPDATE dailytasks_dailytask SET completedate = CURRENT_TIMESTAMP where completed = 0";
  $resultado2= $conn->query($query2);
  $query3 = "UPDATE dailytasks_dailytask SET difference = timestampdiff(day, creationdate, completedate);";
  $resultado3= $conn->query($query3);
  
  
  
  
  
  if(mysqli_connect_errno()) /*if mysql connection is not success then will generate error message*/
			{
			echo "Not Database connection success";
			echo "<br>";
			echo "<br>";
			echo "<br>";
			exit();/*Break php file and next lines*/
			}
  mysqli_select_db($conn,$db_name) or die ("There is not Database available");/*database is not available*/			
  /*mysqli_set_charset($conexion,"utf8");/*to display  correct latin america characters */
  if ($conn==true)
			  {
			  echo "<center>Congratulations! You are already connected to Main Database</center>";
			  echo "<br>";	
			 
			  }
?>
