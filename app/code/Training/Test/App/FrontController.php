<?php
/**
 * Created by PhpStorm.
 * User: sfdev
 * Date: 22.02.18
 * Time: 8:22
 */

namespace Training\Test\App;


class FrontController extends \Magento\Framework\App\FrontController
{
    /**
     * @var \Magento\Framework\App\RouterList
     */
    protected $routerList;
    /**
     * @var \Magento\Framework\App\Response\Http
     */
    protected $response;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;
    /**
     * @param \Magento\Framework\App\RouterList $routerList
     * @param \Magento\Framework\App\Response\Http $response
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(
        \Magento\Framework\App\RouterList $routerList,
        \Magento\Framework\App\Response\Http $response,
        \Psr\Log\LoggerInterface $logger)
    {
        $this->_routerList = $routerList;
        $this->response = $response;
        $this->logger = $logger;
    }

    /**
     * Perform action and generate response
     *
     * @param RequestInterface $request
     * @return ResponseInterface|\Magento\Framework\Controller\ResultInterface
     * @throws \LogicException
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        /** @var \Magento\Framework\App\RouterInterface $router */
        foreach ($this->_routerList as $router) {
            $this->logger->addDebug(get_class($router));
        }
        return parent::dispatch($request);
    }
}