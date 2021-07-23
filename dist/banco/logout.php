<?php 	
session_start();
session_destroy();
$_SESSION['notific'] = true;
header('location:../../index.php');
exit();
?>