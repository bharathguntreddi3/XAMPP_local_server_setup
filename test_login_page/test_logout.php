<?php
session_start();
unset($_SESSION['sess_user']);
session__destroy();
header("location:test_login.php");
?>