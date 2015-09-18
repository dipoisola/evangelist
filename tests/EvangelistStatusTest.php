<?php

namespace League\Evangelist\Test;

use League\Evangelist\EvangelistStatus;


class EvangelistTest extends \PHPUnit_Framework_TestCase
{
  /**
   * Test that function returns name
   */

    public function UsernameData()
    {
        return [
            'andela-vdugeri' => 'You are coming up, Junior Evangelist. Keep it moving!',
            'andela-asogbein' => 'Good Job, Associate Evangelist!',
            'busayo' => 'Hey, Most Senior Evangelist! You are the man!'
        ];
    }

    /**
     * Test for the equality between the expected values and actual values returned by EvangelistStatus::getStatus()
     *
     * @dataProvider UsernameData
     */
    public function test_Evangelist()
    {
        foreach($this->UsernameData() as $key => $value) {
            $status = new EvangelistStatus($key);
            //var_dump($status->getStatus());
            //var_dump($key);
            //var_dump($value);
            $this->assertEquals($value, $status->getStatus());
       }
    }
}
