<?php
    if (session_status() != 2) session_start();
    require_once("../settings.php");
    if (session_destroy())
		header("Location: /");
?>
