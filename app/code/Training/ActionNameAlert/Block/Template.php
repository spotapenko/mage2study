<?php
/**
 * Created by PhpStorm.
 * User: sfdev
 * Date: 06.03.18
 * Time: 20:48
 */

namespace Training\ActionNameAlert\Block;

class Template extends \Magento\Framework\View\Element\Template {

    protected $request;

    public function __construct (
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\App\Request\Http $request,
        array $data = []
    ) {
        $this->request = $request;
        parent::__construct($context, $data);
    }

    public function getFullActionName()
    {
        return $this->request->getFullActionName();
    }
} 