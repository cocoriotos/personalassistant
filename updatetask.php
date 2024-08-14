<?php 
include "db_connection1.php";

$id=$_POST["id"];
$task=$_POST["task"];
$description=$_POST["description"];
$project=$_POST["project"];
$region=$_POST["region"];
$subregion=$_POST["subregion"];
$username1=$_POST["username"];



$query="UPDATE dailytasks_dailytask SET task = '$task',description = '$description',project = '$project',region = '$region',subregion ='$subregion', completedate = CURRENT_TIMESTAMP where id = '$id'";
$resultado= $conn ->query($query);

if ($resultado){
  echo 	"Task Updated";
  $_SESSION['message']='Task Updated Successfully';
  $_SESSION['message_type']='Success';
  header("refresh:0; url=dailytaskadminmodule.php");
    }
  else{
      echo 	"Task Not Updated";
      header("refresh:0; url=dailytaskadminmodule.php");
      }
?>