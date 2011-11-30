<?php

require_once "Fizz-Buzz.php";

class TestFizzBuzz extends PHPUnit_Framework_TestCase {
    /**
     * @dataProvider providerFizz
     */
    public function testFizz($ans, $input) {
        $this->assertEquals($ans, fizz_buzz($input),'Fizz fail');
    }
    
    /**
     * @dataProvider providerBuzz
     */
    public function testBuzz($ans, $input) {
        $this->assertEquals($ans, fizz_buzz($input),'Buzz fail');
    }
    
    public function providerFizz() {
        return array(
            array('Fizz', 3),
            array('Fizz', 9),
            array('Fizz', 36),
        );
    }
    
    public function providerBuzz() {
        return array(
            array('Buzz', 5),
            array('Buzz', 10),
            array('Buzz', 100),
        );
    }
}

?>
