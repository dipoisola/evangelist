<?php

namespace League\Evangelist\Test;

use League\Evangelist\FetchGitData;

class FetchGitTest extends \PHPUnit_Framework_TestCase
{
  /**
   * Test that returned result is a number
   */

    public function test_gitapi_result()
    {
        $this->assertEquals(gettype(1), gettype(FetchGitData::FetchData('dzpo')));
    }
}
