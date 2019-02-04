<?php
/**
 * Created by PhpStorm.
 * User: faubert
 * Date: 04/02/19
 * Time: 12:17
 */

namespace AdminAsso\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class PlayerProfile
 * @package AdminAsso\CoreBundle\Entity
 */
class PlayerProfile
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    protected $age;

    protected $size;

    protected $weight;

    protected $picture;
}