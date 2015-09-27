<?php

namespace League\Evangelist;

use League\Evangelist\FetchGitData;
use League\Evangelist\Exception\InexistentUserException;
use League\Evangelist\Exception\NullUserException;
use League\Evangelist\Exception\LowRepoNumberException;


class ProcessGitData
{
    public static function processData($username)
    {
        try {
            $GitData = FetchGitData::FetchData($username);

            if ($GitData['public_repos'] >= 21) {
                return 'Hey, Most Senior Evangelist! You are the man!';
            } elseif ($GitData['public_repos'] >= 11) {
                return 'Good Job, Associate Evangelist!';
            } elseif ($GitData['public_repos'] >= 5) {
                return 'You are coming up, Junior Evangelist. Keep it moving!';
            } elseif ($GitData['public_repos'] < 5) {
                throw new LowRepoNumberException();
            }
        } catch(LowRepoNumberException $e) {
            return $e->respond();
        }

    }
}
