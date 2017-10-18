<?php

namespace PhpFeature\Traits;


/**
 * Class UserController
 * @package PhpFeature\Traits
 */
class UserController
{
    use LoggerTrait;

    /**
     *
     */
    public function actionLogin()
    {
        //Do something
        $this->log('Someone login');
    }
}