<?php
session_start();
if (!isset($_SESSION['student'])) {
    header("Location: ../user/dashboard.php");
    exit();
}