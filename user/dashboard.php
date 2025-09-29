<?php
// session_start();
// if (!isset($_SESSION['student_id'])) {
//     header("Location: login.php");
//     exit;
// }

include "includes/header.php";



if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Choose file based on id
    if ($id === "register") {
        require "register.php";
    } elseif ($id === "login") {
        require "login.php";
    } elseif ($id == 3) {
        require "services.php";
    } else {
        // If id does not match, load default
        require "home.php";
    }
} else {
    // If no id is passed, load home.php
    require "home.php";
}
?>
 


