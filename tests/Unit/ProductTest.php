<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function test_products_comparison(): void
    {

        $products1 = ['shoes', 't-shirt', 'jeans'];
        $products2 = ['shoes', 't-shirt', 'jeans'];

        $this->assertEquals($products1, $products2);
    }

    public function test_products_comparison_with_different_products(): void
    {

        $products1 = ['shoes', 't-shirt', 'jeans'];
        $products2 = ['shoes', 't-shirt', 'shorts'];

        $this->assertNotEquals($products1, $products2);
    }

    public function test_products_comparison_with_different_products_order(): void
    {

        $products1 = ['shoes', 't-shirt', 'jeans'];
        $products2 = ['t-shirt', 'jeans', 'shoes'];

        $this->assertNotEquals($products1, $products2);
    }
}
