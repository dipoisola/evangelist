<?php

namespace League\Evangelist;

use Dotenv\Dotenv;
use League\Evangelist\Exception\InexistentUserException;
use League\Evangelist\Exception\NullUserException;

class FetchGitData
 {
    /**
     * Communicates with Github API to fetch data
     */
    public static function fetchData($username)
    {
        $env = new Dotenv(__DIR__ . '/../');
        $env->load();

        $githubCurl = curl_init();
        curl_setopt($githubCurl, CURLOPT_URL, 'https://api.github.com/users/' . $username . '?client_id=' . getenv('CLIENT_ID') . '&client_secret=' . getenv('CLIENT_SECRET'));
        curl_setopt($githubCurl, CURLOPT_USERAGENT, "league\evangelist agent");
        curl_setopt($githubCurl, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($githubCurl);
        $decoded = json_decode($data, true);
        curl_close($githubCurl);

        var_dump($decoded);
        return $decoded;
    }

    /**
     * Fetches user's full Github data
     */
    public static function returnGithubDetails($username)
    {
        try {

            if($username == "") {
                throw new NullUserException();
            }

            $fetchedData = static::fetchData($username);

            if(isset($fetchedData['message'])) {
                throw new InexistentUserException();
            }

            return $fetchedData;

        } catch (InexistentUserException $e) {
            return $e->respond();
        } catch (NullUserException $e) {
            return $e->respond();
        }
    }

    /**
     * Returns the number of repositories of a Github user
     */
    public static function getNoOfRepos($user)
    {
        $githubDetails = FetchGitData::returnGithubDetails($user);
        return $githubDetails['public_repos'];
    }
}

FetchGitData::fetchData('dzpo');
