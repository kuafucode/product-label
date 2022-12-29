# Product Label Module for Magento 2
This module adds a label to the top of product images on the product list page in Magento 2.

## Installation
To install the module, run the following command:

`
composer require ryan/module-product-label
`

Then, enable the module by running the following commands:

`
php bin/magento module:enable Ryan_ProductLabel
php bin/magento setup:upgrade
php bin/magento cache:clean
`

## Configuration
To configure the label for a product, go to the product edit page in the admin panel and click on the "Product Details" tab. The "Product Label" field will be available under the "Content" section. Enter the label text and save the product.

## Testing
To run the unit tests for the module, use the following command:

`
php vendor/bin/phpunit -c dev/tests/unit/phpunit.xml.dist app/code/Ryan/ProductLabel/Test/Unit/
`

## License
This module is licensed under the MIT License. See the LICENSE file for more information.

## Credits
Your Name - module author
