<?php
/**
 * Created by PhpStorm.
 * User: sfdev
 * Date: 21.02.18
 * Time: 23:45
 */

namespace Training\Test\Plugin\Block\View;


class Product extends \Magento\Framework\View\Element\Template
{
    public function beforeToHtml(\Magento\Catalog\Block\Product\View\Description $originalBlock)
    {
        $originalBlock->getProduct()->setDescription('Test description123');
    }
}