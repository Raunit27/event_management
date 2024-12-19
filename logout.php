<?php
session_start();
unset($_SESSION['userid']);
unset($_SESSION['is_valid']);
session_destroy();

// Prevent caching of index.php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1
header("Pragma: no-cache"); // HTTP 1.0
header("Expires: 0"); // Proxies

header('location: index.php');
exit;
?>