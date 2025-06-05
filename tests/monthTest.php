<?php

require_once '../Month.php';

class monthTest extends PHPUnit_Framework_TestCase {

	/**
        * @dataProvider monthNameData
	*/
	public function testGetNameByNumber($data, $expected)
	{
	       $m = new Month();

		$this->assertEquals($expected, $m->getNameByNumber($data));
	}
	
	public function monthNameData()
	{
		return array(
		  	array(1, '������'),
		  	array(2, '�������'),
		  	array(3, '����'),
		  	array(4, '������'),
		  	array(5, '���'),
		  	array(6, '����'),
		  	array(7, '����'),
		  	array(8, '������'),
		  	array(9, '��������'),
		  	array(10, '�������'),
		  	array(11, '������'),
		  	array(12, '�������'),
		);
	}

}