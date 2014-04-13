<?php

namespace Tg\Demo\MinimalDoctrineOneToOneBundle\Test;

use Tg\Demo\MinimalDoctrineOneToOneBundle\Entity\Attribute;
use Tg\Demo\MinimalDoctrineOneToOneBundle\Entity\Name;
use Tg\Demo\MinimalDoctrineOneToOneBundle\Entity\Product;
use Tg\TestFunctionalBundle\Test\TestFunctional;

class BasicTest extends TestFunctional {

    function testBasic() {

        $p = new Product();
        $p->name = new Name('eins', 'zwei');

        static::$em->persist($p->name);
        static::$em->persist($p);
        static::$em->flush();
        static::$em->clear();

        $loadedP = static::$em->find(Product::CLASS, $p->id);
        $this->assertEquals('eins', $loadedP->name->nameA);
    }

}