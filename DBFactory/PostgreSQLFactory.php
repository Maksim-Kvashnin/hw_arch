<?php


class PostgreSQLFactory extends DbFactory
{
    public function DbConnection()
    {
        return new PostgreSQLDbConnection();
    }

    public function DbQueryBuilder()
    {
        return new PostrgreSQLDbQueryBuilder($this->DbConnection());
    }
}