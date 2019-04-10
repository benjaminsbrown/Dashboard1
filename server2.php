<?php
session_start();

// initializing variables
$staffname = "";
$contract = "";
$worked = "";
$employment = "";
$started = "";
$ended = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'dashboard1');

//Adding staff members
if (isset($_POST['reg_staff'])) {

  $staffname = $_POST['staffname'];
  $contract = $_POST['contract'];
  $worked = $_POST['worked'];
  $employment = $_POST['employment'];
  $started = $_POST['started'];
  $ended = $_POST['ended'];


  if (empty($staffname)) { array_push($errors, "A name is required"); }
  if (empty($contract)) { array_push($errors, "Contract hours required"); }
  if (empty($worked)) { array_push($errors, "Hours worked is required"); }
  if (empty($employment)) { array_push($errors, "Type of employee required"); }
  if (empty($started)) { array_push($errors, "Start date required"); }
  if (empty($ended)) { array_push($errors, "End date required"); }
  if (count($errors) == 0) {

    $query = "INSERT INTO Staff2 (staffname , contract , worked , employment , started , ended)
  			  VALUES('$staffname', '$contract', '$worked', '$employment', '$started', '$ended')";

}
}

// ...
?>
