<?php

namespace League\Evangelist\Test;

use League\Evangelist\FetchGitData;


class FetchGitTest extends \PHPUnit_Framework_TestCase
{
  /**
   * Test that true does in fact equal true
   */
    public function test_git_result()
    {
        $r = FetchGitData::FetchData('dzpo');
        $this->assertEquals(gettype(array()), gettype($r));
    }

    public function test_git_result1()
    {
        $this->assertEquals(gettype('array'), gettype(FetchGitData::ShowString('dzpo')));
    }
}
