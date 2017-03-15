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
        $this->setDBHOST(DB_HOST);
        $this->setDBNAME(DB_NAME);
        $this->setDBCHARSET(DB_CHARSET);
        $this->setDBUSER(DB_USER);
        $this->setDBPASSWORD(DB_PASSWORD);
        $this->setDBPREFIX(DB_PREFIX);

        if (is_array($DB)) {
            if (isset($DB['HOST'])) {
                $this->setDBHOST($DB['HOST']);
            }
            if (isset($DB['NAME'])) {
                $this->setDBNAME($DB['NAME']);
            }
            if (isset($DB['CHARSET'])) {
                $this->setDBCHARSET($DB['CHARSET']);
            }
            if (isset($DB['USER'])) {
                $this->setDBUSER($DB['USER']);
            }
            if (isset($DB['PASSWORD'])) {
                $this->setDBPASSWORD($DB['PASSWORD']);
            }
            if (isset($DB['PREFIX'])) {
                $this->setDBPREFIX($DB['PREFIX']);
            }
        }
    }

    public function conectDB()
    {
        try {
            $PDO = new \PDO('mysql:host='. $this->getDBHOST() .';dbname='. $this->getDBNAME() .';charset='. $this->getDBCHARSET(), $this->getDBUSER(), $this->getDBPASSWORD());
            $PDO->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $this->setPDO($PDO);

            return $this->getPDO();
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
        if (!$this->getPDO()) {
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

    /**
     * Gets the value of PDO.
     *
     * @return mixed
     */
    public function getPDO()
    {
        return $this->PDO;
    }

    /**
     * Sets the value of PDO.
     *
     * @param mixed $PDO the
     *
     * @return self
     */
    protected function setPDO($PDO)
    {
        $this->PDO = $PDO;

        return $this;
    }

    /**
     * Gets the value of DB_HOST.
     *
     * @return mixed
     */
    public function getDBHOST()
    {
        return $this->DB_HOST;
    }

    /**
     * Sets the value of DB_HOST.
     *
     * @param mixed $DB_HOST the
     *
     * @return self
     */
    protected function setDBHOST($DB_HOST)
    {
        $this->DB_HOST = $DB_HOST;

        return $this;
    }

    /**
     * Gets the value of DB_NAME.
     *
     * @return mixed
     */
    public function getDBNAME()
    {
        return $this->DB_NAME;
    }

    /**
     * Sets the value of DB_NAME.
     *
     * @param mixed $DB_NAME the
     *
     * @return self
     */
    protected function setDBNAME($DB_NAME)
    {
        $this->DB_NAME = $DB_NAME;

        return $this;
    }

    /**
     * Gets the value of DB_CHARSET.
     *
     * @return mixed
     */
    public function getDBCHARSET()
    {
        return $this->DB_CHARSET;
    }

    /**
     * Sets the value of DB_CHARSET.
     *
     * @param mixed $DB_CHARSET the
     *
     * @return self
     */
    protected function setDBCHARSET($DB_CHARSET)
    {
        $this->DB_CHARSET = $DB_CHARSET;

        return $this;
    }

    /**
     * Gets the value of DB_USER.
     *
     * @return mixed
     */
    public function getDBUSER()
    {
        return $this->DB_USER;
    }

    /**
     * Sets the value of DB_USER.
     *
     * @param mixed $DB_USER the
     *
     * @return self
     */
    protected function setDBUSER($DB_USER)
    {
        $this->DB_USER = $DB_USER;

        return $this;
    }

    /**
     * Gets the value of DB_PASSWORD.
     *
     * @return mixed
     */
    public function getDBPASSWORD()
    {
        return $this->DB_PASSWORD;
    }

    /**
     * Sets the value of DB_PASSWORD.
     *
     * @param mixed $DB_PASSWORD the
     *
     * @return self
     */
    protected function setDBPASSWORD($DB_PASSWORD)
    {
        $this->DB_PASSWORD = $DB_PASSWORD;

        return $this;
    }

    /**
     * Gets the value of DB_PREFIX.
     *
     * @return mixed
     */
    public function getDBPREFIX()
    {
        return $this->DB_PREFIX;
    }

    /**
     * Sets the value of DB_PREFIX.
     *
     * @param mixed $DB_PREFIX the
     *
     * @return self
     */
    protected function setDBPREFIX($DB_PREFIX)
    {
        $this->DB_PREFIX = $DB_PREFIX;

        return $this;
    }
}
