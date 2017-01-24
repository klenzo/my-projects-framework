<?php
namespace App\Classes;

class DataBase
{
    protected $PDO = false;

    public function __construct()
    {
        
    }

    public function conectDB()
    {
        try {
            $this->PDO = new PDO('mysql:host='. DB_HOST .';dbname='. DB_NAME .';charset='. DB_CHARSET, DB_USER, DB_PASSWORD);
            $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->PDO;
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function query($statement, $args)
    {
        if (!$this->PDO) {
            $this->conectDB();
        }

        if ($arg) {
            if (!is_array($arg)) {
                $arg = array($arg);
            }
            $req = $this->PDO->prepare($stat);
            $req->execute($arg);
        } else {
            $req = $this->PDO->query($stat);
        }
        return $req;
    }
}
