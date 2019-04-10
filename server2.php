<?php
session_start();

<<<<<<< HEAD
// initializing variables
=======
>>>>>>> c33fc76233e8e4349894ffc43ac975b852af8996
$staffname = "";
$contract = "";
$worked = "";
$employment = "";
$started = "";
$ended = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'dashboard1');

<<<<<<< HEAD
//Adding staff members
if (isset($_POST['reg_staff'])) {
=======
if (isset($_POST['add_staff'])) {
  $staffname = mysqli_real_escape_string($db, $_POST['staffname']);
  $contract = mysqli_real_escape_string($db, $_POST['contract']);
  $worked = mysqli_real_escape_string($db, $_POST['worked']);
  $employment = mysqli_real_escape_string($db, $_POST['employment']);
  $started = mysqli_real_escape_string($db, $_POST['started']);
  $ended = mysqli_real_escape_string($db, $_POST['ended']);
>>>>>>> c33fc76233e8e4349894ffc43ac975b852af8996

  $staffname = $_POST['staffname'];
  $contract = $_POST['contract'];
  $worked = $_POST['worked'];
  $employment = $_POST['employment'];
  $started = $_POST['started'];
  $ended = $_POST['ended'];

<<<<<<< HEAD
=======
  if (empty($staffname)) { array_push($errors, "staffname is required"); }
  if (empty($contract)) { array_push($errors, "Contract hours is required"); }
  if (empty($employment)) { array_push($errors, "employment is required"); }
  if (empty($started)) { array_push($errors, "Start date is required"); }
>>>>>>> c33fc76233e8e4349894ffc43ac975b852af8996

  if (empty($staffname)) { array_push($errors, "A name is required"); }
  if (empty($contract)) { array_push($errors, "Contract hours required"); }
  if (empty($worked)) { array_push($errors, "Hours worked is required"); }
  if (empty($employment)) { array_push($errors, "Type of employee required"); }
  if (empty($started)) { array_push($errors, "Start date required"); }
  if (empty($ended)) { array_push($errors, "End date required"); }
  if (count($errors) == 0) {
<<<<<<< HEAD

    $query = "INSERT INTO Staff2 (staffname , contract , worked , employment , started , ended)
  			  VALUES('$staffname', '$contract', '$worked', '$employment', '$started', '$ended')";

}
}

// ...
=======
  	$query = "INSERT INTO Staff2 (staffname, contract, worked, employment, started, ended)
          VALUES ('$staffname', '$contract', '$worked', '$employment', '$started', '$ended')";
  }
}
>>>>>>> c33fc76233e8e4349894ffc43ac975b852af8996
?>
