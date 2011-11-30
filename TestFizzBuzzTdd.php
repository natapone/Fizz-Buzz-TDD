<?php

require_once "Fizz-Buzz.php";

class TestFizzBuzz extends PHPUnit_Framework_TestCase {
    /**
     * @dataProvider providerFizz
     */
    public function testFizz($ans, $input) {
        $this->assertEquals($ans, fizz_buzz($input),'Fizz fail');
    }

    public function providerFizz() {
        return array(
            array('Fizz', 3),
            array('Fizz', 9),
            array('Fizz', 36),
        );
    }
}

?>
