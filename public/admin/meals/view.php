<?php $selected = "meals";?>
<?php require_once('../../../private/initialize.php'); ?>
<?php require_once(INCLUDES_PATH.'/admin_header.php'); ?>
<div class="container">
  <a href="index.php"> All MEALS  </a>
</br>

<table class="table">
  <?php

  $meal = MenuItem::find_by_id($_GET['id']);

  echo "<h3> ID: {$meal->getID()}</h3>";

  echo "<h3> Name: {$meal->getName()}</h3>";

  echo "<h3> Photo </h3>";
  echo "<img height='100' width='100' src ='../../img/".$meal->getPhoto()."'></img>";

  ?>

</table>



</div>

</body>
</html>
