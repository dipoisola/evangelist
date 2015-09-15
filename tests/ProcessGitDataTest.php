<?php

namespace League\Evangelist\Test;

use League\Evangelist\ProcessGitData;


class ProcessGitDataTest extends \PHPUnit_Framework_TestCase
{
  /**
   * Test that true does in fact equal true
   */
    public function test_if_ProcessGitData_returns_number()
    {
        $this->assertFalse(is_int(ProcessGitData::ProcessData('dzpo')));
    }
}
