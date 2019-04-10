<?php
session_start();

$name = "";
$contract = "";
$worked = "";
$employment = "";
$started = "";
$ended = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'dashboard1');

if (isset($_POST['reg_staff'])) {
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $contract = mysqli_real_escape_string($db, $_POST['contract']);
  $worked = mysqli_real_escape_string($db, $_POST['worked']);
  $employment = mysqli_real_escape_string($db, $_POST['employment']);
  $started = mysqli_real_escape_string($db, $_POST['started']);
  $ended = mysqli_real_escape_string($db, $_POST['ended']);


  if (empty($name)) { array_push($errors, "name is required"); }
  if (empty($contract)) { array_push($errors, "Contract hours is required"); }
  if (empty($employment)) { array_push($errors, "employment is required"); }
  if (empty($started)) { array_push($errors, "Start date is required"); }

  if (count($errors) == 0) {


  	$query = "INSERT INTO Staff2 (name, contract, worked, employment, started, ended)
          VALUES ('$name', '$contract', '$worked', '$employment', '$started', '$ended')";
  }
}


?>
