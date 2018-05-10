<?php
    session_start();
    session_destroy();
    header('Location: http://www.elasbeautyroom.co.uk/services.php');
	exit();
?>
