<?php

namespace App\Models;

class Model extends \App\Classes\DataBase
{
    protected $DB = false;

    public function __construct()
    {
        parent::__construct();

        $this->init();

        $this->VerifDB();
    }

    public function select($table, $champ, $where = false, $response = false)
    {
        // if( $where ){ $where = ' WHERE '. implode('=', $where); }else{ $where = ''; }
        // return $this->query('SELECT '. $champ .' FROM '. $table . $where, );
    }

    public function insert($table, $args)
    {
        if (! is_array($args)) {
            return false;
        }

        /**
         * $args = array('title' => 'Accueil', 'name' => 'Talk');
         */

        $keys = array_keys($args);
        $values = array_values($args);
        $akeys = array();

        foreach ($keys as $key => $value) {
            $akeys[] = ':'. $value;
            $avalue[':'. $value] = $args[ $value ];
        }
        $sql = 'INSERT INTO '. $table .' ('. implode(',', $keys) .') VALUES ('. implode(',', $akeys) .');';

        return $this->query($sql, $avalue);
    }

    public function update($table, $id, $args)
    {
    }

    public function delete($table, $id)
    {
    }
}
