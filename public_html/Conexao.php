<?php

class Conexao {
    private static $conexao;

    private function _construct()
    {

    }
    
    public static function getInstance(){

        if (is_null(self::$conexao)) {
            # Conexão com o banco...
            self::$conexao = new \PDO('mysql:host=localhost;
                                       port-3306;
                                       dbname=crud',
                                       'teste',
                                       '6&@7ZtPlqXLa@mFe');
            self::$conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            self::$conexao->exec('set names utf8mb4');
            echo 'Show de bola, pode ir dormir';
        }         
        echo 'Show de bola, pode ir dormir';
        return self::$conexao;
        
    }
}

?>
