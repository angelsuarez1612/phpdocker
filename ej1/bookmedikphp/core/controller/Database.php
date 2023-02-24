<?php
class Database {
    public static $db;
    public static $con;
    function Database(){
        $this->user=('USER_BOOKMEDIK');$this->pass=('PASS_BOOKMEDIK');$this->host=getenv('DATABASE_HOST');$this->ddbb=getenv('BD_BOOKMEDIK');
    }

    function connect(){
        $con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
        $con->query("set sql_mode=''");
        return $con;
    }

    public static function getCon(){
        if(self::$con==null && self::$db==null){
            self::$db = new Database();
            self::$con = self::$db->connect();
        }
        return self::$con;
    }

}
?>
