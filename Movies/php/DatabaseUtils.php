<?php


final class DatabaseUtils {

    
    public function __construct() {
        throw new \Exception("This class cannot be instantiated.");
    }

    
    public static function connect(string $host, string $username, string $password, string $database): mysqli {
        $connection = mysqli_connect($host, $username, $password, $database);
        if (!$connection) {
            die("Failed to connect to MySQL: " . mysqli_connect_error());
        }
        return $connection;
    }

    
    public static function closeConnection(mysqli $connection) {
        mysqli_close($connection);
    }

    
    public static function fetchData(mysqli $connection, string $query): array {
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Failed to get data from MySQL: " . mysqli_error($connection));
        }
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        return $data;
    }

    
    public static function executeQuery(mysqli $connection, string $query): bool {
        $result = mysqli_query($connection, $query);
        return $result ? true : false;
    }

}
