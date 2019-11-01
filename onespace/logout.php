<?php 
/*ob_start();
session_start();
include 'admin/inc/config.php';
unset($_SESSION['customer']);
header("location: ".BASE_URL.'login.php'); */
?>

<?php
//logout.php
setcookie("type", "", time()-3600);

header("location:login.html");

?>