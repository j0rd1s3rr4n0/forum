<?php
class DB {
    private $servername;
    private $dbname;
    private $username_db;
    private $password_db;
    function __construct($servername,$dbname,$username_db,$password_db){
        $this->servername = $servername;
        $this->dbname = $dbname;
        $this->username_db = $username_db;
        $this->password_db = $password_db;
    }

    // FUNCION PARA CREAR ACCIONOS SIN RETORNO DE DATOS
    public function action($query){
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username_db, $this->password_db);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = $query;
            // use exec() because no results are returned
            $conn->exec($sql);
          } catch(PDOException $e) {echo $sql . "<br>" . $e->getMessage();}
          $conn = null;
    }

    // FUNCION PARA CREAR BUSQUEDAS CON RETORNO DE DATOS
    public function select($query){
        try{
            $conn = new mysqli($this->servername, $this->username_db, $this->password_db, $this->dbname);
            if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}
            $sql = $query;
            $result = $conn->query($sql);
            $array = array();
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    array_push($array,$row);
                }
                return $array;
            }
        } catch (\Throwable $th) {/*throw $th;*/}
        $conn = null;
    }
    function getServerName(){
        return $this->servername;
    }
    function getdbname(){
        return $this->dbname;
    }
    function getuserdb(){
        return $this->username_db;
    }
    function getpasswordb(){
        return $this->password_db;
    }
    function setServerName($servername){
        $this->servername = $servername;
    }
    function setdbname($dbname){
        $this->dbname = $dbname;
    }
    function setuserdb($username_db){
        $this->username_db = $username_db;
    }
    function setpasswordb($password_db){
        $this->password_db = $password_db;
    }
}

?>

