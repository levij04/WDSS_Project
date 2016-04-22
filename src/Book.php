<?php
/**
 * Created by PhpStorm.
 * User: College
 * Date: 21/04/2016
 * Time: 13:46
 */

namespace Library;


use Mattsmithdev\PdoCrud\DatabaseTable;

class Book extends DatabaseTable {
    private $ID;
    private $BookName;
    private $Author;
    private $Available;


    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->Author;
    }

    /**
     * @param mixed $Author
     */
    public function setAuthor($Author)
    {
        $this->Author = $Author;
    }

    /**
     * @return mixed
     */
    public function getAvailable()
    {
        return $this->Available;
    }

    /**
     * @param mixed $Available
     */
    public function setAvailable($Available)
    {
        $this->Available = $Available;
    }

    /**
     * @return mixed
     */
    public function getBookName()
    {
        return $this->BookName;
    }

    /**
     * @param mixed $BookName
     */
    public function setBookName($BookName)
    {
        $this->BookName = $BookName;
    }

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param mixed $ID
     */
    public function setID($ID)
    {
        $this->ID = $ID;
    }




} 