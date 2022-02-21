<?php

namespace Kilohealth\App\SubscriptionStorage;

class DBSubscriptionStorage extends SubscriptionStorage {

    private $connection;

    public function __construct() {
        $this->connection = new \PDO('mysql:host=localhost;dbname=myapp', 'root', '');
    }

    public function read() {
        try {
            $stmt = $this->connection->prepare('SELECT * from subscription WHERE id = 1');
            $stmt->execute();
            $row  = $stmt -> fetch();
            return (bool)$row['isActive'];
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function write(int $value) {
        try {
            $stmt = $this->connection->prepare("UPDATE subscription SET isActive = $value WHERE id = 1");
            $stmt->execute();
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}