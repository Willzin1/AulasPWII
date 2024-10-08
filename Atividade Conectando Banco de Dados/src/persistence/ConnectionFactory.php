<?php 
    namespace App\persistence;

    class ConnectionFactory{

        private static $connection = null; // Se for static não precisamos dar new para a utilizarmos.

        public static function getConnection(){
            if (self::$connection == null){
                $dnsStr = "mysql:host=localhost;dbname=AulaBancoDados";
                $usuario = "root";
                $senha = "";
                self::$connection = new \PDO($dnsStr, $usuario, $senha); // dbname é o nome da database 
                self::$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            }

            return self::$connection;
        }
    }