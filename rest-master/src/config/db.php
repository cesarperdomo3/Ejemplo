<?php
    class db{
        // Properties
        private $dbhost = 'remotemysql.com';
        private $dbuser = '8q3Ic5mlOZ';
        private $dbpass = 'yovNoG371z';
        private $dbname = '8q3Ic5mlOZ';

        // Connect
        public function connect(){
            $mysql_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
            $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        }
    }
