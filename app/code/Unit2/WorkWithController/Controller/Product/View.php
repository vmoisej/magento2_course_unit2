<?php

namespace Unit2\WorkWithController\Controller\Product;

class View extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        echo "ONE";
        exit;
    }

    public function beforeExecute()
    {
        echo "BEFORE <br/>";
    }

    public function afterExecute(\Magento\Catalog\Controller\Product\View $controller, $result)
    {
        echo "AFTER"; exit;
    }

}