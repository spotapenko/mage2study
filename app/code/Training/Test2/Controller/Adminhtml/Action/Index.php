<?php
/**
 * Created by PhpStorm.
 * User: sfdev
 * Date: 23.02.18
 * Time: 0:40
 */

namespace Training\Test2\Controller\Adminhtml\Action;


class Index extends \Magento\Backend\App\Action //\Magento\Framework\App\Action\Action //\Magento\Backend\App\Action
{
    /**
     * Test action index
     */
    public function execute() {
        $this->getResponse()->appendBody("HELLO WORLD ADMIN SECRET AREA");
    }
    /**
     * Check if admin has permissions to visit related pages
     *
     * @return bool
     */
    protected function _isAllowed() {
        $secret = $this->getRequest()->getParam('secret');
        return isset($secret) && (int)$secret==1;
    }

    //strange naming of core public function because it started with underscore means it is private (or protected)
    public function _processUrlKeys()
    {
        $_isValidFormKey = true;
        $_isValidSecretKey = true;
        $_keyErrorMsg = '';
        if ($this->_auth->isLoggedIn()) {
            if ($this->getRequest()->isPost()) {
                $_isValidFormKey = $this->_formKeyValidator->validate($this->getRequest());
                $_keyErrorMsg = __('Invalid Form Key. Please refresh the page.');
            } else {
                //changed because we don't want to disable checking urls for other controllers
                $_isValidSecretKey = true;
            }
        }
        if (!$_isValidFormKey || !$_isValidSecretKey) {
            $this->_actionFlag->set('', self::FLAG_NO_DISPATCH, true);
            $this->_actionFlag->set('', self::FLAG_NO_POST_DISPATCH, true);
            if ($this->getRequest()->getQuery('isAjax', false) || $this->getRequest()->getQuery('ajax', false)) {
                $this->getResponse()->representJson(
                    $this->_objectManager->get(
                        \Magento\Framework\Json\Helper\Data::class
                    )->jsonEncode(
                            ['error' => true, 'message' => $_keyErrorMsg]
                        )
                );
            } else {
                $this->_redirect($this->_backendUrl->getStartupPageUrl());
            }
            return false;
        }
        return true;
    }

}