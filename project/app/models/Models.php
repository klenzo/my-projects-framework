<?php

namespace \App\Model;

class Model
{
    protected $DB = false;

    public function __construct()
    {
        $this->VerifDB();
    }

    public function VerifDB()
    {
        if (! $this->DB) {
            $this->DB = new App\Classes\DataBase();
        }
    }

    public function select($table, $champ, $where = false, $response = false)
    {
        // if( $where ){ $where = ' WHERE '. implode('=', $where); }else{ $where = ''; }
        // return $this->query('SELECT '. $champ .' FROM '. $table . $where, );
    }

    public function insert($table, $args)
    {
    }

    public function update($table, $id, $args)
    {
    }

    public function delete($table, $id)
    {
    }
}
