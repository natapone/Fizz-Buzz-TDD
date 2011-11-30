<?php

require_once "Fizz-Buzz.php";

class TestFizzBuzz extends PHPUnit_Framework_TestCase {
    /**
     * @dataProvider provider
     */
    public function testOne($ans, $input) {
        $this->assertEquals($ans, fizz_buzz($input));
    }

    public function provider() {
        return array();
    }
}

?>
