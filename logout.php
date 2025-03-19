<?php
session_start();
session_destroy(); // Ends session
header("Location: index.php"); // Redirect to homepage
exit();
?>
