<!DOCTYPE html>
<html>

<head>
<title>BLUEGRADED - Profile  </title>
    <!-- Custom styles for this template -->
    <!--<link href="navbar-top.css" rel="stylesheet">-->

</head>

<body>

    <!--//--
        HEADER
        |
        +- HOME
        |
        +- PORTFOLIO
        |
        +- SHOP
        |
        |
        |
        +- LOGIN
        |
        +-//- REGISTER


      --//-->
    <?php
          define('__ROOT__', dirname(dirname(__FILE__)).'/');
          require_once(__ROOT__.'header-menu.php');

        ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="/assets/css/profile.css">

    <!--//---

        CONTENT

      ---//-->

    <div class="container">

        <?php
             require_once(__ROOT__.'cr1.php');
             require_once(__ROOT__.'db.php');

              // $request_user = $_REQUEST['username'] ;
              $request_user = $_REQUEST['u'] ;
               
            
              $conn = new DB($servername,$dbname,$username_db,$password_db);
              $sql = "SELECT *, (SELECT COUNT(id_usr) FROM usr WHERE username = '$request_user') AS ct FROM usr WHERE username = '$request_user';";
              $result = $conn->select($sql);
              $userimage;
              
              if (strval($result[0]['ct'])> 0) {
                for($i = 0; $i < count($result);$i++){
                  $row = $result[$i];
                  $json_txt =$row['usr_data'];
                  $userimage = $row['usr_img'];
                  /*echo $json_txt;echo '</br></br>';print_r($json_array);*/
                  // RECOJE EL JSON Y LO PASA A ARRAY
                  $json_array = json_decode($json_txt);

                  // RECOGE LOS SEGUIDORES
                  $followerJson = $json_array->followers;
                  $followerList = "";
                  for ($i=0; $i < count($followerJson); $i++) {   
                    if($i < 1){$followerList = $followerJson[$i];}else{$followerList = $followerList.','.$followerJson[$i];}
                  }
                  // RECOGE LOS URL
                  $urls = $json_array->urls;
                  $instagram = $json_array->urls[0]->instagram;
                  $twitter = $json_array->urls[1]->twitter;
                  $codepen = $json_array->urls[2]->codepen;
                  $github = $json_array->urls[3]->github;

                  // RECOGE LOS SIGUIENDO
                  $followingJson = $json_array->following;
                  $followingList = "";
                  for ($i=0; $i < count($followingJson); $i++) { 
                    if($i < 1){$followingList = $followingJson[$i];}
                    else{$followingList = $followingList.','.$followingJson[$i];}
                  }
                  //echo '<div style="display:none;">';
                  
                  //echo "<b>Urls</b> ";
                  //echo $codepen.' '.$instagram.' '.$twitter.' '.$github;

                  if(isset($row['reputation'])){
                    $reputation = $row['reputation'];
                  }else{
                    $reputation = 0;
                  }
                  echo '<style>
                  .profile-photo{
                    background-image:url("'.$userimage.'");
                    background-size: cover;
                  }
                  </style>
                  
                  <div class="profile-info">
                <div class="profile-photo" id="profile-photo"background-image></div>
                <h1>'.$row['name'].' '.$row["surname"].'</h1>
                <p>'.$row["usr_bio"].'</p>
                <table>
                <tr>
                  <th class="follov">Followers</th>
                  <th class="follov">Reputation</th>
                  <th class="follov">Following</th>
                </tr>
                <tr>
                  <td class="user_stats">'.$followerList.'</td>
                  <td class="user_stats">'.$reputation.'</td>
                  <td class="user_stats">'.$followingList.'</td>
                </tr>
              </table>
                <div class="socialmedia">';
                  if(strlen($instagram>0)){
                    echo '<div class="instagram ssmm" title="Instagram" style="display: '.'visible'.';" onclick="location.href=\'https://www.instagram.com/'.$instagram.'\';"></div>';
                  }
                  if(strlen($twitter>0)){
                    echo '<div class="twitter   ssmm" title="Twitter" style="display: '.'visible'.';" onclick="location.href=\'https://twitter.com/'.$twitter.'\';"></div>';
                  }
                  if(strlen($codepen>0)){
                    echo '<div class="codepen   ssmm" title="Codepen" style="display: '.'visible'.';" onclick="location.href=\'https://codepen.io/'.$codepen.'\';"></div>';
                  }
                  if(strlen($github>0)){
                    echo '<div class="github    ssmm" title="Github" style="display: '.'visible'.';" onclick="location.href=\'https://github.com/'.$github.'\';"></div>';
                  }
              
              
              
              
              
                  echo ' </div>
                      </div>
                      <div class="container">
                        <main class="grid">
                          <article class="art">
                            <img class="article-photo" src="'.'https://bluegraded.i234.me/assets/img/default.jpg'.'" alt="'.'Sample photo'.'">
                            <div class="text">
                              <h3>'.'POST TITLE'.'</h3>
                              <p>'.'POST SHORT DESCRIPTION'.'</p>
                              <!--<a href="./profile.php?username='.$request_user.'#viewProfilePhoto" alt="'.'URL_VIEW_NOW'.'"" >SHOW ME</a>-->
                              <button type="button" class="btn btn-primary btn-block"" data-toggle="modal" data-target="#exampleModal">
                                SHOW ME
                              </button>
                            </div>
                          </article>

                      <!-- The Modal -->
                      <div id="viewProfilePhoto" class="modal contenedor">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="profilefoto">
                        <!--<div id="caption"></div>-->
                      </div>

                        </main>
                      </div>
                      
                      
                      
                      <!--
                      /* TODO multiline example
                      **  Adaptar Modal a la pantalla
                      **  Modal Para ver Contenido y Modal para visualizar Profile Photo
                      */
                      -->
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" width="90%">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span style="color:red;" aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              ';
                              echo 'ASD';
                              echo '
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>

                    </body>';
              
              }
              } else {
              echo "<h5>ESTE USUARIO NO EXISTE!</h5>";
              }
              // if($usuario_existente){
              //   echo '<h1>Welcome to @'.$request_user;
              // }
              ?>
    </div>






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>

    <!-- Bootstrap core JavaScript
      ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>

    <?php
       require_once(__ROOT__.'footer.php');
      ?>
</body>
<script type="text/javascript">
function redirectionme(url) {
    //window.location.href = url;
    window.open(url, '_blank', 'location=yes,height=570,width=520,scrollbars=´ççyes,status=yes');
}

var modal = document.getElementById("viewProfilePhoto");
var modalImg = document.getElementById("profilefoto");
var captionText = document.getElementById("caption");

document.getElementById('profile-photo').onclick = function() {
    modal.style.display = "block";
    var img = document.getElementById('profile-photo'),
        style = img.currentStyle || window.getComputedStyle(img, false),
        backgrounImageLink = style.backgroundImage.slice(4, -1).replace(/"/g, "");
    modalImg.src = backgrounImageLink;
    /*
    window.getComputedStyle(document.getElementById('profile-photo'), false).backgroundImage.slice(4, -1).replace(/"/g, "")
    */
}
var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
    modal.style.display = "none";
}
document.querySelector("body > div > div.profile-info").innerHTML = document.querySelector(
    "body > div > div.profile-info").innerHTML.replace("assets/img/default.jpg", "<?php echo $row['usr_img'];?>")
//document.querySelector("#profile-photo").style.backgroundImage = 'url("")';
function replaceprofileimage(url) {
    let newurl = 'url("' + url + '")';
    document.querySelector("#profile-photo").style.backgroundImage = newurl;
}
</script>

</html>

</body>

</html>

<?php
require_once(__ROOT__.'myownstyle.php');
?>