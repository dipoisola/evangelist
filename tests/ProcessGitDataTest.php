<?php

namespace League\Evangelist\Test;

use League\Evangelist\ProcessGitData;


class ProcessGitDataTest extends \PHPUnit_Framework_TestCase
{
  /**
   * Test that function ProcessData works
   */

    public function Inputs()
    {
        return [
            ['andela-vdugeri', 'You are coming up, Junior Evangelist. Keep it moving!'],
            ['andela-asogbein', 'Good Job, Associate Evangelist!'],
            ['andela-smartins', 'Hey, Most Senior Evangelist! You are the man!'],
            // ['', 'Github username cannot be null. Please enter a valid username.'],
            // ['kzjk', 'User cannot be found on Github.']
        ];
    }

    /**
     * @dataProvider Inputs
     */
    public function test_return_status($username, $response)
    {
        $this->assertEquals($response, ProcessGitData::ProcessData($username));
    }
}
