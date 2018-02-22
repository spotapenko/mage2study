<?php
/**
 * Created by PhpStorm.
 * User: sfdev
 * Date: 23.02.18
 * Time: 0:09
 */

namespace Training\Test\Plugin\Product;


class View
{

    public function beforeExecute() {
        echo "BEFORE<BR>";
    }
    public function afterExecute(\Magento\Catalog\Controller\Product\View $controller,
    $result) {
        echo "AFTER";
        return $result;
    }

}