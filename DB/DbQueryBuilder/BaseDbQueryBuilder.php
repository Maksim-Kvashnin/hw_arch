<?php


abstract class BaseDbQueryBuilder implements DbQueryBuilder
{
    public $db;

    public function __construct(DbConnection $db)
    {
        $this->db = $db;
    }

}