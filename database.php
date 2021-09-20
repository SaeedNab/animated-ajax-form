<?php
    class Database {
        public static String $username,$password,$host,$db;

    public function __construct($username,$password,$host,$db){
        self::$username = $username;
        self::$password = $password;
        self::$host = $host;
        self::$db = $db;
    }

    public function connect(){
        try {
            $conn = new PDO("mysql:host=".self::$host.";dbname=".self::$db, self::$username, self::$password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
            return $conn;
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
    }

    }






?>