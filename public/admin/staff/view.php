<?php $selected = "admins";?>
<?php require_once('../../../private/initialize.php'); ?>
<?php require_once(INCLUDES_PATH.'/admin_header.php'); ?>
<div class="container">
  <a href="index.php"> View All Admins  </a>
</br>

<table class="table">
  <?php

  $admin = Admin::find_by_id($_GET['id']);

  echo "<h3> ID: {$admin->getID()}</h3>";

  echo "<h3> FirstName: {$admin->getFirstName()}</h3>";
  echo "<h3> LastName: {$admin->getLastName()}</h3>";
  echo "<h3> username: {$admin->getUsername()}</h3>";
  echo "<h3> email: {$admin->getEmail()}</h3>";
  echo "<h3> hased password: {$admin->getHashedPassword()}</h3>";






  ?>

</table>



</div>

</body>
</html>
