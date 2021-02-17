<?php

class Database
{
    private static $instance  = null  ;
    public function __construct()
    {
    }
    public static function getInstance ( )
    {
        try{
            if (!isset(self::$instance))
            {
                $pdo_options [PDO::ATTR_ERRMODE ] = PDO::ERRMODE_EXCEPTION  ;
                self::$instance  = new PDO('mysql:host=172.31.24.243;dbname=anapath2_db','test','password123' , $pdo_options ) ;
            }
            return self::$instance  ;
        }catch (PDOException $e )
        {
            echo $e->getMessage();
        }
    }
}