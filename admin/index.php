<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../admin/dashboard.php");
    exit();
}
?>
<?php include("includes/db.php"); ?>
<?php include("includes/header.php"); ?>