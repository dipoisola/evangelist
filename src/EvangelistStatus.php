<?php

namespace League\EvangelistStatus;

class EvangelistStatus
{
    /**
     * Create a new Skeleton Instance
     */
    public function __construct($username)
    {
        this->username = $username;
        return true;
    }

    /**
     * Friendly welcome
     *
     * @param string $phrase Phrase to return
     *
     * @return string Returns the phrase passed in
     */

    public function fetchGithubData($username)
    {
        
    }
    public function echoPhrase($phrase)
    {
        return $phrase;
    }
}
