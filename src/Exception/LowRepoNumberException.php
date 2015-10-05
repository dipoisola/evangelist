<?php

namespace League\Evangelist\Exception;

use Exception;

/**
 * Class LowRepoNumberException
 *
 * @package League\Evangelist
 */

class LowRepoNumberException extends Exception
{
    /**
     * Handles inexistent username
     *
     * @return string
     */
    public function respond()
    {
        return 'You have a low number of repositories. You cannot be rated.';
    }
}
