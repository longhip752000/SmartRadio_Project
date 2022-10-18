<?php
    namespace News\DBUtils;
    use mysqli;
    class DBHelper
    {
        public static function connectDB()
        {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "news";
            $conn = new mysqli($servername, $username, $password, $dbname);
            return $conn;
        }
    }
?>
