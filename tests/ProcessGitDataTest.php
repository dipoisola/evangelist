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
            ['andela-ooduye', 'Damn It!!! Please make the world better, Oh Ye Prodigal Evangelist.'],
            ['andela-amaborukoje', 'Keep Up The Good Work, I crown you Associate Evangelist.'],
            ['andela-smartins', 'Yeah, I crown you Most Senior Evangelist. Thanks for making the world a better place.'],
            // ['andela-kerinoso', 'So sad!!! You have a very low contribution to open-source. You need ' . (5 - EvangelistFetch::getNumOfPublicRepos('andela-kerinoso')) . ' of your work left to be added to your public repo to become a Junior Evangelist.'],
            ['', 'GitHub username cannot be blank!!!'],
            ['njfjffojirfjnknv', 'Sorry, njfjffojirfjnknv is not registered on GitHub!']
        ];
    }

    /**
     * @dataProvider Inputs
     */
    public function testGetStatusOfEvangelist($username, $response)
    {
        //$status = new Evangelist($username);

        $this->assertEquals($response, ProcessGitData::ProcessData($username));
    }
}
