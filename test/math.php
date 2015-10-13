<?php
require_once('simpletest/autorun.php');
require_once(dirname(__FILE__) . '/../src/math.php');

class mathTestCase extends UnitTestCase {

    function testAdd() {
      $this->assertTrue(add(1, 2) === 3);
      $this->assertFalse(add(1, 2) === 4);

    }

    function testSub() {
      $this->assertTrue(sub(1, 1) === 0);
      $this->assertFalse(sub(1, 2) === 0);
    }
}
?>
