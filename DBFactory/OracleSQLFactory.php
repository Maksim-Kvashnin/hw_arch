<?php


class OracleSQLFactory extends DbFactory
{
    public function DbConnection()
    {
        return new OracleSQLDbConnection();
    }

    public function DbQueryBuilder()
    {
        return new OracleSQLDbQueryBuilder($this->DbConnection());
    }
}