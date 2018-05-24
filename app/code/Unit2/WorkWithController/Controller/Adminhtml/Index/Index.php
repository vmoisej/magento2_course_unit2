<?php

namespace Unit2\WorkWithController\Controller\Adminhtml\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        if ($this->_isAllowed()) {
            //$this->getResponse()->appendBody("HELLO ADMIN WORLD");
            $this->_redirect('catalog/category/edit/id/3');
        } else {
            $this->getResponse()->appendBody("You have not access to this route.");
        }
    }

    protected function _isAllowed()
    {
        $secret = $this->getRequest()->getParam('secret');
        return isset($secret) && (int)$secret == 1;
    }
}
