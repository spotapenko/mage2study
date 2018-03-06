<?php
/**
 * Created by PhpStorm.
 * User: sfdev
 * Date: 06.03.18
 * Time: 20:48
 */

namespace Training\Test\Block;


class Test extends \Magento\Framework\View\Element\AbstractBlock {
    protected function _toHtml() {
        return "<b>Hello world from block!</b>";
    }
} 