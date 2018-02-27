<?php
/**
 * Created by PhpStorm.
 * User: sfdev
 * Date: 23.02.18
 * Time: 0:09
 */

namespace Training\Test\Plugin\Controller\Product;


class View
{

    public function beforeExecute(\Magento\Catalog\Controller\Product\View $subject) {
        echo "BEFORE<BR>";
        return null;
    }
    public function afterExecute(\Magento\Catalog\Controller\Product\View $controller,
    $result) {
        echo "AFTER";
        return $result;
    }

}