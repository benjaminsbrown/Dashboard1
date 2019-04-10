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
  $Name = $_POST['Name']);
  $Contract_hours = $_POST['Contract_hours'];
  $Actual_hours = $_POST['Actual_hours'];
  $Employment = $_POST['Employment'];
  $Start_date = $_POST['Start_date'];
  $End_date = $_POST['End_date'];


  if (empty($Name)) { array_push($errors, "Name is required"); }
  if (empty($Contract_hours)) { array_push($errors, "Contract hours is required"); }
  if (empty($Employment)) { array_push($errors, "Employment is required"); }
  if (empty($Start_date)) { array_push($errors, "Start date is required"); }

  if (count($errors) == 0) {


  	$query = "INSERT INTO staff2 (name, contract, worked, employment, started, ended) VALUES ('$Name', '$Contract_hours','$Actual_hours', '$Employment', '$Start_date', '$End_date')";
  }
}


?>
