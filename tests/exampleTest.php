<?php

require_once '../example.php';

/**
 * Тест с $expected в @dataProvider
 *
 */
class exampleTest_1 extends PHPUnit_Framework_TestCase {
    
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
    public function testFx($data, $expected)
    {
        $this->assertEquals($expected, $this->_sup->fx($data));
    }

    public function dataFx()
    {
        return array(
            array(-10, -9),
            array(-7, -6),
            array(0, 1),
            array(7, 8),
            array(10, 11),
        );
    }

    /**
     * @dataProvider dataFy
     */
    public function testFy($data, $expected)
    {
        $this->assertEquals($expected, $this->_sup->fy($data));
    }

    public function dataFy()
    {
        return array(
            array(-5, 0),
            array(-3, 2),
            array(0, 5),
            array(3, 8),
            array(5, 10),
        );
    }

    /**
     * @dataProvider dataZ
     */
    public function testZ($x, $y, $expected)
    {
        $this->assertEquals($expected, $this->_sup->Z($x, $y));
    }

    public function dataZ()
    {
        return array(
            array(-10, -5, -9),
            array(-7, -3, -4),
            array(0, 0, 6),
            array(7, 3, 16),
            array(10, 5, 21),
        );
    }
}