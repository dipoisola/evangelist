<?php

namespace League\Evangelist;

use League\Evangelist\FetchGitData;

class ProcessGitData
{
    public static function ProcessData($username)
    {
        $gitData = FetchGitData::FetchData($username);
        $number_of_repos = $gitData['public_repos'];
        return $number_of_repos;
    }
}
