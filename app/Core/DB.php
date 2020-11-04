<?php 

require_once(LIBS.'DB/MysqliDb.php');

class DB {
    protected $db;

    public function connect() {

        $database = new MysqliDb (HOST, USER, PASS, DBNAME);

        if(!$database->connect()) {
            //echo "Success";
            $this->db = $database;
            return $this->db;
        }
        else {
            echo "error";
        }
    }
}