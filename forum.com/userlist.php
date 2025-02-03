<html>
<?php
define('__ROOT__', dirname(__FILE__).'/');
require_once(__ROOT__.'header-menu.php');
require_once(__ROOT__.'/cr1.php');


?>
<meta charset="utf-8">
<body>
    <style>
       .contenido {
            margin-left:10vw;
            height:60vh;
            width:50vw;
        }
    </style>
    <div class="contenido">
    <h1 class="text-uppercase bluegraded">User List</h1>
    <ul>
        <?php



    require_once(__ROOT__.'db.php');
    $conn = new DB($servername,$dbname,$username_db,$password_db);

    $sql = "SELECT username FROM usr";
    //echo "<script>alert('".$sql."');</script>";
    $result = $conn->select($sql);

    if (count($result) > 0) {
    // output data of each row
    for($i = 0; $i < count($result);$i++){
        $row = $result[$i];
        $user_from_list = $row['username'];
        echo '<li class="usrlst"><a href="@'.$user_from_list.'" >'.$user_from_list.'</a></li>';
    }
    } else {
    echo "Doesn't Have Any User Yet!";
    }
    ?>

    </ul>
    <h6 on="countUsers()">N&ordm; Usuarios: <span id="usercount">0</span></h6>
    </div>
    
    <script>
		countUsers();
    
    	function countUsers(){
    		document.querySelector('#usercount').innerHTML = document.querySelectorAll('li.usrlst').length.toString();
    	}
    </script>
    <?php
        require_once(__ROOT__.'footer.php');
    ?>
</body>

</html>