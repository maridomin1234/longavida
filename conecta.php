<?php
   $serv='localhost';
   $banco='db_longavida';
   $usuario='root';

$conn=mysqli_connect($severname, $username,$senha,$banco);

if (!$conn){
    die("conexao falhou:". mysqli_connect_error());
}
?>