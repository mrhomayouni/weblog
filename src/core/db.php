<?php

class db
{
    public static $db_server = "localhost";
    public static $db_name = "new_blog";
    public static $db_user = "root";
    public static $db_pass = "";
    public static $conn = "";

    public function __construct()
    {
        try {
            self::$conn = new PDO("mysql:host=" . self::$db_server . ";dbname=" . self::$db_name, self::$db_user, self::$db_pass);
            // set the PDO error mode to exception
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
