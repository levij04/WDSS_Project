<?php
/**
 * Created by PhpStorm.
 * User: College
 * Date: 21/04/2016
 * Time: 10:26
 */

namespace Library;

    use Mattsmithdev\PdoCrud\DatabaseTable;

class User extends DatabaseTable
{

    private $UserID;
    private $Fname;
    private $Lname;
    private $Email;
    private $Username;
    private $Password;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    /**
     * @return mixed
     */
    public function getFname()
    {
        return $this->Fname;
    }

    /**
     * @param mixed $Fname
     */
    public function setFname($Fname)
    {
        $this->Fname = $Fname;
    }

    /**
     * @return mixed
     */
    public function getLname()
    {
        return $this->Lname;
    }

    /**
     * @param mixed $Lname
     */
    public function setLname($Lname)
    {
        $this->Lname = $Lname;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param mixed $Password
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
    }

    /**
     * @return mixed
     */
    public function getUserID()
    {
        return $this->UserID;
    }

    /**
     * @param mixed $UserID
     */
    public function setUserID($UserID)
    {
        $this->UserID = $UserID;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->Username;
    }

    /**
     * @param mixed $Username
     */
    public function setUsername($Username)
    {
        $this->Username = $Username;
    }

}