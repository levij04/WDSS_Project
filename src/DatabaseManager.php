<?php
/**
 * Created by PhpStorm.
 * User: College
 * Date: 07/04/2016
 * Time: 12:51
 */

namespace Library;


class DatabaseManager {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;
    private $dbh;
    private $error;

    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname' . $this->dbname;
        try {
            $options = array(
                \PDO::ATTR_PERSISTENT => true
            );
            $this->dbh = new \PDO($dsn, $this->user, $this->pass, $options);
        } catch (\PDOException $e) {
            $this->error = $e->getMessage();
            print 'sorry - a database error occurred - please contact the site administrator ...';
            print '<br>';
            print $e->getMessage();
        }
    }
    public function getDbh()
    {
        return $this->dbh;
    }

}