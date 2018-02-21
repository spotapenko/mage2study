<?php
/**
 * Created by PhpStorm.
 * User: sfdev
 * Date: 21.02.18
 * Time: 22:55
 */

namespace Training\Test\Plugin;


class Price
{
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        return $result+99;
    }
}