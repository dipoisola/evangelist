<?php

namespace League\Evangelist;

use League\Evangelist\FetchGitData;
use Leaugue\Evangelist\Exception\InexistentUserException;
use Leaugue\Evangelist\Exception\NullUserException;
use League\Evangelist\Exception\LowRepoNumberException;

class ProcessGitData
{
    public static function ProcessData($username)
    {
        try {
            $publicRepos = FetchGitData::FetchData($username);

            if ($publicRepos['public_repos'] >= 21) {
                return 'Hey, Most Senior Evangelist! You are the man!';
            } elseif ($publicRepos['public_repos'] >= 11) {
                return 'Good Job, Associate Evangelist!';
            } elseif ($publicRepos['public_repos'] >= 5) {
                return 'You are coming up, Junior Evangelist. Keep it moving!';
            } elseif ($publicRepos['public_repos'] < 5) {
                throw new LowRepoNumberException();
            }
        } catch(LowRepoNumberException $e) {
            return $e->respond();
        }

    }
}
