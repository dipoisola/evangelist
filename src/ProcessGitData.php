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
            $NoOfRepos = FetchGitData::getNoOfRepos($username);

            if ($NoOfRepos >= 21) {
                return 'Hey, Most Senior Evangelist! You are the man!';
            } elseif ($NoOfRepos >= 11) {
                return 'Good Job, Associate Evangelist!';
            } elseif ($NoOfRepos >= 5) {
                return 'You are coming up, Junior Evangelist. Keep it moving!';
            } elseif ($NoOfRepos < 5) {
                throw new LowRepoNumberException();
            }
        } catch(LowRepoNumberException $e) {
            return $e->respond();
        }
    }
}
