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
