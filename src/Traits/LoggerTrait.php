<?php

namespace PhpFeature\Traits;


/**
 * Trait LoggerTrait
 * @package PhpFeature\Traits
 */
trait LoggerTrait
{

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * LoggerTrait constructor.
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param string $message
     */
    public function log(string $message): void
    {
        $this->logger->log($message);
    }
}