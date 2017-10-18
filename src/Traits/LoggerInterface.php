<?php

namespace PhpFeature\Traits;


/**
 * Interface LoggerInterface
 * @package PhpFeature\Traits
 */
interface LoggerInterface
{

    /**
     * @param string $message
     */
    public function log(string $message): void;
}