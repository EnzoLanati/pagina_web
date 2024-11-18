<?php
session_start();
require_once('Conexion/connection.php');
if(isset($_POST['boton_login'])){
    $conn= new Connection();
    $usuario= new User ($_POST['input_email'],$_POST['
        input_password']);
    $usuario ->verifyLogin($conn->makeConnection()); 
}
?>