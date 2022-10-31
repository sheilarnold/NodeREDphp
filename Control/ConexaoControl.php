<?php
class Conexao{
    static function conectar(){
        $servername = "172.17.0.1:3307";
        $username = "root";
        $password = "bancodedados";
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=db_nodeRed", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            echo "Erro ao estabelecer conexão: " . $e->getMessage();
        }
        
        return $conn;
    }

}
