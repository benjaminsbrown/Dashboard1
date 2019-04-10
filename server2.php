started<?php
session_start();

$name = "";
$contract = "";
$worked = "";
$employment = "";
$started = "";
$ended = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'dashboard1');

//Adding staff members
if (isset($_POST['reg_staff'])) {
  $name = $_POST['name'];
  $contract = $_POST['contract'];
  $worked = $_POST['worked'];
  $employment = $_POST['employment'];
  $started = $_POST['started'];
  $ended = $_POST['ended'];


  if (empty($name)) { array_push($errors, "name is required"); }
  if (empty($contract)) { array_push($errors, "Contract hours is required"); }
  if (empty($employment)) { array_push($errors, "employment is required"); }
  if (empty($started)) { array_push($errors, "Start date is required"); }

  if (count($errors) == 0) {


  	$query = "INSERT INTO staff2 VALUES ('".$name."', '".$contract."','".$worked."', '".$employment."', '".$started."', '".$ended."')";
  }
}


?>
