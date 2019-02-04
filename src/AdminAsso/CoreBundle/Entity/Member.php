<?php
/**
 * Created by PhpStorm.
 * User: faubert
 * Date: 03/02/19
 * Time: 03:24
 */

namespace AdminAsso\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

abstract class Member
{
    /**
     * @var string $firstName
     * @ORM\Column(name="prenom", type="string")
     */
    protected $firstName;

    /**
     * @var string $lastName
     * @ORM\Column(name="nom", type="string")
     */
    protected $lastName;

    /**
     * @var Location $location
     * @ORM\OneToOne(targetEntity="AdminAsso\CoreBundle\Entity\Location")
     * @ORM\JoinColumn(name="location_id", referencedColumnName="id")
     */
    protected $location;

    /**
     * @var Contact $contact
     * @ORM\OneToOne(targetEntity="AdminAsso\CoreBundle\Entity\Contact")
     * @ORM\JoinColumn(name="contact_id", referencedColumnName="id")
     */
    protected $contact;

    /**
     * @var User $user
     * @ORM\OneToOne(targetEntity="AdminAsso\CoreBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;
}