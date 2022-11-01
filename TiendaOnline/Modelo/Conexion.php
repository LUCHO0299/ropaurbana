<?php
class conexion{
    Private $servidor="Localhost";
    Private $db="tiendaonline";
    Private $puerto= 3306;
    Private $charset="utf8mb4";
    Private $usuario="root";
    Private $contrasena="";
    public $pdo=null;
    private $atributos=[PDO::ATTR_CASE=> PDO::CASE_LOWER,PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_ORACLE_NULLS=>PDO::NULL_EMPTY_STRING,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,PDO::ATTR_EMULATE_PREPARES => false];
    function __construct(){
        $this->pdo= new PDO("mysql:dbname={$this->db};host={$this->servidor};port={$this->puerto};charset={$this->charset}",$this->usuario,$this->contrasena,$this->atributos);
    }}

    $Chost = "Localhost";
    $Cuser = "root";
    $Cpass = "";
    $Cdb = "tiendaonline";

    $con = new mysqli($Chost,$Cuser,$Cpass,$Cdb);

    if($con->connect_errno) {
        die("Ha ocurrido un error");
    }
?>