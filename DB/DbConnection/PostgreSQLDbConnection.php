<?php


class PostgreSQLDbConnection extends BaseDbConnection
{
    public function getDbConnection() {
        echo "получаем Connect с PostgreSQL".PHP_EOL;
    }
}