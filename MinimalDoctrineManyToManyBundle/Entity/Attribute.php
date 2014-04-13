<?php

namespace Tg\Demo\MinimalDoctrineManyToManyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table("minimalDoctrineManyToManyBundleAttribute")
 */
class Attribute {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, name="`name`")
     */
    public $name;
}