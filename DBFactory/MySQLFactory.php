<?php


class MySQLFactory extends DbFactory
{
    public function DbConnection()
    {
        return new MySQLDdConnection();
    }

    public function DbQueryBuilder()
    {
        return new MySQLDbQueryBuilder($this->DbConnection());
    }
}