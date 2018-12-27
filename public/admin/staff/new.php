<?php $selected = "admins";?>
<?php require_once('../../../private/initialize.php'); ?>
<?php require_once(INCLUDES_PATH.'/admin_header.php'); ?>
<div class="container">
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $hashed_password = $_POST['password'];
//  print_r($hashed_password);




  $args['first_name'] = $first_name;
  $args['last_name'] = $last_name;
  $args['email'] = $email;
  $args['username'] = $username;
  $args['hashed_password'] = password_hash($hashed_password,PASSWORD_BCRYPT);
  $admin = new admin($args);

  if($admin->create())
  echo "admin Created Successfully";
  else
  echo "Not created";
  die("");
}

?>
<form role="form"  action="new.php" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="form-group col-lg-4">
      <label for="code">first_name:</label>
      <input type="text" name="first_name" class="form-control" />
      <label for="code">last_name:</label>
      <input type="text" name="last_name" class="form-control" />
      <label for="code">email:</label>
      <input type="text" name="email" class="form-control" />
      <label for="code">username: </label>
      <input type="text" name="username" class="form-control" />
      <label for="code">password: </label>
      <input type="text" name="password" class="form-control" />
    </div>
  </div>

    <div class="row">
      <div class="form-group col-lg-1 ">
        <input class="btn btn-primary"  type="submit" name="submit" value="Add">
      </div>
    </div>
  </div>


</form>
  <!-- /*
  //echo "inserting new admin". "</br>";
  $args['first_name'] = "Mohammed";
  $args['last_name'] = "Saudi";
  $args['email'] = "msaudi.cse@gmail.com";
  $args['username'] = "msaudi";
  $password = 'IUR123456';
  $args['hashed_password'] = password_hash($password, PASSWORD_BCRYPT);

  $admin = new Admin($args);
  $result = $admin->create();
  var_dump($result);

 ?>
 */ -->
</div> <!-- END DIV CONTAINER-->
