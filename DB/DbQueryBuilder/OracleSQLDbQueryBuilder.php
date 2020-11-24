<?php


class OracleSQLDbQueryBuilder extends BaseDbQueryBuilder
{
    public function queryBuilder(string $params) {
        echo "запрос к {$this->db->connection} c параметрами {$params}".PHP_EOL;
    }

}