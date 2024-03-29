<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\UserBundle\Event;

use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Response user event that allows null user.
 *
 * @author Konstantinos Christofilos <kostas.christofilos@gmail.com>
 */
class GetResponseNullableUserEvent extends GetResponseUserEvent
{
    /**
     * GetResponseNullableUserEvent constructor.
     */
    public function __construct(?UserInterface $user, Request $request)
    {
        $this->user = $user;
        $this->request = $request;
    }
}
