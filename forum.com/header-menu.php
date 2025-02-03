<link rel="stylesheet" href="/asssets/css/prism.css">
<script src="/assets/js/prism.css"></script>
<?php
// QUITA VISUALIZACION DE LOS ERRORES
//error_reporting(0);
$username = "";
$user_id = "";
$token = "undefined";
session_start(); //starts the session
if (isset($_SESSION['usr'])) {
  $username = $_SESSION['usr'];
}
if (isset($_SESSION['usr_id'])) {
  $user_id = $_SESSION['usr_id'];
}
if (isset($_SESSION['token'])) {
  $token = $_SESSION['token'];
}
require_once(__ROOT__ . 'myownstyle.php');
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
  integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
  integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
  integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />

<meta name="title" content="Bluegraded">
<meta name="description" content="Pagina web personal para apuntes,libros,aprendizaje continuo y guias.">
<meta name="keywords"
  content="bluegraded,blue,graded,parthenoun,jk,technology,tecnologia,informatica,cyberseguridad,cybersec,cibersecurity,ctf,hackthebox,hack,programmig,coding,code,software,programacion,codigo">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta property="og:image" content="https://mail.proton.me/assets/proton-og-image.png">
<meta name="language" content="Spanish">
<meta name="revisit-after" content="1 days">
<meta name="author" content="Jordi Serrano,Bluegraded">
<!--<link rel="icon" href="../../../../favicon.ico">
  
  
      <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
  integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4"
  style="background-color:transparent !important;/*rgba(38,48,57,255);*/">
  <a class="navbar-brand bluegraded" href="/">BLUEGRADED</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">
          <i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/onfire">
          <i class="fa-solid fa-fire-flame-curved"></i> On Fire</a>
      </li>


      <li class="nav-item">
        <a class="nav-link disabled" href="#">
          <i class="fa fa-rocket"></i> Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">
          <i class="fas fa-book-atlas"></i> Categorias</a>
      </li>
      <?php
      if (strlen($username) > 1) {
        echo '<li class="nav-item">
                      <a class="nav-link" href="post.php"> <i class="fa fa-plus-square"></i> NEW POST  </a>
                    </li>';
      }
      ?>
      <li class="nav-item">
        <a class="nav-link" href="curriculum.php">
          <i class="fa fa-id-card"></i> About Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">
          <i class="fa fa-id-card"></i> Portfolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"> <i class="fa fa-shopping-cart"></i> Shop </a>
      </li>

    </ul>
    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
      <table>
        <tr>
          <td>
            <input list="searchbar" name="buscar" type="search" class="form-control form-control-dark"
              placeholder="Search..." aria-label="Search">
            <datalist id="searchbar">
              <option value="jordi_serrano">USERNAME</option>
              <option value="Unknow">USERNAME</option>
              <option value="TODOLIST">POST</option>
              <option value="Speed Test">POST</option>
              <option value="SITES TO PROGRAM WITHIN THE WEB SITE">POST</option>
            </datalist>
          </td>
          <td>
            <button type="submit" class="btn btn-warning"><i class="fa fa-magnifying-glass"></i></button>
          </td>
        </tr>
      </table>
    </form>
    <ul class="nav-item">
      <li class="nav-link"></li>
    </ul>
    <div class="text-end">

      <?php
      if (strlen($username) > 1) {
        echo '<button type="button" class="btn btn-outline-light me-2"  onclick="location.href=\'@' . $username . '\';"><i class="fa-solid fa-user"></i> ' . $username . '</button>
            <button type="button" class="btn btn-warning" onclick="location.href=\'logout.php\';"><i class="fa fa-sign-out"></i> Log Out</button>';
      } else {
        echo
          '<button type="button" class="btn btn-outline-light me-2" onclick="location.href=\'/login.php\';">Login</button>';
        //echo '<button type="button" class="btn btn-warning" onclick="location.href=\'https://docs.google.com/forms/d/e/1FAIpQLScG7yKDdfOR6s7p2UTYMHydkCsshWKPQp4YuEyGyIKY9jby0Q/viewform\';">Sign-up</button>';
        echo '<button type="button" class="btn btn-warning" onclick="location.href=\'https://' . $_SERVER['SERVER_NAME'] . '/register.php\';">Sign-up</button>';
        // PARA ACTIVAR EL REVISTRO SACAR EL '!' DE DELANTE DEL LOCATION.HREF
      }
      ?>

    </div>
    <ul class="navbar-nav mr-right">

      <?php
      // if(strlen($username)<1){
      //   echo '
      //     <li class="nav-item">
      //       <a class="nav-link" href="login.php">
      //         <i class="fa-solid fa-right-to-bracket"></i> Login
      //       </a>
      //     </li>
      
      //     <li class="nav-item">
      //       <a class="nav-link disabled" href="#register">
      //         <i class="fa fa-user"></i> Register
      //       </a>
      //     </li>';
      // }else{
      //   echo '
      //       <li class="nav-item">
      //         <!--<a class="nav-link disabled" href="profile.php">-->
      //         <a class="nav-link" href="@'.$username.'">
      //           <i class="fa-solid fa-user"></i> '.$username.'
      //         </a>
      //       </li>
      
      //       <li class="nav-item">
      //         <a class="nav-link" href="logout.php">
      //           <i class="fa fa-sign-out"></i> Log Out
      //         </a>
      //       </li>
      
      //       ';
      // }
      ?>
    </ul>
  </div>
</nav>
<!---->
<!--<meta http-equiv="refresh" content="300">-->
<!---->