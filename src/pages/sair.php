<?php
session_start();
if(isset($_SESSION['user'])){
    unset($_SESSION['user']);
        session_destroy();
}
session_destroy();
header('location: ../../index.php');
?>
