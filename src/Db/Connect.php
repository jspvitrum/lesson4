<?php

namespace Db;

class Connect
{
    /**
     * @var \PDO
     */
    private $defaultConnection;

    /**
     * Connect constructor.
     * @param string $host
     * @param string $port
     * @param string $user
     * @param string $password
     * @param string $dbName
     */
    public function __construct($host, $port, $user, $password, $dbName)
    {
        try {
            $dsn = sprintf('mysql:dbname=%s;host=%s;port=%s', $dbName, $host, $port);
            $this->defaultConnection =  new \PDO($dsn, $user, $password);
        } catch (\PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    /**
     * @return \PDO
     */
    public function getDefaultConnection()
    {
        return $this->defaultConnection;
    }

    /**
     * @param \PDO $defaultConnection
     */
    public function setDefaultConnection($defaultConnection)
    {
        $this->defaultConnection = $defaultConnection;
    }
}
