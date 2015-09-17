<?php

namespace League\Evangelist;

/**
 * Class NullUsernameException
 *
 * @package League\Evangelist
 */

class NullUserException extends \Exception
{
    /**
     * Handles inexistent username
     *
     * @return string
     */
    public function respond()
    {
        return 'Github username cannot be null. Please enter a valid username.';
    }
}
