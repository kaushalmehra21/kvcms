<?php

namespace Instagram\Utility\Exception;

use RuntimeException;

/**
 * MissingAccessTokenException class.  This exception will be thrown from
 * Instagram\Utility\InstagramClient when access token is missing.
 */
class MissingAccessTokenException extends RuntimeException
{

}
