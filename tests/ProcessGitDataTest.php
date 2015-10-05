<?php

namespace League\Evangelist\Test;

use League\Evangelist\ProcessGitData;


class ProcessGitDataTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test that function ProcessData returns appropiate messages
     */
    public function inputs()
    {
        return [
            ['andela-sakande', 'You are coming up, Junior Evangelist. Keep it moving!'],
            ['andela-asogbein', 'Good Job, Associate Evangelist!'],
            ['busayo', 'Hey, Most Senior Evangelist! You are the man!'],
            ['andela-oisola', 'You have a low number of repositories. You cannot be rated.']
        ];
    }

    /**
     * @dataProvider inputs
     */
    public function test_return_status($username, $response)
    {
        $this->assertEquals($response, ProcessGitData::processData($username));
    }
}
