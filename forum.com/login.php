<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>BLUEGRADED - LogIn     </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<?php
          define('__ROOT__', dirname(__FILE__).'/');
          require_once(__ROOT__.'header-menu.php');
          require_once(__ROOT__.'securizer.php');
          /* SI ES UN STRING */
        ?>
<style>
.login-form {
    width: 340px;
    height:80vh;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="login-form">
    <?php
     $username = "undefined";
     $user = 'undefined';
     
    
     if(isset($_SESSION['usr'])){
        $username = $_SESSION['usr'];
     }
     if(isset($_REQUEST['respuesta'])){
        $respuesta = $_REQUEST['respuesta'];
     }
     else{
        $respuesta = 1;
     }

     if($respuesta != 0){
        echo '<div style="display:none;position:absolute;top:25%;left:5%;"><span style="background-color:red;color:white; padding:10px;border-radius:15px;">Username Or Password Invalid!</span></div>';
    }
     if(isset($_REQUEST['username'])){
        $user = $_REQUEST['username'];
     }
     if(isset($_REQUEST['password'])){
        $password = md5($_REQUEST['password']);
     }
     //$password = md5($password);
     //print_r($GLOBALS);
     //echo $password;
     /*
     <?php
        $mysqli = new mysqli("localhost", "root", "", "bluegraded");
	    $result = $mysqli->query("SELECT count(username) FROM users WHERE username = ".$user." AND passwd = ".$password);
     if($user == 'root' &&  $password == '552b2ebe774bb5aaa0ad2021da259d22'){//Admin1234!
        $_SESSION['usr'] = $user;
        echo '<a href="logout.php">Cerrar Session</a>';
        header("Location:index.php");
     }*/
     
/* BBDD CONEXION*/
// require_once(__ROOT__.'cr1.php');
// Create connection
// $conn = new mysqli($servername, $username_db, $password_db, $dbname);
// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){
    $user = $_REQUEST['username'];
    $password = md5($_REQUEST['password']);
    if($user!=null && $password !=null){
        include_once(__ROOT__.'db.php');
        include_once(__ROOT__.'cr1.php');   
        $sql = 'SELECT count(username) \'ct\', id_usr,token FROM usr WHERE username = "'.evitarsqli($user).'" AND passwd = "'.$password.'"';
        $conn = new DB($servername,$dbname,$username_db,$password_db);
        $res = $conn->select($sql)[0];
        if(count($res) > 0){
            if(intval($res['ct']) > 0){
                //TODO SI USUARIO ES MOD ...
                $_SESSION['usr'] = $user;
                $_SESSION['usr_id'] = $res['id_usr'];
                $_SESSION['token'] = $res['token'];
                echo '<script>window.location.href = "index.php";</script>';
                //print_r($_SESSION);
            }
        }else{
            $respuesta = 1;
        }
        /*print_r($res);*/
    }
}

//TODO IF NOJAVASCRIPT DETECTED => ADVISE NOT FUNCTIONAL
//TODO ADD CAPTCHA


    if(!isset($_SESSION['usr'])){
    echo '
    <form action="login.php" method="post">
    		<h1 class="text-center">
    		<i class="fa fa-sign-in" aria-hidden="true"></i>
    		</h1>
            <h2 class="text-center">Log in</h2>       
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required="required">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Log in</button>
                <input type="number" style="display:none;" name="respuesta" value="<?php echo $result; ?>">
            </div>
            <div class="clearfix">
                <!--<label class="float-left form-check-label"><input type="checkbox"> Remember me</label>-->
                <a href="#" onclick="alert(\'Coming Soon!\');" class="float-right">Forgot Password?</a>
            </div>    
        </form>
        <p class="text-center"><a href="/register.php">Create an Account</a></p>
    </div>
        ';
    }else{
        echo '
        <script>
        function redirecto(url){
            window.location.href = url;
        }
        </script>

        <div class="form-group" style="text-align:center;font-weight:bold;">
        <h4>Disable NoJavascript</h4>
        <p style="text-align:justify;font-weight:normal;">We Use JavaScript for the proper functioning of the web page, you can check all JavaScript source codes by viewing the source code provided by your browser.</p>
        <h2>Not Redirected?</h2>
        <table width="100%">
        <tr>
            <td>
                <button type="button" onclick="redirecto(\'index.php\');" class="btn btn-primary btn-block">Go Home</button>
            </td>
            <td>
                <button type="button" onclick="redirecto(\'logout.php\');" class="btn btn-primary btn-block">Log Out</button>
            </td>
        </tr>
        </table></br>
        <table width="100%">
        <h5>Buttons Not Working?</h5>
        <tr>
            <td>
                <a href="logout.php">Log Out</a>
            </td>
            <td>
                <a href="index.php">Home</a>
            </td>
        </tr>
        </table>
            </br>
            
           
           
        </div>

</div>
        ';
    }

       require_once(__ROOT__.'footer.php');
      ?>
</body>
</html>