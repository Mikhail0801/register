<?php
session_start();
unset($_SESSION['user']);
header(string: 'Location: ../index.php')

?>