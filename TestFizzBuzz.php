<?php
require_once "Fizz-Buzz.php";

class TestFizzBuzz extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provider
     */
    public function testOne($ans, $input)
    {
        $this->assertEquals($ans, fizz_buzz($input));
    }
 
    public function provider()
    {
        return array(
          array('Fizz', 3),
          array('Fizz', 9),
          array('Buzz', 5),
          array('Buzz', 10),
          array('Fizz-Buzz', 15),
          array('Fizz-Buzz', 30),
          array(0, 0),
          array(2, 2),
        );
    }
}
?>
