<? ob_start(); ?>
<?php session_start();
session_destroy();

$return_page="index.php";


exit(header("Location:$return_page"));
?>
<? ob_flush(); ?> 