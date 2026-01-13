<?php
session_start();
unset($_SESSION['sessao_ativa']);
header("Location: index.php");
exit();
?>