<?php


class PostrgreSQLDbQueryBuilder extends BaseDbQueryBuilder
{
    public function queryBuilder(string $params) {
        echo "запрос к {$this->db->connection} c параметрами {$params}".PHP_EOL;
    }
}