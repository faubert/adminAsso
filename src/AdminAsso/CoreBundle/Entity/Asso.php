<?php
/**
 * Created by PhpStorm.
 * User: faubert
 * Date: 03/02/19
 * Time: 03:06
 */

namespace AdminAsso\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Asso
 * @package AdminAsso\CoreBundle\Entity
 * @ORM\Table(name="association")
 * @ORM\Entity()
 */
class Asso
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $name
     * @ORM\Column(name="nom", type="string")
     */
    protected $name;


    protected $location;

    protected $contact;
}