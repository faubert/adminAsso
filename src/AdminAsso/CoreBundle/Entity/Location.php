<?php
/**
 * Created by PhpStorm.
 * User: faubert
 * Date: 03/02/19
 * Time: 03:14
 */

namespace AdminAsso\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Location
 * @package AdminAsso\CoreBundle\Entity
 * @ORM\Table(name="localisation")
 * @ORM\Entity()
 */
class Location
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    protected $label;

    protected $locationType;

    protected $address;

    protected $address2;

    protected $zipCode;

    protected $city;
}