<?php

namespace Tg\Demo\MinimalDoctrineOneToOneBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table("minimalDoctrineOneToOneBundleProduct")
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
    public $id;

    /**
     * @ORM\OneToOne(targetEntity="Tg\Demo\MinimalDoctrineOneToOneBundle\Entity\Name")
     */
    public $name;

}