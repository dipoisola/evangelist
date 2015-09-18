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

            if ($publicRepos >= 21) {
                return 'Hey, Most Senior Evangelist! You are the man!';
            } elseif ($publicRepos >= 11 && $publicRepos < 21) {
                return 'Good Job, Associate Evangelist!';
            } elseif ($publicRepos >= 5 && $publicRepos < 11) {
                return 'You are coming up, Junior Evangelist. Keep it moving!';
            } elseif ($publicRepos < 5) {
                throw new LowRepoNumberException();
            }
        } catch(LowRepoNumberException $e) {
            return $e->respond();
        }

    }
}
