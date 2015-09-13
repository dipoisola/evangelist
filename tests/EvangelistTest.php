<?php

namespace League\evangelist\Test;
use League\evangelist;


class EvangelistTest extends \PHPUnit_Framework_TestCase
{


  /**
   * Test that true does in fact equal true
   */
    public function test_username()
    {
        $user = new a\EvangelistStatus('dipo');
        $this->assertEquals('dipo', $this->username());
    }

    //public function testTrueIsTrue()
    //{
    //    $this->assertTrue(true);
    //}
}
