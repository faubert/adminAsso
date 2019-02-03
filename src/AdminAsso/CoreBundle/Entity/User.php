<?php
/**
 * Created by PhpStorm.
 * User: faubert
 * Date: 01/02/19
 * Time: 17:46
 */

namespace AdminAsso\CoreBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @package AdminAsso\CoreBundle\Entity
 * @ORM\Table(name="adminasso_user")
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }
}