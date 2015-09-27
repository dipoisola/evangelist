<?php

use League\Evangelist\ProcessGitData;

namespace League\Evangelist;

class EvangelistStatus
{
    /**
     * Create a new EvangelistStatus Instance
     */
    protected $username;

    public function __construct($username)
    {
        $this->username = $username;
    }

    /**
     * Returns remarks depending on user's number of repositories
     */
    public function getStatus()
    {
        $status = ProcessGitData::ProcessData($this->username);
        return $status;
    }
}
