<?php

namespace Tg\Demo\MinimalDoctrineOneToOneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table("minimalDoctrineOneToOneBundleName")
 */
class Name {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, name="namea")
     */
    public $nameA;

    /**
     * @ORM\Column(type="string", length=255, name="nameb")
     */
    public $nameB;

    function __construct($nameA, $nameB) {
        $this->nameA = $nameA;
        $this->nameB = $nameB;
    }
}