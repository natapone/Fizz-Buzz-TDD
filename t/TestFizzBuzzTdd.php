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
     * @dataProvider providerFzBz
     */
    public function testFzBz($ans, $input) {
        $this->assertEquals($ans, fizz_buzz($input),'Fizz-Buzz fail');
    }
    
    /**
     * @dataProvider providerNonFzBz
     */
    public function testNonFzBz($ans, $input) {
        $this->assertEquals($ans, fizz_buzz($input),'non Fizz-Buzz fail');
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
    
    public function providerFzBz() {
        return array(
            array('Fizz-Buzz', 15),
            array('Fizz-Buzz', 30),
            array('Fizz-Buzz', 45),
        );
    }
    
    public function providerNonFzBz() {
        return array(
            array(0, 0),
            array(2, 2),
            array(44, 44),
        );
    }
}

?>
