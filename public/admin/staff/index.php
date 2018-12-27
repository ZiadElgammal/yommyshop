<?php $selected = "admins";?>
<?php require_once('../../../private/initialize.php'); ?>
<?php require_once(INCLUDES_PATH.'/admin_header.php'); ?>

<div class="container">
  <h3>Welcome to admin page</h3>
  <a href="new.php">add New admin</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
          <th scope="col">first Name</th>
        <th scope="col">last Name</th>
          <th scope="col">email</th>
        <th scope="col">username</th>
        <th scope="col">hased_password</th>
      </tr>
      <?php
      //Get all categories from database
      $admins = Admin::find_all();
      foreach ($admins as $admin) {
        echo "<tr>";
        echo "<td>".$admin->getId()."</td>";
        echo "<td>".$admin->getFirstName()."</td>";
        echo "<td>".$admin->getLastName()."</td>";
        echo "<td>".$admin->getEmail()."</td>";
        echo "<td>".$admin->getUsername()."</td>";
        echo "<td>".$admin->getHashedPassword()."</td>";
        echo "<td>"
        ."<a href='view.php?id={$admin->getId()}'>". "View" ."</a>"
        ."<a href='edit.php?id={$admin->getId()}'>". "  - Edit" ."</a>"
        ."<a href='delete.php?id={$admin->getId()}' "
        ."onclick='return confirm(\"Are you sure?\")' >". "  -  Delete" ."</a>"
        ."</td>";
        echo "</tr>";
        //print_r($cat);
      }


      ?>

    </thead>

</div>
<script type="text/javascript">
    $('.confirmation').on('click', function () {
        return confirm('Are you sure?');
    });
</script>
</body>
</html>
