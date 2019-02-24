<?php
class xuly extends DBconnection{
    include "DBconfig.php";
    public function __construct(){
        parent::connect();
    }

    public function getData($query){
       $result = $this->connection->query($query);
       if($result == false ){
           return false ;
       }

       $row = array();
       while($row->$result->fetch_ALL()){
           $rows[] = $row;
       }
       return $rows;
    }


    public function execute($query){
        $result = $this->connection->query($query);
        if($result == false ){
            return false ;
        }
         else{
             return true;
         }
    }


    public function delete($id_sp,$table){
        $sql = "DELETE FROM $table WHERE mahocvien='$id_sp'";
        $result = $this->connection->query($sql);
        if($result == false ){
            return false ;
        }
         else{
             return true;
         }
    }
    public function add(){
        $sql = "INSERT INTO `danhsachhocvien`(`mahocvien`,`tenhocvien`,`diachi`,`email`) VALUES 
        ('$mahocvien','$tenhocvien','$diachi','$email')";
        $result = $this->connection->query($sql);
        if($result == false ){
            return false ;
        }
         else{
             return true;
         }
    }
    
}
?>