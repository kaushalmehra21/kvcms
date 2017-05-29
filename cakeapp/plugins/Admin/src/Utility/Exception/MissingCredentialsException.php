<?php

namespace Instagram\Utility\Exception;

use RuntimeException;

/**
 * MissingCredentialsException class.  This exception will be thrown from
 * Instagram\Utility\InstagramClient when Client ID or Secret is missing.
 */
class MissingCredentialsException extends RuntimeException
{

}
