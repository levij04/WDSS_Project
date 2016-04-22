<?php
/**
 * Created by PhpStorm.
 * User: College
 * Date: 22/04/2016
 * Time: 13:01
 */

namespace Library;



class BorrowedBookTest extends \PHPUnit_Framework_TestCase
{
    public function testGetAndSetId()
    {
        // Arrange
        $bb = new BorrowedBook();
        $bb->setId(9);
        $expectedResult = 9;

        // Act
        $id = $bb->getId();

        // Assert
        $this->assertEquals($expectedResult, $id);
    }


    public function testGetAndSetBookId()
    {
        // Arrange
        $bb = new BorrowedBook();
        $bb->setBookId(3);
        $expectedResult = 3;

        // Act
        $id = $bb->getBookId();

        // Assert
        $this->assertEquals($expectedResult, $id);
    }

    public function testGetAndSetUserId()
    {
        // Arrange
        $bb = new BorrowedBook();
        $bb->setUserId(15);
        $expectedResult = 15;

        // Act
        $id = $bb->getUserId();

        // Assert
        $this->assertEquals($expectedResult, $id);
    }
}

