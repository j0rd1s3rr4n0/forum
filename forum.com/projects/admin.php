<?php error_reporting (0);?>
<?php 
session_start();
$password = "751cb3f4aa17c36186f4856c8982bf27";
//Admin1234
if($_POST['password']){
    if(md5($_POST['password']) == $password){
        $_SESSION['password'] = "alm";
    }else{
        echo "<span style='color:red;font-weight:bold;'>La contraseña es incorrecta</span>";
    }}
if(!$_SESSION['password']){
?>
<style>
   @import url(http://weloveiconfonts.com/api/?family=entypo);
@import url(https://fonts.googleapis.com/css?family=Roboto);

/* zocial */
[class*="entypo-"]:before {
  font-family: 'entypo', sans-serif;
}
input{
   text-align:center;
}
*,
*:before,
*:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box; 
}


h2 {
  color:rgba(255,255,255,.8);
  margin-left:12px;
}

body {
  background: #272125;
  font-family: 'Roboto', sans-serif;
  
}

form {
  position:relative;
  margin: 50px auto;
  width: 380px;
  height: auto;
}

input {
  padding: 16px;
  border-radius:7px;
  border:0px;
  background: rgba(255,255,255,.2);
  display: block;
  margin: 15px;
  width: 300px;  
  color:white;
  font-size:18px;
  height: 54px;
}

input:focus {
  outline-color: rgba(0,0,0,0);
  background: rgba(255,255,255,.95);
  color: #e74c3c;
}

button {
  float:right;
  height: 121px;
  width: 50px;
  border: 0px;
  background: #e74c3c;
  border-radius:7px;
  padding: 10px;
  color:white;
  font-size:22px;
}

.inputUserIcon {
  position:absolute;
  top:68px;
  right: 80px;
  color:white;
}

.inputPassIcon {
  position:absolute;
  top:136px;
  right: 80px;
  color:white;
}

input::-webkit-input-placeholder {
  color: white;
}

input:focus::-webkit-input-placeholder {
  color: #e74c3c;
}
</style>
<center style="vertical-align: middle;padding-top: 20%;">
<h2>Restrited Acces</h2>
<form style="margin:12px;" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="password" name="password" placeholder="***********">
<input type="submit" name="Submit" value="Login!"></form>
</center>
<?php 
}else{
    if($_GET['desconectar']){
        session_destroy();
        exit("<span style='color:green;'>Has sido desconectado correctamente</span><meta http-equiv='refresh' content='0'/>");
    }
?>	
<html>
<head>
    <title>Upload</title>
	<meta charset="utf-8">
    <style>
    *{color:white;}
    </style>
</head>
<body>
<center>
			<h1 style="color:white;font-size:90px;font-family: ALGERIAN;">Upload</h1></center>
			<table>
				<tr>
					<td>
                        <p style="color:white;">Max Size 41MB<p>
					<form action="" method="get">Nombre del Archivo:  <input type="text" name="brchivo" value="" id="brchivo" placeholder="Ejemplo: musicos.jpg"/><br />
					    <input type="submit" value="Borrar Archivo!" />
					</form>
					
					<form action="./sube.php" method="post" enctype="multipart/form-data">
					    <p><input type="file" name="archivo"><button>Subir archivo</button></p>
					</form>
					<?php
					$brchivo = $_GET['brchivo'];
					$comando = "cd upload && del $brchivo";
					$salida = shell_exec($comando);
					//$salida2 = shell_exec('shutdown -a');
					echo "<pre>Comando usado <b>$comando</b></pre>";
					//echo "<pre>$salida2</pre><br>";
					echo "<pre>$salida</pre>";
					
					?>
					</td>
					<td>
						<center><iframe src="./upload/" height="600px" width="100%" style="border:0;"></center>
					</td>
				<tr>
			</table>
			</iframe>
		</center>
<style>
input[type="submit"]{
    border: 1px red solid;
    background-color: red;
    padding:10px;
    margin: 10px;
    border-radius: 10px;
    color:white;
    font-weight: bold;
    font-family: "Times New Roman";
    font-size: 15px;
}
::placeholder {
    color:white;
    border: 1px black solid;
    background-color: black;
    padding:20px;
    margin: 20px;
    text-align: center;
    border-radius: 10px;
    color:white;
    font-weight: bold;
    font-family: "Times New Roman";
    font-size: 15px;
}
input[type="text"]{
 border: 1px orange solid;
    background-color: orange;
    padding:10px;
    margin: 10px;
    border-radius: 10px;
    color:white;
    font-weight: bold;
    font-family: "Times New Roman";
    font-size: 15px;   
}
body{
    caret-color: red; /*transparent;*/
    background-color:black;
}
*{
    color:white;
}
button{
    border: 1px blue solid;
    background-color: blue;
    padding:10px;
    margin: 10px;
    border-radius: 10px;
    color:white;
    font-weight: bold;
    font-family: "Times New Roman";
    font-size: 15px;

}
input[type="file"]{
    border: 1px blue solid;
    background-color: blue;
    padding:10px;
    margin: 10px;
    border-radius: 10px;
    color:blue;
    width: 170px;
    font-weight: bold;
    font-family: "Times New Roman";
    font-size: 15px;
}
table{
			/*border:1px solid rgb(0,0,0);*/
			width: 100%;
			height: 90%;
		}
		tr{
			/*border:1px solid rgb(0,255,0);*/
		}
		td{
			/*border:1px solid rgb(255,0,0);*/
			width: 50%;
		}

</style>



</body>
</html>
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?desconectar=si">Desconectar</a>
<?php 	
}
?>