<?php
class koneksi{
    public $con;
    function __construct(){
        $this->con=new mysqli("localhost","root","","db_pelatihan27");
    }
 
}
 
?>
