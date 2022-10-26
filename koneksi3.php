<?php
class DbConfig 
{
    //private adalah menyembunyikan/menjaga property dan menthod agar tidak bisa diakses diluar class
    private $_host = 'localhost';
    private $_username = 'nanda';
    private $_password = '';
    private $_database = 'melamar_pekerjaan';
    //proteced adalah property ataupun menthod tersebut tidak bisa diakses dari luar class. Namun bisa diakses oleh class itu sendiri atau turunan dari class tersebut
    protected $connection;
    public function __construct()
    {
        if (!isset($this->connection)){

          $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);

         if (!$this->connection) {
            echo 'Cannot connect to database server';
            exit;
         }
        }

        return $this->connection;
    }
}

$konek=mysqli_connect("localhost","nanda","","melamar_pekerjaan");
function query($query){
global $konek;
$result = mysqli_query ($konek,$query);
$rows= [];
while ($row = mysqli_fetch_assoc($result)){
     $rows[] = $row;
}
return $rows;
}
?>