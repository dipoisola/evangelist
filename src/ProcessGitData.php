<?php

namespace League\Evangelist;

use League\Evangelist\FetchGitData;
use Leaugue\Evangelist\InexistentUserException;

class ProcessGitData
{
    public static function ProcessData($username)
    {
        try {
            $publicRepos = FetchGitData::FetchData($username);
        } catch (InexistentUserException $e) {
            return $e->respond();
        }

        if ($publicRepos >= 21) {
            return 'Hey, Most Senior Evangelist! You are the man!';
        } elseif ($publicRepos >= 11) {
            return 'Good Job, Associate Evangelist!';
        } elseif ($publicRepos >= 5) {
            return 'You are coming up, Junior Evangelist. Keep it moving!';
        }
    }
}
