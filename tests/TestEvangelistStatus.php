<?php

namespace League\Evangelist\Test;

use League\Evangelist\EvangelistStatus;


class EvangelistTest extends \PHPUnit_Framework_TestCase
{


  /**
   * Test that true does in fact equal true
   */
    public function test_username()
    {
        $user = new EvangelistStatus('dipo');
        $this->assertEquals('dipo', $user->username());
    }
}
