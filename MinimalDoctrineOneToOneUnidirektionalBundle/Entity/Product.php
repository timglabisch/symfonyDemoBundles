<?php

namespace Tg\Demo\MinimalDoctrineOneToOneUnidirektionalBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table("minimalDoctrineOneToOneUnidirektionalBundleProduct")
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
     * @ORM\OneToOne(targetEntity="Tg\Demo\MinimalDoctrineOneToOneUnidirektionalBundle\Entity\Name", inversedBy="product")
     */
    public $name;

}