<?php

namespace Drupal\my_module\Controller;

class MyModuleController
{
    public function test()
    {
        return array(
        '#markup' => t('Hello World!'),
        );
    }
}
