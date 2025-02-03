<?php
define('__ROOT__', dirname(__FILE__).'/');
require_once(__ROOT__.'cr1.php');
require_once(__ROOT__.'db.php');
 require_once(__ROOT__.'securizer.php');
class Actions extends DB{
/*
    
     ACTIONS:
        0 > EDIT
        1 > HIDE/SHOW
        2 > DELETE
        3 > LIKE
        4 > REPORT

        /VALIDATION RULES
        TOKEN , POST_ID, USER , DB(SERVERNAME,USER:PASS,DBNAME)
        TOKEN ==> USER.TOKEN || TOKEN ==> SURROOT.TOKEN;
        ID_POST.user ==> USER.ID || ID_POST ==> SURROT.ID

        /ACTIONS
        EDIT(token,id_post,username,DB()) --> post.php?a=edit&title=BASE64&content=BASE64&id=ID_POST



    
        DB TABLES
        +--------+
        |  USR   |
        +--------+-------------------------------------------------------------------------------------------------+
        | id_usr | username | name | surname | passwd | Hashed | email | usr_img | usr_bio | usr_data | ip | TOKEN |
        +----------------------------------------------------------------------------------------------------------+

        +--------+
        | POSTS  |
        +--------+-------------------------------------+
        | id_post | user | TITLE | TEXT | ip | private |
        +----------------------------------------------+

        +----------+
        | FEEDBACK |
        +----------+-------------------------------------------------------------------------------+
        | id_feedback | feedbacktype | content_id | type_content | votes | viewer | creator | time |
        +------------------------------------------------------------------------------------------+

        +-------+
        |  MOD  |
        +-------+-----------------------------------------------------------------------------------------------+
        | id_moderation | user_id | rol | Permiso Eliminar | Permiso Ocultar | Permiso Mostrar | Permiso Banear |
        +-------------------------------------------------------------------------------------------------------+




*/
    
     function __construct($servername,$dbname,$username_db,$password_db){
        parent::__construct($servername,$dbname,$username_db,$password_db);
         // CONSTRUCTOR CREAR NUEVOS DATOS NECESARIOS PARA FILTROS EN LAS QUERIES
     }
    public function edit($token,$id_post){
        //TODO edit
        //TODO AL EDITAR POST CREAR UN REGISTRO EN FEEDBACK , CAPTURANDO LA IP, USUARIO Y POST MODIFICADO
        // id_post,user(id),TITLE,TEXT
    }
    public function hide($token,$id_post){
        //TODO hide
        //Conexion a DataBase
        $conn = new DB(parent::getServerName(),parent::getdbname(),parent::getuserdb(),parent::getpasswordb());
        
        //Lista de Consultas
        $query1 = " = '".$token."';";
        $query2 = "SELECT user FROM posts where id_post = ".$id_post;
        
        //Almacenamiento de Datos de Consultas
        $user_from_token = $conn->select($query1)[0]['username'];
        $id_user_token = $conn->select($query1)[0]['id_usr'];
        $id_user = $conn->select($query2)[0]['user'];

        //Consulta
        $query3 = "SELECT count(*) 'ismod'  FROM `mod_table` WHERE user_id = ".sprintf("".$id_user_token."").";";
        
        //Almacenamiento de Datos de Consultas
        $ismod_var = $conn->select($query3)[0]['ismod'];
        $ismod = false;
        if(strval($ismod_var)==0){$ismod = true;}
        
        ////////////////
        //// TEST  ////
        ///////////////

        $ok = false;
        if($id_user == $id_user_token){ 
            /* EL USUARIO DEL TOKEN ES EL PROPIETARIO DEL POST */
            $ok = true;
        }else{
            if(true == true){$ok = true;}else{
                // NO TIENES PERMISOS PARA EDITAR EL POST
                // AÑADIR REGISTRO DE INCIDENCIAS
                // CAPUTRAR IP,USERNAME,TOKEN,POST...
                // BAN TEMPORAL DE IP Y DE USUARIO
            }
        }
        if($ok == true){
            $query4 = sprintf("UPDATE `posts` SET private = 1 WHERE id_post = %s",$id_post);
            $conn->action($query4);
        }

        //// SI EL TOKEN NO PERTENECE A UN USUARIO MOD
        ////$query3 = sprintf("UPDATE `posts` SET private = 1 WHERE id_post = %s AND user = %s",$id_post,$id_user);
        
        
    }
    public function show($token,$id_post){
        //TODO show
        //Conexion a DataBase
        $conn = new DB(parent::getServerName(),parent::getdbname(),parent::getuserdb(),parent::getpasswordb());
        
        //Lista de Consultas
        $query1 = "SELECT id_usr,username FROM usr WHERE token = '".$token."';";
        $query2 = "SELECT user FROM posts where id_post = ".$id_post;
        
        //Almacenamiento de Datos de Consultas
        $user_from_token = $conn->select($query1)[0]['username'];
        $id_user_token = $conn->select($query1)[0]['id_usr'];
        $id_user = $conn->select($query2)[0]['user'];

        //Consulta
        $query3 = "SELECT count(*) 'ismod'  FROM `mod_table` WHERE user_id = ".sprintf("".$id_user_token."").";";
        
        //Almacenamiento de Datos de Consultas
        
        $ismod_var = $conn->select($query3)[0]['ismod'];
        $ismod = false;
        if(strval($ismod_var)==0){$ismod = true;}
        
        ////////////////
        //// TEST  ////
        ///////////////

        $ok = false;
        if($id_user == $id_user_token){ 
            /* EL USUARIO DEL TOKEN ES EL PROPIETARIO DEL POST */
            $ok = true;
        }else{
            if(true){$ok = true;}else{
                // NO TIENES PERMISOS PARA EDITAR EL POST
                // AÑADIR REGISTRO DE INCIDENCIAS
                // CAPUTRAR IP,USERNAME,TOKEN,POST...
                // BAN TEMPORAL DE IP Y DE USUARIO
            }
        }
        if($ok == true){
            $query4 = sprintf("UPDATE `posts` SET private = 0 WHERE id_post = %s",$id_post);
            $conn->action($query4);
        }
    }
    public function changeVisibility($token,$id_post){
        //TODO changeVisibility
        $conn = new DB(parent::getServerName(),parent::getdbname(),parent::getuserdb(),parent::getpasswordb());
        $actual_status = $conn->select("SELECT private FROM posts WHERE id_post = ".$id_post);
        $actual_status = $actual_status[0]['private'];
        if(intval($actual_status)==0){
            $this->hide($token,$id_post);
        }else{
            $this->show($token,$id_post);
        }
        //TODO LOG
        //$conn->action(''); 
    }
    
    public function like($token,$id_post){
    	$ok = false;
    	$conn = new DB(parent::getServerName(),parent::getdbname(),parent::getuserdb(),parent::getpasswordb());
        //Lista de Consultas
        $query1 = "SELECT count(id_usr) 'isuser' FROM usr WHERE token = '".addslashes($token)."';";
        //Almacenamiento de Datos de Consultas
        $user_from_token = $conn->select($query1)[0]['isuser'];
        if($user_from_token == 1 ){
        	echo $user_from_token;
        	$ok = true;
        }else{
        	echo $user_from_token;
        }
        
        if($ok == true){
            $query4 = sprintf("UPDATE posts SET points = points+1 WHERE id_post = %s",$id_post);
            $conn->action($query4);
        }else{
        	//NO HAY USUARIO
        	echo false;
        }
        
        //TODO like
        //TODO LOG
        
        echo 'LIKE';
    }
    public function report($token,$id_post){
        echo 'REPORT';
        //TODO LOG
        //TODO IF REPORTS > ceil(2/POINTS) --> BAN --> PENDING REVISION
        //$conn->action(''); 
    }

    public function valpost($id_post){
        //TODO
        $conn = new DB(parent::getServerName(),parent::getdbname(),parent::getuserdb(),parent::getpasswordb());
        $asd = 0;
        $sql = "SELECT points,reports FROM posts WHERE id_post = ".$id_post;
        $values = $conn->select($sql)[0];
        $pts = $values['points'];
        $rep = $values['reports'];
        // print_r($values);
        // $pts = 100;
        // $rep = 1;
        if(intval($rep)>4){
            $post_score = $pts - ($rep*5);
        }else{
            $post_score = $pts - $rep;
        }
        // POINTS - (REPORTS*-5) = SHOW_POINTS
        echo  $post_score;
    }

    public function delete($token,$id_post){
        //TODO DELETE (HIDDE ELEMENT)
        //Conexion a DataBase
        $conn = new DB(parent::getServerName(),parent::getdbname(),parent::getuserdb(),parent::getpasswordb());
        
        //Lista de Consultas
        $query1 = "SELECT id_usr,username FROM usr WHERE token = '".$token."';";
        $query2 = "SELECT user FROM posts where id_post = ".$id_post;
        
        //Almacenamiento de Datos de Consultas
        $user_from_token = $conn->select($query1)[0]['username'];
        $id_user_token = $conn->select($query1)[0]['id_usr'];
        $id_user = $conn->select($query2)[0]['user'];

        //Consulta
        $query3 = "SELECT count(*) 'ismod'  FROM `mod_table` WHERE user_id = ".sprintf("".$id_user_token."").";";
        
        //Almacenamiento de Datos de Consultas
        $ismod_var = $conn->select($query3)[0]['ismod'];
        $ismod = false;
        if(strval($ismod_var)==0){$ismod = true;}
        
        ////////////////
        //// TEST  ////
        ///////////////

        $ok = false;
        if($id_user == $id_user_token){ 
            /* EL USUARIO DEL TOKEN ES EL PROPIETARIO DEL POST */
            $ok = true;
        }else{
            if(true == true){$ok = true;}else{
                // NO TIENES PERMISOS PARA EDITAR EL POST
                // AÑADIR REGISTRO DE INCIDENCIAS
                // CAPUTRAR IP,USERNAME,TOKEN,POST...
                // BAN TEMPORAL DE IP Y DE USUARIO
            }
        }
        if($ok == true){
            $query4 = sprintf("UPDATE `posts` SET private = 3 WHERE id_post = '%s'",$id_post);
            $conn->action($query4);
        }
    }
    public function banpost($token,$id_post){
       //TODO BA POST
        //Conexion a DataBase
        $conn = new DB(parent::getServerName(),parent::getdbname(),parent::getuserdb(),parent::getpasswordb());
        
        //Lista de Consultas
        $query1 = "SELECT id_usr,username FROM usr WHERE token = '".$token."';";
        $query2 = "SELECT user FROM posts where id_post = ".$id_post;
        
        //Almacenamiento de Datos de Consultas
        $user_from_token = $conn->select($query1)[0]['username'];
        $id_user_token = $conn->select($query1)[0]['id_usr'];
        $id_user = $conn->select($query2)[0]['user'];

        //Consulta
        $query3 = "SELECT count(*) 'ismod'  FROM `mod_table` WHERE user_id = ".sprintf("".$id_user_token."").";";
        
        //Almacenamiento de Datos de Consultas
        $ismod_var = $conn->select($query3)[0]['ismod'];
        $ismod = false;
        if(strval($ismod_var)==0){$ismod = true;}
        
        ////////////////
        //// TEST  ////
        ///////////////

        $ok = false;
        if($id_user == $id_user_token){ 
            /* EL USUARIO DEL TOKEN ES EL PROPIETARIO DEL POST */
            $ok = true;
        }else{
            if(true == true){
            	// NO TIENES PERMISOS PARA EDITAR EL POST
            	$ok = true;
            echo " NO TIENES PERMISOS PARA EDITAR EL POST";
            }else{
                echo " NO TIENES PERMISOS PARA EDITAR EL POST";
                // AÑADIR REGISTRO DE INCIDENCIAS
                // CAPUTRAR IP,USERNAME,TOKEN,POST...
                // BAN TEMPORAL DE IP Y DE USUARIO
                
            }
        }
        if($ok == true){
            $query4 = sprintf("UPDATE `posts` SET private = 4 WHERE id_post = '%s'",$id_post);
            $conn->action($query4);
        }
    }

}

//define('__ROOT__', dirname(__FILE__)))'once(__ROOT__.'header-menu.php');





/*
 function __construct($servername,$dbname,$username_db,$password_db){
        $servername = $servername;
        $dbname = $dbname;
        $username_db = $username_db;
        $password_db = $password_db;
        // CONSTRUCTOR CREAR NUEVOS DATOS NECESARIOS PARA FILTROS EN LAS QUERIES
    }*/

$action = new Actions($servername,$dbname,$username_db,$password_db);
$token = '0';
$action_value = 0;
if(isset($_POST['action'])){
    $action_value = $_POST['action'];}
if(isset($_POST['API'])){
    // PONER REGISTRO DE QUE TOKEN HA HECHO TAL COSA
    $token = $_POST['API']; 
}else{$action_value = 0;}

if(isset($_POST['id_post'])){
    $id_post = evitarsqlint($_POST['id_post']);
    
    switch($action_value){
        //Hide
        case '1':$action->changeVisibility($token,$id_post);
        break;
        //EDIT
        case '2':$action->edit($token,$id_post);
        break;
        //DELETE
        case '3':$action->delete($token,$id_post);
        break;
        //Agradecimiento
        case '4':$action->like($token,$id_post);
        break;
        //Report
        case '5':$action->report($token,$id_post);
        break;
        //Ban
        case '6':$action->banpost($token,$id_post);
        break;
        //SHOW
        case '7':$action->changeVisibility($token,$id_post);
        break;
        //VER LIKES
        default:$action->valpost($id_post);
        break;
    }
}else{
    echo "ERROR - POST NOT DEFINED";
}

//https://bluegraded.netpaction.php?token=1&idpost=1

?>
<?php
    $action_value = 0;
    if(isset($_POST['action'])){
        $action_value = $_POST['action'];
    }
    else{
    }
?>