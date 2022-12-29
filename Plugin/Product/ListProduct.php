<?php
namespace Ryan\ProductLabel\Plugin\Product;

class ListProduct
{
    public function afterGetProductDetailsHtml(\Magento\Catalog\Block\Product\ListProduct $subject, $result, $product)
    {
        $label = $product->getData('product_label');
        if ($label) {
            $result .= '<div class="product-label">' . $label . '</div>';
        }
        return $result;
    }
}
