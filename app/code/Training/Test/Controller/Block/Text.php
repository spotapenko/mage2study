<?php
/**
 * Created by PhpStorm.
 * User: sfdev
 * Date: 06.03.18
 * Time: 21:05
 */

namespace Training\Test\Controller\Block;


class Text extends \Magento\Framework\App\Action\Action {

    public function execute() {
        $block = $this->_view->getLayout()->createBlock('Magento\Framework\View\Element\Text');
        $block->setText("Hello world from text block !");
        $this->getResponse()->appendBody($block->toHtml());

    }


} 