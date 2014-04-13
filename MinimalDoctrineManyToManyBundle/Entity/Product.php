<?php

namespace Tg\Demo\MinimalDoctrineManyToManyBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table("minimalDoctrineManyToManyBundleProduct")
 */
class Product {

    function __construct() {
        $this->attributes = new ArrayCollection();
    }

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * there is not real oneToMany...
     * instead set unique=true at the inverseJoinColumns.
     *
     * @ORM\ManyToMany(targetEntity="Tg\Demo\MinimalDoctrineManyToManyBundle\Entity\Attribute")
     * @return ArrayCollection
     */
    public $attributes;

}