<?php

namespace League\Evangelist;

use Dotenv\Dotenv;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use League\Evangelist\Exception\InexistentUserException;
use League\Evangelist\Exception\NullUserException;

class FetchGitData
{

    /**
     * Load the environment stored credentials
     */
    public static function loadDotEnv()
    {
        $env = new Dotenv(__DIR__ . '/../');
        $env->load();
    }

    /**
     * Communicates with Github API to fetch data
     */
    public static function fetchData($username)
    {
        try {
            self::loadDotEnv();

            $client = new Client();
            $response = $client->get('https://api.github.com/users/' . $username . '?client_id=' . getenv('CLIENT_ID') . '&client_secret=' . getenv('CLIENT_SECRET'));
            $fullDetails = $response->json();
            return $fullDetails;
        } catch(ClientException $e) {
            return "User cannot be found on Github.";
        }
    }

    /**
     * Fetches user's full Github data
     */
    public static function returnGithubDetails($username)
    {
        try {

            if ($username == "") {
                throw new NullUserException();
            }

            $fetchedData = self::fetchData($username);

            if (isset($fetchedData['message'])) {
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
        $githubDetails = self::returnGithubDetails($user);
        return $githubDetails['public_repos'];
    }
}
