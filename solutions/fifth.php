<?php

namespace solutions;

abstract class DatabaseConnector
{
  abstract public function connect(): void;
  abstract public function disconnect(): void;
}

class MySQLConnector extends DatabaseConnector
{
  public function connect(): void
  {
    echo "Connecting to MySQL database...<br />";
  }

  public function disconnect(): void
  {
    echo "Disconnecting from MySQL database...<br />";
  }
}

class PostgreSQLConnector extends DatabaseConnector
{
  public function connect(): void
  {
    echo "Connecting to PostgreSQL database...<br />";
  }

  public function disconnect(): void
  {
    echo "Disconnecting from PostgreSQL database...<br />";
  }
}

$mysqlConnector = new MySQLConnector();
$postgreSQLConnector = new PostgreSQLConnector();

$mysqlConnector->connect();
$mysqlConnector->disconnect();

echo "<br />";

$postgreSQLConnector->connect();
$postgreSQLConnector->disconnect();

?>
