<?php
class MyClass {

	public function Reverse($text) {
		$text = iconv('utf-8', 'windows-1251', $text);
		$text = strrev($text);
		$result = iconv('windows-1251', 'utf-8', $object);
		
		return result;
	}
}

class MyClassTest extends \PHPUnit_Framework_TestCase {

	protected $fixture;

    protected function setUp()
    {
        $this->fixture = new MyClass (); 
    }

    protected function tearDown()
    {
        $this->fixture = NULL;
    }

	/** 
    * @dataProvider providerReverse 
    */
    public function testReverse($a, $b)
    {
        $this->assertEquals($b, $this->fixture->reverse($a));
    }
	
	public function providerReverse()
    {
        return array (
            array ("Hello, World!", "!dlroW ,olleH"), 
            array ("Привет, Мир!", "!риМ ,тевирП"), 
            array ("12554", "45521")
        ); 
    }
}