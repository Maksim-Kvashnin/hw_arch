<?php


abstract class BaseDbConnection implements DbConnection
{
    public $connection;

    public function __construct() {
        $this->connection = $this->getDbConnection();
    }
}