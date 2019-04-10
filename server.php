<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$Name = "";
$Contract_hours = "";
$Actual_hours = "";
$Employment = "";
$Start_date = "";
$End_date = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dashboard1');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users1 WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users1 (username, email, password)
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// ...

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users1 WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
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


  	$query = "INSERT INTO staff1 (Name, Contract_hours,, Actual_hours, Employment, Start_date, End_date)
  			  VALUES('$Name', '$Contract_hours','$Actual_hours', '$Employment', '$Start_date', '$End_date')";
  }
}

?>
