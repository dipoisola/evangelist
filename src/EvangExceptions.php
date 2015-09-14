<?php

namespace League\Evangelist;

class EvangExceptions
{
    public function nullException($username)
    {
        $this->username = $username;
        if(is_null($this->username)) {
            throw new Exception('Null Input Exception');
        } else {
            return $this->username;
        }

    }


}
