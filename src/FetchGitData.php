<?php

namespace League\Evangelist;

use League\Evangelist\Exception\InexistentUserException;
use League\Evangelist\Exception\NullUserException;

class FetchGitData
 {
    public static function FetchData($username)
    {
        try {

            if($username == "") {
                throw new NullUserException();
            }

            $gitfetch = curl_init();
            curl_setopt($gitfetch, CURLOPT_URL, "https://api.github.com/users/$username?client_id=513ce061270c479165f3&client_secret=0e8fdd973d153045631b0710db2a0339c3d0d90d");
            curl_setopt($gitfetch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201");
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
            die("Bye.");
        } catch (NullUserException $e) {
            return $e->respond();
        }

    }
}
