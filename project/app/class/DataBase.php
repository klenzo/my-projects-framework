<?php
namespace App\Classes;

class DataBase
{
    protected $PDO = false;

    protected $DB_HOST;
    protected $DB_NAME;
    protected $DB_CHARSET;
    protected $DB_USER;
    protected $DB_PASSWORD;
    protected $DB_PREFIX;

    public function __construct(array $DB = array())
    {
        $this->DB_HOST = DB_HOST;
        $this->DB_NAME = DB_NAME;
        $this->DB_CHARSET = DB_CHARSET;
        $this->DB_USER = DB_USER;
        $this->DB_PASSWORD = DB_PASSWORD;
        $this->DB_PREFIX = DB_PREFIX;

        if (is_array($DB)) {
            if (isset($DB['HOST'])) {
                $this->DB_HOST = $DB['HOST'];
            }
            if (isset($DB['NAME'])) {
                $this->DB_NAME = $DB['NAME'];
            }
            if (isset($DB['CHARSET'])) {
                $this->DB_CHARSET = $DB['CHARSET'];
            }
            if (isset($DB['USER'])) {
                $this->DB_USER = $DB['USER'];
            }
            if (isset($DB['PASSWORD'])) {
                $this->DB_PASSWORD = $DB['PASSWORD'];
            }
            if (isset($DB['PREFIX'])) {
                $this->DB_PREFIX = $DB['PREFIX'];
            }
        }
    }

    public function conectDB()
    {
        try {
            $this->PDO = new \PDO('mysql:host='. $this->DB_HOST .';dbname='. $this->DB_NAME .';charset='. $this->DB_CHARSET, $this->DB_USER, $this->DB_PASSWORD);
            $this->PDO->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $this->PDO;
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function getInfo($value)
    {
        return $this->$value;
    }

    public function query($statement, $args = false, $return = false)
    {
        if (!$this->PDO) {
            $this->conectDB();
        }

        if ($args) {
            if (!is_array($args)) {
                $args = array($args);
            }
            $req = $this->PDO->prepare($statement);
            $req->execute($args);
        } else {
            $req = $this->PDO->query($statement);
        }

        if ($return) {
            switch (strtolower($return)) {
                case 'object':
                    return $req->fetchObject();
                    break;

                default:
                    return $req->fetchAll();
                    break;
            }
        } else {
            return $req;
        }
    }
}
