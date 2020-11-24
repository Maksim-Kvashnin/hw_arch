<?php
include "DB/DbConnection/DbConnection.php";
include "DB/DbConnection/BaseDbConnection.php";
include "DB/DbConnection/MySQLDdConnection.php";
include "DB/DbConnection/OracleSQLDbConnection.php";
include "DB/DbConnection/PostgreSQLDbConnection.php";

include "DB/DbQueryBuilder/DbQueryBuilder.php";
include "DB/DbQueryBuilder/BaseDbQueryBuilder.php";
include "DB/DbQueryBuilder/MySQLDbQueryBuilder.php";
include "DB/DbQueryBuilder/OracleSQLDbQueryBuilder.php";
include "DB/DbQueryBuilder/PostrgreSQLDbQueryBuilder.php";

include "DBFactory/DbFactory.php";
include "DBFactory/MySQLFactory.php";
include "DBFactory/PostgreSQLFactory.php";
include "DBFactory/OracleSQLFactory.php";



function test(DbFactory $dbFactory) {
    $dbFactory->DbQueryBuilder()->queryBuilder("param1, param2");
}

test(new MySQLFactory());
test(new PostgreSQLFactory());
test(new OracleSQLFactory());
