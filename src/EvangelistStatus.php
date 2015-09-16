<?php

use League\Evangelist\ProcessGitData;

namespace League\Evangelist;

class EvangelistStatus
{
    /**
     * Create a new EvangelistStatus Instance
     */
    public function __construct($username)
    {
        $this->username = $username;
        return true;
    }

    public function username()
    {
        return $this->username;
    }

    public function getStatus()
    {
        $status = ProcessGitData::ProcessData($this->username);
        return $status;
    }
}
