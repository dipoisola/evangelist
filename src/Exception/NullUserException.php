<?php

namespace League\Evangelist\Exception;

use Exception;

/**
 * Class NullUsernameException
 *
 * @package League\Evangelist
 */

class NullUserException extends Exception
{
    /**
     * Handles null username exception
     *
     * @return string
     */
    public function respond()
    {
        return 'Github username cannot be null. Please enter a valid username.';
    }
}
