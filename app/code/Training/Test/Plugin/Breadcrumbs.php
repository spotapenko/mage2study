<?php
/**
 * Created by PhpStorm.
 * User: sfdev
 * Date: 21.02.18
 * Time: 23:45
 */

namespace Training\Test\Plugin;


class Breadcrumbs
{
    public function beforeAddCrumb(\Magento\Theme\Block\Html\Breadcrumbs $subject, $crumbName, $crumbInfo)
    {
        return [$crumbName."(!)", $crumbInfo];
    }
}