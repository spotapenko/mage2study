<?php
/**
 * Created by PhpStorm.
 * User: sfdev
 * Date: 06.03.18
 * Time: 21:05
 */

namespace Training\Test\Controller\Action;


class Index extends \Magento\Framework\App\Action\Action {

    public function execute() {
        $layout = $this->_view->getLayout();
        $block = $layout->createBlock('Training\Test\Block\Template');
        $block->setTemplate('test.phtml');
        $this->getResponse()->appendBody($block->toHtml());
    }
} 