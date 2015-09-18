<?php

namespace League\Evangelist;

use League\Evangelist\FetchGitData;
use Leaugue\Evangelist\Exception\InexistentUserException;
use Leaugue\Evangelist\Exception\NullUserException;

class ProcessGitData
{
    public static function ProcessData($username)
    {
        $publicRepos = FetchGitData::FetchData($username);

        if ($publicRepos['public_repos'] >= 21) {
            return 'Hey, Most Senior Evangelist! You are the man!';
        } elseif ($publicRepos['public_repos'] >= 11) {
            return 'Good Job, Associate Evangelist!';
        } elseif ($publicRepos['public_repos'] >= 5) {
            return 'You are coming up, Junior Evangelist. Keep it moving!';
        }

    }
}
