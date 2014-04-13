<?php

namespace Tg\Demo\MinimalDoctrineOneToOneUnidirektionalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table("minimalDoctrineOneToOneUnidirektionalBundleName")
 */
class Name {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=255, name="namea")
     */
    public $nameA;

    /**
     * @ORM\Column(type="string", length=255, name="nameb")
     */
    public $nameB;

    /**
     * @ORM\OneToOne(targetEntity="Tg\Demo\MinimalDoctrineOneToOneUnidirektionalBundle\Entity\Product", mappedBy="name")
     */
    public $product;

    function __construct($nameA, $nameB) {
        $this->nameA = $nameA;
        $this->nameB = $nameB;
    }
}