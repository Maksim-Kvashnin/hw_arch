<?php


abstract class DbFactory
{
    abstract public function DbConnection();

    abstract public function DbQueryBuilder();
}