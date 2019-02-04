<?php
/**
 * Created by PhpStorm.
 * User: faubert
 * Date: 03/02/19
 * Time: 03:35
 */

namespace AdminAsso\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Leader
 * @package AdminAsso\CoreBundle\Entity
 * @ORM\Table(name="dirigeant")
 * @ORM\Entity()
 */
class Leader extends Member
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $role
     * @ORM\Column(name="role", type="string")
     */
    protected $role;
}