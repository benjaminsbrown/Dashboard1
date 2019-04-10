<?php
session_start();

$Name = "";
$Contract_hours = "";
$Actual_hours = "";
$Employment = "";
$Start_date = "";
$End_date = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'dashboard1');

//Adding staff members
if (isset($_POST['reg_staff'])) {
  $Name = mysqli_real_escape_string($db, $_POST['Name']);
  $Contract_hours = mysqli_real_escape_string($db, $_POST['Contract_hours']);
  $Actual_hours = mysqli_real_escape_string($db, $_POST['Actual_hours']);
  $Employment = mysqli_real_escape_string($db, $_POST['Employment']);
  $Start_date = mysqli_real_escape_string($db, $_POST['Start_date']);
  $End_date = mysqli_real_escape_string($db, $_POST['End_date']);


  if (empty($Name)) { array_push($errors, "Name is required"); }
  if (empty($Contract_hours)) { array_push($errors, "Contract hours is required"); }
  if (empty($Employment)) { array_push($errors, "Employment is required"); }
  if (empty($Start_date)) { array_push($errors, "Start date is required"); }

  if (count($errors) == 0) {


  	$query = "INSERT INTO staff1 (Name, Contract_hours, Actual_hours, Employment, Start_date, End_date)
  			  VALUES('$Name', '$Contract_hours','$Actual_hours', '$Employment', '$Start_date', '$End_date')";
  }
}


?>
