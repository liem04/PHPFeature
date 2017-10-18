<?php

namespace PhpFeature\Traits;


/**
 * Class TestTrait
 * @package PhpFeature\Traits
 */
class TestTrait
{

    /**
     *
     */
    public function test()
    {
        $userController = new UserController(new FileLogger());
        $userController->actionLogin();

        $userModel = new UserModel(new FileLogger());
        $userModel->save(['name' => 'bui thanh liem']);
    }
}