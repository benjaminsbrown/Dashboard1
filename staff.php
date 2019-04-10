<?php include('server2.php') ?>
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
      <input type="text" name="name" >
    </div>
    <div class="input-group">
      <label>Contract hours</label>
      <input type="text" name="contract" >
    </div>
    <label>Actual hours</label>
    <input type="text" name="worked" >
  </div>
    <div class="input-group">
      <label>Employment</label>
      <input type="text" name="employment" >
    </div>
    <div class="input-group">
      <label>Start Date</label>
      <input type="text" name="started" >
    </div>
    <div class="input-group">
      <label>End Date</label>
      <input type="text" name="ended" >
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_staff">Add Staff</button>
    </div>
  </form>
</body>
</html>
