<?php

namespace League\Evangelist\Test;

use League\Evangelist\FetchGitData;

class FetchGitTest extends \PHPUnit_Framework_TestCase
{
  /**
   * Test that returned result is an array
   */
    public function test_git_api_result()
    {
        echo gettype(FetchGitData::FetchData('dzpo'));
        $this->assertEquals(gettype(1), gettype(FetchGitData::FetchData('dzpo')));
    }
  /**
   * Test for inexistent Github user and Null input
   */
    public function test_for_inexistent_user()
    {
        $this->assertEquals("User cannot be found on Github.", FetchGitData::FetchData('kzjk'));
    }

    public function test_for_null_user()
    {
        $this->assertEquals("Github username cannot be null. Please enter a valid username.", FetchGitData::FetchData(''));
    }
}
