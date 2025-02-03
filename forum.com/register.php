<?php
define('__ROOT__', dirname(__FILE__).'/');
require_once(__ROOT__.'header-menu.php');
if($_POST != array()){
	if(isset($_POST['username']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['confirm_email']) && isset($_POST['password']) && isset($_POST['confirm_password']) && isset($_POST['color']) && isset($_POST['accepted']))
	{
		require_once(__ROOT__.'cr1.php');
		require_once(__ROOT__.'db.php');
	
		class Actions extends DB{
	
			function __construct($servername,$dbname,$username_db,$password_db){
		        parent::__construct($servername,$dbname,$username_db,$password_db);
		         // CONSTRUCTOR CREAR NUEVOS DATOS NECESARIOS PARA FILTROS EN LAS QUERIES
		     }
			function registrar($username,$name,$surname,$password,$email,$ip,$color,$accepted){
		    	//Conexion a DataBase
		    	$conn = new DB(parent::getServerName(),parent::getdbname(),parent::getuserdb(),parent::getpasswordb());
		    	
			    $query_insert = sprintf(
			    	
		    	"INSERT INTO `register` ( `username`, `name`, `surname`, `passwd`, `email`, `usr_img`, `usr_bio`, `ip`, `fecha_solicitud`, `estado`,`color`,`accepted`) 
		    	VALUES ('"."%s"."','"."%s"."','"."%s"."', MD5('"."%s"."'), '"."%s"."', 'assets/img/default.jpg', NULL, '"."%s"."', current_timestamp(), '0','"."%s"."',"."%s".")"
	
				,addslashes($username),addslashes($name),addslashes($surname),addslashes($password),addslashes($email),addslashes($ip),addslashes($color),addslashes($accepted));
			    
			    $conn->action($query_insert);
			}
	
		}
	
		$action = new Actions($servername,$dbname,$username_db,$password_db);
	
		//GET IP
		# PHP7+
		$browser = $_SERVER['HTTP_USER_AGENT'];
		$dateTime = date('Y/m/d G:i:s');
		$clientIP = $_SERVER['HTTP_CLIENT_IP'] 
		    ?? $_SERVER["HTTP_CF_CONNECTING_IP"] # when behind cloudflare
		    ?? $_SERVER['HTTP_X_FORWARDED'] 
		    ?? $_SERVER['HTTP_X_FORWARDED_FOR'] 
		    ?? $_SERVER['HTTP_FORWARDED'] 
		    ?? $_SERVER['HTTP_FORWARDED_FOR'] 
		    ?? $_SERVER['REMOTE_ADDR'] 
		    ?? '0.0.0.0';
	
		# Earlier than PHP7
		$clientIP = '0.0.0.0';
		if (isset($_SERVER['HTTP_CLIENT_IP'])) {
		    $clientIP = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
		    # when behind cloudflare
		    $clientIP = $_SERVER['HTTP_CF_CONNECTING_IP']; 
		} elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		    $clientIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
		    $clientIP = $_SERVER['HTTP_X_FORWARDED'];
		} elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
		    $clientIP = $_SERVER['HTTP_FORWARDED_FOR'];
		} elseif (isset($_SERVER['HTTP_FORWARDED'])) {
		    $clientIP = $_SERVER['HTTP_FORWARDED'];
		} elseif (isset($_SERVER['REMOTE_ADDR'])) {
		    $clientIP = $_SERVER['REMOTE_ADDR'];
		}
	
		/*
			print_r($_POST);		
			print_r($clientIP);
		*/
		
		$accepted = 0;
		
		
		$usr = $_POST['username'];
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];
		//$c_email = $_POST['confirm_email'];
		$pass = $_POST['password'];
		//$c_pass = $_POST['confirm_password'];
		$ip = $clientIP;
		$color = $_POST['color'];
		if($_POST['accepted'] == 'on'){
			$accepted = 1;
		}
		$action->registrar($usr,$name,$surname,$pass,$email,$ip,$color,$accepted);
		
		
		//header('Location: /index.php');
		echo '<script>window.location.replace("/index.php");</script>';
	}
}

require_once(__ROOT__.'register-form.php');
?>