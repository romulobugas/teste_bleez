Teste
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
            echo "Deu certo VÁ DORMIR!!!";
        }else {
            echo "Tendi não!!!";
        }         
        echo "<script>window.location= 'index.php';</script>";
        
    }
}

?>
