<? ob_start (); ?>
<html>
	<head>
		<?php
			require_once('config.php');
		?>
	</head>
	<body>
		<?php 
			$CheckCookieModel = new CheckCookie ($_POST['usr_log'], $_POST['usr_pass']);
			$CheckCookieModel->CheckData ($_POST['usr_log'], $_POST['usr_pass']);
			$CheckCookieModel->LogOut ($_POST['logout']);
		?>
	</body>
</html>
<? ob_end_flush (); ?>