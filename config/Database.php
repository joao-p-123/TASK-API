<?php
class Database {
    private $host = 'localhost';
    private $dbname = 'task_manager';
    private $username = 'root';
    private $password = '';

    private $connection;

    public function connect() {
        if ($this->connection === null) {
            try {
                $this->connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", 
                $this->username, $this->password);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                throw new Exception("Database connection failed: " . $e->getMessage());
            }
        }
        return $this->connection;
    }
}