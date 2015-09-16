<?php

namespace League\Evangelist\Test;

use phpmock\phpunit\PHPMock;

class BuiltinTest extends \PHPUnit_Framework_TestCase
{

    use PHPMock;

    // public function testTime()
    // {
    //     $time = $this->getFunctionMock(__NAMESPACE__, "time");
    //     $time->expects($this->once())->willReturn(3);

    //     $this->assertEquals(3, time());
    // }

    public function testCurl()
    {
        $exec = $this->getFunctionMock(__NAMESPACE__, "curl");
        $exec->expects($this->once())->willReturnCallback(
            function ($command, &$output, &$return_var) {
                $this->assertEquals("foo", $command);
                $output = ["failure"];
                $return_var = 1;
            }
        );

        curl("foo", $output, $return_var);
        $this->assertEquals(["failure"], $output);
        $this->assertEquals(1, $return_var);
    }
}

// namespace League\Evangelist\Test;

// use League\Evangelist\CurlRequest;


// class FetchGitTest extends \PHPUnit_Framework_TestCase
// {
//   /**
//    * Test that true does in fact equal true
//    */
//      public function test_git_result()
//      {
//          $r = FetchGitData::FetchData('dzpo');
//          $this->assertEquals(gettype(array()), gettype($r));
//      }

//      public function test_git_result1()
//      {
//          $this->assertEquals(gettype('array'), gettype(FetchGitData::ShowString('dzpo')));
//      }

//      public function testGetThrowsWhenContentTypeIsNotJson() {
//      $http = $this->getMock('HttpRequest');
//      $http->expects($this->any())
//           ->method('getInfo')
//           ->will($this->returnValue('not JSON'));
//      $this->setExpectedException('HttpResponseException');
//      // create class under test using $http instead of a real CurlRequest
//      $fixture = new CurlRequest($http);
//      $fixture->get();
//      }
// }

