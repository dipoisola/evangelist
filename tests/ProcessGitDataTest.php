<?php

namespace League\Evangelist\Test;

use League\Evangelist\ProcessGitData;


class ProcessGitDataTest extends \PHPUnit_Framework_TestCase
{
  /**
   * Test that true does in fact equal true
   */
    // public function test_if_ProcessGitData_returns_number()
    // {
    //     $this->assertTrue(is_int(ProcessGitData::ProcessData('dzpo')));
    // }
    public function Inputs()
    {
        return [
            ['andela-oisola', 'You are coming up, Junior Evangelist. Keep it moving!'],
            ['andela-amaborukoje', 'Good Job, Associate Evangelist!'],
            ['andela-smartin', 'Hey, Most Senior Evangelist! You are the man!'],
            // ['andela-kerinoso', 'So sad!!! You have a very low contribution to open-source. You need ' . (5 - EvangelistFetch::getNumOfPublicRepos('andela-kerinoso')) . ' of your work left to be added to your public repo to become a Junior Evangelist.'],
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
