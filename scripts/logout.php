<?php 

require 'session.php';

session_destroy();

header("Location: ../account.php");

?>
