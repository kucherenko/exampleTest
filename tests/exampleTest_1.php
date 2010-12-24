<?php

require_once '../example.php';

/**
 * Тест с $expected в @dataProvider
 */
class exampleTest extends PHPUnit_Framework_TestCase {
    
    /**
     * @param Example
     */
    private $_sut = null;

    public function  setUp()
    {
        $this->_sut = new Example();
    }

    /**
     * @dataProvider dataFx
     */
    public function testFx($x)
    {
        $this->assertEquals($x + 1, $this->_sut->fx($x));
    }

    public function dataFx()
    {
        return array(
            array(-10),
            array(-7),
            array(0),
            array(7),
            array(10),
        );
    }

    /**
     * @dataProvider dataFy
     */
    public function testFy($y)
    {
        $this->assertEquals($y + 5, $this->_sut->fy($y));
    }

    public function dataFy()
    {
        return array(
            array(-5),
            array(-3),
            array(0),
            array(3),
            array(5),
        );
    }

    /**
     * @dataProvider dataZ
     */
    public function testZ($x, $y)
    {
        $this->assertEquals($this->_sut->fx($x) + $this->_sut->fy($y), $this->_sut->Z($x, $y));
    }

    public function dataZ()
    {
        return array(
            array(-10, -5),
            array(-7, -3),
            array(0, 0),
            array(7, 3),
            array(10, 5),
        );
    }
    
}