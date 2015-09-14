<?php

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

    public function fetchGithubData($username)
    {
        //return https://api.github.com/users/{$username};
    }
}
