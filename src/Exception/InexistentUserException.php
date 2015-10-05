<?php

namespace League\Evangelist\Exception;

use Exception;

/**
 * Class InexistentUserException
 *
 * @package League\Evangelist
 */
class InexistentUserException extends Exception
{
    /**
     * Handles inexistent username
     *
     * @return string
     */
    public function respond()
    {
        return 'User cannot be found on Github.';
    }
}
