<?php
class koneksi_jadwal{
    public $con;
    function __construct(){
        $this->con=new mysqli("localhost","root","","db_pelatihan27");
    }
 
}
 
?>
