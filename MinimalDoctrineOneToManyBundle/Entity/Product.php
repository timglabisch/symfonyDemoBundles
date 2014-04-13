<?php

namespace Tg\Demo\MinimalDoctrineOneToManyBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table("minimalDoctrineOneToManyBundleProduct")
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
     * @ORM\ManyToMany(targetEntity="Tg\Demo\MinimalDoctrineOneToManyBundle\Entity\Attribute")
     * @ORM\JoinTable("MinimalDoctrineOneToManyBundle_Product_Attribute",
     *  inverseJoinColumns={@ORM\JoinColumn(unique=true)}
     * )
     * @return ArrayCollection
     */
    public $attributes;

}