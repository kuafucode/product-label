<?php
namespace Ryan\ProductLabel\Test\Unit\Plugin\Product;

use Magento\Catalog\Model\Product;
use Magento\Catalog\Block\Product\ListProduct;
use Ryan\ProductLabel\Plugin\Product\ListProduct as ListProductPlugin;
use PHPUnit\Framework\TestCase;

class ListProductTest extends TestCase
{
    public function testAfterGetProductDetailsHtml()
    {
        $productMock = $this->createMock(Product::class);
        $productMock->expects($this->once())
            ->method('getData')
            ->with('product_label')
            ->willReturn('New');

        $subjectMock = $this->createMock(ListProduct::class);

        $plugin = new ListProductPlugin();
        $result = $plugin->afterGetProductDetailsHtml($subjectMock, '', $productMock);

        $this->assertEquals('<div class="product-label">New</div>', $result);
    }
}
