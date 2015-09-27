<?php

namespace League\Evangelist;

use League\Evangelist\Exception\InexistentUserException;
use League\Evangelist\Exception\NullUserException;


class FetchGitData
 {
    const CLIENT_ID = '513ce061270c479165f3';
    const CLIENT_SECRET = '0e8fdd973d153045631b0710db2a0339c3d0d90d';

    public static function fetchData($username)
    {
        try {
            if($username == "") {
                throw new NullUserException();
            }

            $gitfetch = curl_init();
            curl_setopt($gitfetch, CURLOPT_URL, "https://api.github.com/users/$username?client_id=CLIENT_ID&client_secret=CLIENT_SECRET");
            curl_setopt($gitfetch, CURLOPT_USERAGENT, "Mozilla/5.0 Gecko/20110201");
            curl_setopt($gitfetch, CURLOPT_RETURNTRANSFER, 1);
            $data = curl_exec($gitfetch);
            curl_error($gitfetch);
            $decoded = json_decode($data, true);
            curl_close($gitfetch);

            if(isset($decoded['message'])) {
                throw new InexistentUserException();
            }

            return $decoded;

        } catch (InexistentUserException $e) {
            return $e->respond();
        } catch (NullUserException $e) {
            return $e->respond();
        }
    }

    public static function getNoOfRepos($user)
    {
        $raw = FetchGitData::fetchData($user);
        $NoOfRepos = $raw['public_repos'];
        return $NoOfRepos;
    }
}

