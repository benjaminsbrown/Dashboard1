<?php
session_start();

if ((isset($_POST['reg_staff'])) && ! empty( $_POST ) ) {

  $mysqli = new mysqli( 'localhost', 'root', '', 'dashboard1' );

  if ( $mysqli->connect_error ) {
    die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
  }

  $sql = "INSERT INTO Staff2 (staffname, contract, worked, employment, starteddate, endeddate) VALUES( '{$mysqli->real_escape_string($_POST['staffname'])}', '{$mysqli->real_escape_string($_POST['contract'])}', '{$mysqli->real_escape_string($_POST['worked'])}', '{$mysqli->real_escape_string($_POST['employment'])}',
   '{$mysqli->real_escape_string($_POST['starteddate'])}', '{$mysqli->real_escape_string($_POST['endeddate'])}')";
  $insert = $mysqli->query($sql);
  }

  $mysqli->close();

?>
