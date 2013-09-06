<?php
// src/Pcd/UserBundle/PcdUserBundle.php

namespace Pcd\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PcdUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
