<?php

namespace League\Evangelist\Test;

use League\Evangelist\FetchGitData;

class FetchGitTest extends \PHPUnit_Framework_TestCase
{
  /**
   * Test that true does in fact equal true
   */

    public function test_gitapi_result()
    {
        $this->assertEquals(gettype(1), gettype(FetchGitData::FetchData('dzpo')));
    }
}

//namespace League\Evangelist\Test;

// use phpmock\phpunit\PHPMock;

// class BuiltinTest extends \PHPUnit_Framework_TestCase
// {

//     use PHPMock;

//     public function testCurl()
//     {
//         $exec = $this->getFunctionMock(__NAMESPACE__, "curl");
//         $exec->expects($this->once())->willReturnCallback(
//             function ($command, &$output, &$return_var) {
//                 $this->assertEquals("foo", $command);
//                 $output = ["failure"];
//                 $return_var = 1;
//             }
//         );

//         curl("foo", $output, $return_var);
//         $this->assertEquals(["failure"], $output);
//         $this->assertEquals(1, $return_var);
//     }
// }
