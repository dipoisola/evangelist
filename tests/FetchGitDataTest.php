<?php

namespace League\Evangelist\Test;

use League\Evangelist\FetchGitData;

class FetchGitTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test that the returned result by FetchGitData::FetchDate() is of type array
     */
    public function test_git_api_result()
    {
        $this->assertInternalType('array', FetchGitData::fetchData('dzpo'));
    }

    /**
     * Test for inexistent Github user
     */
    public function test_for_inexistent_user()
    {
        $this->assertEquals("User cannot be found on Github.", FetchGitData::returnGithubDetails('kzjk'));
    }

    /**
     * Test for Null input
     */
    public function test_for_null_user()
    {
        $this->assertEquals("Github username cannot be null. Please enter a valid username.", FetchGitData::returnGithubDetails(null));
    }

    /**
     * Test if function getNoOfRepos returns an integer
     */
    public function test_if_integer_is_returned()
    {
        $this->assertInternalType('integer', FetchGitData::getNoOfRepos('andela-oisola'));
    }
}
