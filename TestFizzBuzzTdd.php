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
    
    /**
     * @dataProvider providerFizzBuzz
     */
    public function testFizzBuzz($ans, $input) {
        $this->assertEquals($ans, fizz_buzz($input),'Fizz-Buzz fail');
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
    
    public function providerFizzBuzz() {
        return array(
            array('Fizz-Buzz', 15),
            array('Fizz-Buzz', 30),
            array('Fizz-Buzz', 45),
        );
    }
}

?>
