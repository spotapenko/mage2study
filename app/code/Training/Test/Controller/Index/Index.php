<?php
/**
 * Created by PhpStorm.
 * User: sfdev
 * Date: 23.02.18
 * Time: 0:00
 */

namespace Training\Test\Controller\Index;


class Index extends \Magento\Framework\App\Action\Action
{
    public function execute() {
     //   $this->getResponse()->appendBody("HELLO WORLD");
        $this->_redirect('catalog/category/view/id/3');
    }
}