<?php 
class CheckCookie {
	private $pass = "";
	private $log = "";

	private $true_log = "jared";
	private $true_pass = "291996";

	private $post_pass = "";
	private $post_log = "";

	public function __construct () {
				if ($_COOKIE['usr_cookie_log'] == $this->true_log && $_COOKIE['usr_cookie_pass'] == $this->true_pass && $_COOKIE['usr_cookie_log'] !== NULL && $_COOKIE['usr_cookie_pass'] !== NULL) {
					echo var_dump ($_COOKIE['usr_cookie_log'])." - CookieLogin<br>";
					echo var_dump ($_COOKIE['usr_cookie_pass'])." - CookiePassword";
				} else {
					echo "
						<form method='post' action='index.php'>
						<input type='login' name='usr_log'>
						<input type='password' name='usr_pass'>
						<input type='submit' name='OK'>
						</form>
						";
				}
	}

	public function CheckData ($usr_log, $usr_pass) {
		$this->log = $usr_log;
		$this->pass = $usr_pass;
		if ($this->log !== "" && $this->pass !== "") {
			if ($_POST['OK']) {
				if ($this->log == $this->true_log && $this->pass == $this->true_pass) {
						setcookie ("usr_cookie_log", $this->log, time () + 180);
						setcookie ("usr_cookie_pass", $this->pass, time () + 180);
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