<?php

class monthTest extends PHPUnit_Framework_TestCase {

	/**
        * @dataProvider monthNameData
	*/
	public function testGetNameByNumber($data, $expected)
	{
	       $m = new Month();

		$this->assertEquals($expected, $m->getNameByNumber());
	}
	
	public function monthNameData()
	{
		return array(
		  	array(1, 'Январь'),
		  	array(2, 'Февраль'),
		  	array(3, 'Март'),
		  	array(4, 'Апрель'),
		  	array(5, 'Май'),
		  	array(6, 'Июнь'),
		  	array(7, 'Июль'),
		  	array(8, 'Август'),
		  	array(9, 'Сентябрь'),
		  	array(10, 'Октябрь'),
		  	array(11, 'Ноябрь'),
		  	array(12, 'Декабрь'),
		);
	}

}