<?php

namespace League\Evangelist;

class FetchGitData
{
    public static function FetchData($username)
    {
        $gitfetch = curl_init();
        curl_setopt($gitfetch, CURLOPT_URL, "https://api.github.com/users/$username");
        curl_setopt($gitfetch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201");
        curl_setopt($gitfetch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($gitfetch);
        curl_close($gitfetch);

        $decoded = json_decode($data, true);
        return true;
    }

}
