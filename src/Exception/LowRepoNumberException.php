<?php

namespace League\Evangelist\Exception;

/**
 * Class LowRepoNumberException
 *
 * @package League\Evangelist
 */

class LowRepoNumberException extends \Exception
{
    /**
     * Handles inexistent username
     *
     * @return string
     */
    public function respond()
    {
        return 'You have a low number of repository number to be rated.';
    }
}
