<?php
/**
 * Created by PhpStorm.
 * User: sfdev
 * Date: 21.02.18
 * Time: 23:45
 */

namespace Training\Test\Plugin\Block;


class Copyright
{
    public function aroundGetCopyright(\Magento\Theme\Block\Html\Footer $subject, callable $proceed)
    {
        return 'Customized copyright!';
    }
}