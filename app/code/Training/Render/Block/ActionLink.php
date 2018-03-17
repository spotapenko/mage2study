<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Training\Render\Block;

use \Magento\Framework\View\Element\Template\Context;
use Magento\Framework\UrlInterface;


class ActionLink extends \Magento\Framework\View\Element\Html\Link
{

    const ROUTE_ACTION = 'training_render/layout/onepage';

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Framework\UrlInterface $urlBuilder
     */
    public function __construct(
        Context $context,
        UrlInterface $urlBuilder
    ) {
        $this->urlBuilder = $urlBuilder;
        parent::__construct($context);
    }

    /**
     * @return string
     */
    public function getHref()
    {
        return $this->urlBuilder->getUrl(static::ROUTE_ACTION);
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return __('Rendering Action');
    }
}
