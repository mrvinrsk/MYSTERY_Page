<?php

class MySQLAPI
{

    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function execute($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();
    }

    public function result($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();
        $result = $statement->fetch();

        return $result;
    }

    public function rows($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();
        $rows = $statement->rowCount();

        return $rows;
    }

    public function tableExists($table)
    {
        $statement = $this->connection->prepare('SELECT 1 FROM `' . $table . '` LIMIT 1;');
        $statement->execute();
        $result = $statement->fetch();

        if ($result !== FALSE) {
            //DO SOMETHING! IT EXISTS!
            return true;
        } else {
            //I can't find it...
            return false;
        }
    }

}

?>