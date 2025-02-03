<?php

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




define('__ROOT__', dirname(__FILE__).'/');
require_once(__ROOT__.'header-menu.php');
require_once(__ROOT__.'cr1.php');

$usrid = $_SESSION['id_usr'];




// VALIDAR CODIGO ANTI XSS Y SEMEJANTES
$texto = $_POST["texto"]; //$texto = htmlentities($_POST["texto"]);
$texto = nl2br($texto);
$texto = base64_encode($texto);
$title = htmlentities($_POST["title"]);




// Create connection
$conn = mysqli_connect($servername, $username_db, $password_db, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO posts (user,TITLE, TEXT,ip)
VALUES ($usrid,'$title','$texto','$clientIP')";


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  echo '<script>location.href=\'https://'.$_SERVER['SERVER_NAME'].'/index.php\';</script>';
  //header("location: ./index.php#success"); 
  die();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>