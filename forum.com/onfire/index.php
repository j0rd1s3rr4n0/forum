<!DOCTYPE html>
<html>
<head>
    <title>BLUEGRADED - Home  </title>
  <?php
          define('__ROOT__', dirname(dirname(__FILE__)).'/');
          require_once(__ROOT__.'header-menu.php');
        ?>
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
        @- NEW POST
        |
        @- Projects
        |
        @- Categories
        |
        |
        @- SearchBar
        |
        @- LOG IN
        @- USERNAME->PROFILE
        |
        @-//- REGISTER
        @- LOG OUT


      --//-->

      <!--//---

        CONTENT

      ---//-->

      <div class="title-wrapper">
                <h1 class="bluegraded title-page" >POSTS POPULARES</h1>
              </div>
              <div class="container">
                 <div class="wrapper">
 <?php
              require_once(__ROOT__.'cr1.php');
              require_once(__ROOT__.'db.php');
              $iterator_class = 0;
              $conn = new DB($servername,$dbname,$username_db,$password_db);
              $sql = "SELECT id_post,username,TEXT,TITLE,private,(points-(reports*5)) as 'likes' FROM posts INNER JOIN usr ON usr.id_usr = posts.user WHERE (points-(reports*5)) > 0 AND private = 0 ORDER BY likes DESC ";
              $result = $conn->select($sql);
              //echo gettype($result);
              if (($result != NULL) &&count($result) > 0) {
                // output data of each row
                for($i = 0; $i < count($result);$i++){
                  $row = $result[$i];
                 // echo '<pre>'.print_r($result->fetch_assoc()).'</pre>';
                 $id_div_title = strip_tags(strtolower(trim($row["TITLE"],' ')));
                  /*echo '
                    <div class=row>
                      <div class=col-auto>
                        <div class="card text-white bg-dark card-margin" id="'.$id_div_title.'">
                          <div class="card-header" id="post'.$row["id_post"].'">
                            <a class="usr-link" href="./@'.$row["username"].'" >
                            @'.$row["username"].'</a>
                          </div>
                          <div class=card-body>
                            <h4 class=card-title>
                            '.$row["TITLE"].'</h4>
                            <p class=card-text>
                            '.base64_decode($row["TEXT"]).'</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  ';*/
              
	            if(isset($_SESSION['token'])){
	              $tokenapi = $_SESSION['token'];
	            }else{
	              
	            $tokenapi = '1234';
	            }
?>
    <script>
      /* LOAD DATA_STATISTICS ON LOAD ALL POSTS*/
      /*
      SOBRECARGA A PETICIONES EL CLIENTE
      function loadStatsOnLoad(){
        let btns = document.getElementsByClassName('vote orange');
        let i = 0;
        while(!(i>btns.length)){
            //console.log('clicking');
            try {
              btns[i].click();
            } catch(err) {
              //console.log(err);
            }
            i++;
        }
      }*/
      // AJAX LIKE-REPORT MULTI //
      var API = '1234';
      function deletepost(This){
        This.parentNode.parentNode.parentNode.parentNode.parentNode.style.display = "none";
      }
       function myFunction(type,el)
      {
          api = "<?=$tokenapi;?>";          
          if(api == '1234' && type!=0){
            alert('Para Interactuar Debes Iniciar Sessión');
          }else{  
            if(type!=0){
                let post = el.id;
                var formData = 'action='+type+'&API='+api+'&id_post='+post;
              }else{
                let post = el.id;
                var formData = '&id_post='+post;
              }
              var xmlHttp = new XMLHttpRequest();
                  xmlHttp.onreadystatechange = function()
                  {
                      if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
                      {
                        if(type == 0){
                          let newtext = xmlHttp.responseText+" ";
                          //el.childNodes[2].replaceData(0,1000,newtext);
                          let i = el.classList[2];
                          document.querySelector(".orange."+i).innerHTML = document.querySelector(".orange."+i).innerHTML.replace(document.querySelector(".orange."+i).innerHTML.split('<i ')[0],newtext)
                          //console.log(xmlHttp.responseText);
                        }
                        if(type == 1 || type== 3 ){
                          deletepost(el);
                        }
                        else{
                          //console.log(xmlHttp.responseText);
                        }
                      }
                  }
                  xmlHttp.open("POST", "/paction.php"); 
                  xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                  xmlHttp.send(formData); 
            }
            if(type == 4 || type == 5){
            	myFunction(0,el);
            }
      }
      

      /*document.addEventListener('DOMContentLoaded', (event) => {
        console.log('DOM completely loaded and analyzed');
      });*/
      try {
      //document.getElementById("footer").addEventListener("load", loadStatsOnLoad);
      window.addEventListener("load", loadStatsOnLoad);
      } catch(err) {
      //console.log(err);
      }

</script>
                  <?php

                  if($row['private']!=1){
                    
                    if(!isset($_SESSION['usr_id'])){
                    $tmpusr_id = '0';
                    }
                    else{
                      $tmpusr_id = $_SESSION['usr_id'];
                    }
                    $tabla_moderacion = "SELECT count(user_id) 'ismod', adelete, ashow, aedit, ahide, aban FROM mod_table WHERE user_id = '".$tmpusr_id."'";
                    $datos_mod = $conn->select($tabla_moderacion)[0];
                    // echo'<pre>';
                    // print_r($datos_mod);
                    // echo'</pre>';
                    echo '
                      <div class="carteta">
                        <div>
                        <div class="card text-white bg-dark card-margin" id="'.$id_div_title.'">
                          <div class="card-header" id="post'.$row["id_post"].'">
                            <a class="usr-link" href="./@'.$row["username"].'">@'.$row["username"].'</a>
                            ';
                            if(isset($_SESSION['usr'])){
                              if((($row["username"] == $_SESSION['usr'] && $row['username'] == $username) || ($datos_mod['ismod']==1))){ 
                                $sql2 = "SELECT TOKEN FROM usr WHERE username = '".$username."'";
                                $apitoken = $conn->select($sql2)[0]['TOKEN'];
                                //$_SESSION['usr_id']
                                
                               
                                echo '<div style="float:right;">';
                                if(isset($_SESSION['usr_id'])){
                                  if($datos_mod['ahide']==1 || $row['username'] == $_SESSION['usr']){
                                      echo '
                                        <a id="'.$row["id_post"].'" alt="#'.$row["id_post"].'" class="editbtn ebtn_hide" title="HIDE POST" onclick="myFunction(1,this);">
                                            <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                        </a>';
                                  }
                                    
                                  if($datos_mod['aedit']==1 || $row['username'] == $_SESSION['usr']){
                                    echo '
                                      <a id="'.$row["id_post"].'" alt="#'.$row["id_post"].'" class="editbtn" title="EDIT POST" onclick="myFunction(2,this);">
                                          <i class="fa fa-pen" aria-hidden="true"></i>
                                        </a>';
                                  }   
                                  if($datos_mod['adelete']==1 || $row['username'] == $_SESSION['usr']){
                                    echo '
                                        <a id="'.$row["id_post"].'" alt="#'.$row["id_post"].'" class="editbtn ebtn_trash" title="DELETE POST" onclick="myFunction(3,this);">
                                          <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>';
                                  }
                                }
                                echo '</div>';
                              }
                            }
                            echo '
                            </div>
                            <div class=card-body>
                              <h4 class=card-title>'.$row["TITLE"].'</h4>
                              <p class=card-text>'.base64_decode($row["TEXT"]).'</p>
                            </div>
                            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
                            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
                            <style>
                            .vote{
                              margin:10px;
                              padding:10px;
                              border-radius:20px;
                              font-size:110%;
                              color:white;
                            }
                            .vote:hover{
                              cursor:pointer;
                              background-color:rgba(255,255,255,1);
                            }
                            .red{background-color:red;}
                            .red:hover{color:red;}
                            .orange{background-color:orange;}
                            .orange:hover{color:orange;}
                            .yellow{background-color:yellow;}
                            .yellow:hover{color:yellow;}
                            .green{background-color:green;}
                            .green:hover{color:green;}
                            .purple{background-color:purple;}
                            .purple:hover{color:purple;}
                            </style>
                            </div>
                            <div style="/*background-color:green;*/width:100%;">
                              <div style="float:left;color:white;margin-left:2%;padding:15px;">
                              <a class="vote orange" style="text-decoration:none;" onclick="myFunction(0,this);" id="'.$row["id_post"].'">';
                              
                              if($row['likes'] > 0){
                              	echo $row['likes'].'<i class="fa-solid fa-arrow-trend-up"></i>';
                              }else if($row['likes'] < 0){
                            	echo $row['likes'].'<i class="fa-solid fa-arrow-trend-down"></i>';	
                              }else{
                              	echo $row['likes'].'<i class="fa-solid fa-question"></i>';
                              }

                              echo '</a>
                              </div>
                              <div style="float:right;">
                                <div>
                                <a id="'.$row["id_post"].'" onclick="myFunction(4,this);"><i class="fas fa-hands-clapping vote green '.$iterator_class.'" title="Gratitude"></i></a>
                                <a id="'.$row["id_post"].'" onclick="myFunction(5,this);"><i class="fas fa-flag vote red '.$iterator_class.'" title="Report Abuse"></i></a>';
                                  if($datos_mod['aban']==1){                              
                                    echo '<a id="'.$row["id_post"].'" onclick="myFunction(6,this);"><i class="fa-solid fa-gavel vote purple '.$iterator_class.'" title="Ban Post"></i></a>';
                                  }
                                echo '</div>
                              </div>
                            </div>
                            
                          </div>
                      </div>
                    ';
                }
            	 $iterator_class++;
                }
              } else {
                echo "<h5> AUN NO HAY NINGUN POST, SE EL PRIMERO! ߤﰟ䟼</h5>";
              }
             
              ?>
              </div>
          </div>





            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

      <?php
       require_once(__ROOT__.'footer.php');
      ?>
    </body>

  </html>

</body>
</html>