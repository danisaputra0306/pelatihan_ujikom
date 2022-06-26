<?php
include('koneksi.php');
class login{
 
    public $con;
 
    function __construct(){
        $koneksi=new koneksi;
        $this->con=$koneksi->con;
    }
 
    function get_data($username,$password){
        $data=$this->con->query("SELECT * from tbl_user WHERE username='$username' and PASSWORD='$password'");
        return $data;
    }
 
 
   
}
?>
 
 
 
<html>
    <head>
 
    </head>
    <body>
        <h1> Silahkan Login ..</h1>
       
        <form method="post">
        <table>
            <tr>
                <td>Masukan Username </td>
                <td>:</td>
                <td><input name="username"></td>
            </tr>
            <tr>
                <td>Masukan Password </td>
                <td>:</td>
                <td><input name="password" type="password"></td>
               
            </tr>
            <tr>
                <td> </td>
                <td></td>
                <td> <button type="submit" name="login">Login</button></td>
            </tr>
           
 
        </table>
        </form>
 
        <?php
        session_start();
        $data=new login;
       
   
        if(isset($_POST['login'])){
            $hasil=$data->get_data($_POST['username'],$_POST['password']);
            $jml=mysqli_num_rows($hasil);
            if($jml>0){
                $_SESSION['username']=$_POST['username'];
                $_SESSION['status']='login';
                header("location:index.php");
            }else echo "username dan password salah";
           
           
        }
       
 
        ?>
       
    </body>
</html>
