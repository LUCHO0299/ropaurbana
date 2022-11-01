<?php
include_once 'Conexion.php';
class Usuario{
    var $objetos;
    var $productos;
    public function __construct(){
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }
    function Loguearse($Correo,$pass){
        $sql="SELECT * FROM usuario inner join tipo_us on Tipo_usuario=id_tipo_us where correo=:correo and contraseña=:pass";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':correo' => $Correo,':pass'=>$pass));
        $this->objetos = $query->fetchAll();
        return $this->objetos;
       
    }
    function Crear_usuario($nombre,$correo,$contra,$dni,$telf,$direccion,$tipo){
        $sql="INSERT INTO usuario(id_usuario,nombre_usuario,correo,contraseña,dni,telefono, direccion,Tipo_usuario) VALUES (null,:nombre,:correo,:contra,:dni,:telf,:direccion,:tipo)";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':nombre'=>$nombre,':correo'=>$correo,':contra'=>$contra,':dni'=>$dni,':telf'=>$telf,':direccion'=>$direccion,':tipo'=>$tipo));
        if ($query->execute()) {
            header('Location: ../Vistas/Login.php');
        } else {
            header('Location: ../Vistas/Login.php');
        }
    }
   function Listar_productos(){
    $sql="SELECT id_producto,nombre_producto,precio,imagen_producto FROM  productos where mostrar=1";
        $query = $this->acceso->prepare($sql);
        $query->execute();
        $this->productos = $query->fetchAll(PDO::FETCH_ASSOC);
        return $this->productos;
   }
    
}
?>