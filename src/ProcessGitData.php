<?php

namespace League\Evangelist;

use League\Evangelist\FetchGitData;
use League\Evangelist\Exception\InexistentUserException;
use League\Evangelist\Exception\NullUserException;
use League\Evangelist\Exception\LowRepoNumberException;


class ProcessGitData
{
    /**
     * Returns corresponding remark for user's number of repositories
     */
    public static function processData($username)
    {
        try {
			$noOfRepos = FetchGitData::getNoOfRepos($username);			if ($noOfRepos >= 21) {                return 'Hey, Most Senior Evangelist! You are the man!';
            } elseif ($noOfRepos >= 11) {
                return 'Good Job, Associate Evangelist!';
            } elseif ($noOfRepos >= 5) {
                return 'You are coming up, Junior Evangelist. Keep it moving!';
            } elseif ($noOfRepos < 5) {
                throw new LowRepoNumberException();
            }
        } catch(LowRepoNumberException $e) {
            return $e->respond();
        }
    }
}
