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
 * Class Coach
 * @package AdminAsso\CoreBundle\Entity
 * @ORM\Table(name="entraineur")
 * @ORM\Entity()
 */
class Coach extends Member
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}