<?php

namespace PhpFeature\Traits;


/**
 * Class FileLogger
 * @package PhpFeature\Traits
 */
class FileLogger implements LoggerInterface
{

    /**
     * @param string $message
     */
    public function log(string $message): void
    {
        echo PHP_EOL . 'Logged to the file: ' . $message . PHP_EOL;
    }
}