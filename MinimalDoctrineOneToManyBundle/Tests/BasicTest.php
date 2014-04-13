<?php

namespace Tg\Demo\MinimalDoctrineOneToManyBundle\Test;

use Tg\Demo\MinimalDoctrineOneToManyBundle\Entity\Attribute;
use Tg\Demo\MinimalDoctrineOneToManyBundle\Entity\Product;
use Tg\TestFunctionalBundle\Test\TestFunctional;

class BasicTest extends TestFunctional {

    function testBasic() {

        $product = new Product();
        $attribute = new Attribute();
        $attribute->name = "attribute1";
        $product->attributes->add($attribute);

        static::$em->persist($attribute);
        static::$em->persist($product);
        static::$em->flush();

        $products = static::$em->getRepository(Product::CLASS)->findAll();

        $this->assertCount(1, $products);
        $this->assertCount(1, $products[0]->attributes);
        $this->assertEquals($products[0]->attributes[0]->name, 'attribute1');

    }


    function testMultipleAttributes() {

        $product1 = new Product();
        $attribute1 = new Attribute();
        $attribute1->name = "attribute1";
        $attribute2 = new Attribute();
        $attribute2->name = "attribute2";
        $product1->attributes->add($attribute1);
        $product1->attributes->add($attribute2);

        static::$em->persist($attribute1);
        static::$em->persist($attribute2);
        static::$em->persist($product1);
        static::$em->flush();

        // add one other product to make sure that all attrebutes are seperated.
        $product2 = new Product();
        $product2attribute1 = new Attribute();
        $product2attribute1->name = "attribute3";
        $product2->attributes->add($product2attribute1);

        static::$em->persist($product2attribute1);
        static::$em->persist($product2);
        static::$em->flush();
        static::$em->clear();

        unset(
            $product1,
            $attribute1,
            $attribute2,
            $product2,
            $product2attribute1
        );

        $products = static::$em->getRepository(Product::CLASS)->findAll();

        $this->assertCount(2, $products);
        $this->assertCount(2, $products[0]->attributes);
        $this->assertEquals($products[0]->attributes[0]->name, 'attribute1');
        $this->assertEquals($products[0]->attributes[1]->name, 'attribute2');
        $this->assertEquals($products[1]->attributes[0]->name, 'attribute3');

    }

}