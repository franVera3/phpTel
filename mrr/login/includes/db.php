<?php

class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host='localhost';
        $this->db='compras';
        $this->user='root';
        $this->password='';
        $this->charset='utf8mb4';
    }

    function connect(){
        try {
            $conexion=new PDO("mysql:host,$this->host;dbname=$this->db",$this->user,$this->password);
        } catch (Exception $er) {
            echo ("Error al conectarse a la base de datos:  ".$er);
        }
    }
}

?>