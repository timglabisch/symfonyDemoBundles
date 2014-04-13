<?php

namespace Tg\Demo\MinimalDoctrineOneToOneUnidirektionalBundle\Test;

use Tg\Demo\MinimalDoctrineOneToOneUnidirektionalBundle\Entity\Attribute;
use Tg\Demo\MinimalDoctrineOneToOneUnidirektionalBundle\Entity\Name;
use Tg\Demo\MinimalDoctrineOneToOneUnidirektionalBundle\Entity\Product;
use Tg\TestFunctionalBundle\Test\TestFunctional;

class BasicTest extends TestFunctional {

    function testBasic() {

        $p = new Product();
        $p->name = new Name('eins', 'zwei');

        static::$em->persist($p->name);
        static::$em->persist($p);
        static::$em->flush();
        static::$em->clear();

        $loadedName = static::$em->find(Name::CLASS, $p->name->id);
        $this->assertEquals('eins', $loadedName->product->name->nameA);
    }

}