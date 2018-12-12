<?php 
class CheckCookie {
	private $pass = "";
	private $log = "";

	private $true_log = "jared";
	private $true_pass = "291996";

	public function __construct () {
		// ob_start ();
			echo "
				<form method='post' action='index.php'>
				<input type='login' name='usr_log'>
				<input type='password' name='usr_pass'>
				<input type='submit' name='OK'>
				</form>
				";
				if ($_COOKIE['usr_cookie_log'] == $_POST['usr_log'] && $_COOKIE['usr_cookie_pass'] == $_POST['usr_pass']) {
					ob_clean ();
					echo "Login - succeful<br>".$_COOKIE['usr_cookie_log']."<br>".$_COOKIE['usr_cookie_pass'];
				} else {
					ob_flush ();
					echo "<br>Получаем форму<hr>".$_COOKIE['usr_cookie_log']."<br>".$_COOKIE['usr_cookie_pass'];
				}
	}

	public function CheckData ($usr_log, $usr_pass) {
		$this->log = $usr_log;
		$this->pass = $usr_pass;
		if ($this->log !== "" && $this->pass !== "") {
			if ($_POST['OK']) {
				if ($this->log == $this->true_log && $this->pass == $this->true_pass) {
						setcookie ("usr_cookie_log", $this->log, time () + 300);
						setcookie ("usr_cookie_pass", $this->pass, time () + 300);
				} else {
					exit ("Error when cookie was settings.");
				}
			}
		}
	}

	public function LogOut ($button_logOut) {
		
	}
}




?>