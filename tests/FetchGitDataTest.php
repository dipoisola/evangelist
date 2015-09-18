<?php

namespace League\Evangelist\Test;

use League\Evangelist\FetchGitData;

class FetchGitTest extends \PHPUnit_Framework_TestCase
{
  /**
   * Test that returned result is a number
   */

    public function test_git_api_result()
    {
        $this->assertEquals(gettype(array()), gettype(FetchGitData::FetchData('dzpo')));
    }
}
