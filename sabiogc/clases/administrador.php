<?php
class Administrador
{
    private static $instancia;
    private $dbh;

    private function __construct()
    {
    	try {
            $this->dbh = new PDO('mysql:host=localhost;dbname=sabiogc', 'sabiogc', 'Ies8:32');
            $this->dbh->exec("SET CHARACTER SET utf8");
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
        }
    }

    public static function singleton()
    {
        if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        }
        return self::$instancia;
    }

    public function get_administrador($usuario,$pass)
    {
        try {
            $query = $this->dbh->prepare('select * from administradores where usuario="'.$usuario.'" and pwd=PASSWORD("'.$pass.'")');
            $query->execute();

            $resultado=$query->fetch();
            
            return($resultado);
            $this->dbh = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
