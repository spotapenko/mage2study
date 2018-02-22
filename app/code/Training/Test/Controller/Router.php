<?php
/**
 * Created by PhpStorm.
 * User: sfdev
 * Date: 22.02.18
 * Time: 10:39
 */

namespace Training\Test\Controller;


class Router implements \Magento\Framework\App\RouterInterface
{
    public function __construct(
        \Magento\Framework\App\ActionFactory $actionFactory,
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->actionFactory = $actionFactory;
        $this->_logger = $logger;

    }

    public function match(\Magento\Framework\App\RequestInterface $request) {
        $info = $request->getPathInfo();

        if (preg_match("%^/(.*?)-(.*?)-(.*?)$%", $info, $m)) {
            $this->_logger->addDebug("Router for :".$info." redirect to ".sprintf("/%s/%s/%s", $m[1], $m[2], $m[3]));
            $request->setPathInfo(sprintf("/%s/%s/%s", $m[1], $m[2], $m[3]));
            return $this->actionFactory->create('Magento\Framework\App\Action\Forward',
                ['request' => $request]);
        }
        return null;
    }
}