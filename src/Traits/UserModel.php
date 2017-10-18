<?php

namespace PhpFeature\Traits;


/**
 * Class UserModel
 * @package PhpFeature\Traits
 */
class UserModel
{
    use LoggerTrait;

    /**
     * @param array $data
     */
    public function save(array $data)
    {
        //Do something
        $this->log('User is saved');
    }
}