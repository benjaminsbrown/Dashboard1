<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Add New staff to database</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>New staff deets</h2>
  </div>

  <form method="post" action="">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Name</label>
      <input type="text" name="staffname" value="<?php echo $staffname; ?>">
    </div>
    <div class="input-group">
      <label>Contract hours</label>
      <input type="text" name="contract" >
    </div>
    <div class="input-group">
    <label>Actual hours</label>
    <input type="text" name="worked" >
  </div>
    <div class="input-group">
      <label>Employment</label>
      <input type="text" name="employment" >
    </div>
    <div class="input-group">
      <label>Start Date</label>
      <input type="text" name="starteddate" >
    </div>
    <div class="input-group">
      <label>End Date</label>
      <input type="text" name="endeddate" >
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_staff">Add Staff</button>
    </div>
  </form>
</body>
</html>
