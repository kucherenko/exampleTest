<?php

require_once '../example.php';

/**
 * Тест с $expected в @dataProvider
 */
class exampleTest extends PHPUnit_Framework_TestCase {
    
    /**
     * @param Example
     */
    private $_sup = null;

    public function  setUp()
    {
        $this->_sup = new Example();
    }

    /**
     * @dataProvider dataFx
     */
    public function testFx($x)
    {
        $this->assertEquals($x + 1, $this->_sup->fx($x));
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
        $this->assertEquals($y + 5, $this->_sup->fy($y));
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
        $this->assertEquals($this->_sup->fx($x) + $this->_sup->fy($y), $this->_sup->Z($x, $y));
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