<?php include ('server.php')?>
<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!Doctype html>
<html>
<head>
  <title>Add New staff to database</title>
  <link rel="stylesheet" type="text/css" href"style.css">
</head>
<body>
  <div class="header">
    <h2>New staff details</h2>
  </div>

  <form method="post" action="staff.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Name</label>
      <input type="text" name="Name" >
    </div>
    <div class="input-group">
      <label>Contract hours</label>
      <input type="number" name="Contract_hours" >
    </div>
    <div class="input-group">
      <label>Start Date</label>
      <input type="date" name="Start_date" >
    </div>
    <div class="input-group">
      <label>End Date</label>
      <input type="date" name="End_date" >
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_staff">Add Staff</button>
    </div>
  </form>
</body>
</html>
