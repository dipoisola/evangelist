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
            ['andela-oisola', 'You are coming up, Junior Evangelist. Keep it moving!'],
            ['andela-amaborukoje', 'Good Job, Associate Evangelist!'],
            ['andela-smartin', 'Hey, Most Senior Evangelist! You are the man!'],
            ['', 'GitHub username cannot be blank!!!'],
            ['njfjffojirfjnknv', 'User cannot be found on Github.']
        ];
    }

    /**
     * @dataProvider Inputs
     */
    public function testGetStatusOfEvangelist($username, $response)
    {
        $this->assertEquals($response, ProcessGitData::ProcessData($username));
    }
}
