<?php
class DBconnection{
    private $hostname = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'quanlythuvien';
    protected $connection;
    public function connect(){
        if(!isset($this->connection)){
            $this->connection = new mysqli($this->hostname,$this->username,$this->password,$this->database);
            mysqli_set_charset($this->connecion, 'utf8');
            if(!$this->connection){
                echo "ket noi that bai";
                exit;
            }
        }
        return $this->connection;
    }
} 

?>