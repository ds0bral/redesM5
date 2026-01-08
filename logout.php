<?php
session_start();
unset($_SESSION['sessao_ativa']);
//session_destroy();
header("Location: index.php");
exit();
?>