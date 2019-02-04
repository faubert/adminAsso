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

    /**
     * @var string $label
     * @ORM\Column(name="libelle", type="string")
     */
    protected $label;

    protected $locationType;

    /**
     * @var string $address
     * @ORM\Column(name="adresse_1", type="string")
     */
    protected $address;

    /**
     * @var string $address2
     * @ORM\Column(name="adresse_2", type="string")
     */
    protected $address2;

    /**
     * @var string $zipCode
     * @ORM\Column(name="code_postal", type="string")
     */
    protected $zipCode;

    /**
     * @var string $city
     * @ORM\Column(name="ville", type="string")
     */
    protected $city;
}