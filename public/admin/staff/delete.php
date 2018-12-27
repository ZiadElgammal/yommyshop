<?php $selected = "admins";?>

<?php require_once('../../../private/initialize.php'); ?>
<?php require_once(INCLUDES_PATH.'/admin_header.php'); ?>
<?php
db_connect();
$args['id'] = $_GET['id'];
$admins = new Admin($args);

if($admins->delete())
{
  echo "Category deleted Successfully";
  header("Location: index.php" );
}
?>
