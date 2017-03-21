<?php

namespace App\Models;

/**
*
*/
class Table extends \App\Models\Model
{
    const TABLE_PREFIX = 'db_';
    const TABLE_NAME = 'table';

    const COLUMN_PREFIX = 'tab_';
    const COLUMN_ONE = 'colone';
    const COLUMN_TWO = 'coltwo';
    const COLUMN_THREE = 'colthree';

    public function init()
    {
        $this->insert(self::TABLE_PREFIX . self::TABLE_NAME,
            array(
                self::COLUMN_PREFIX.self::COLUMN_ONE => 'Hello',
                self::COLUMN_PREFIX.self::COLUMN_TWO => 'World'
            )
        );
    }
}
