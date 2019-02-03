<?php
/**
 * Created by PhpStorm.
 * User: faubert
 * Date: 03/02/19
 * Time: 03:24
 */

namespace AdminAsso\CoreBundle\Entity;


abstract class Member
{
    protected $firstName;

    protected $lastName;

    protected $location;

    protected $contact;

    protected $user;
}