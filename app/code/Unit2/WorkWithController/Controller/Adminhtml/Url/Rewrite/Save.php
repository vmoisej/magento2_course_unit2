<?php

namespace Unit2\WorkWithController\Controller\Adminhtml\Url\Rewrite;

class Save extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        exit;
    }

    /**
     * Task 6
     *
     * Maybe it is wrong but on this moment idea is next
     */
    public function afterExecute(\Magento\UrlRewrite\Controller\Adminhtml\Url\Rewrite\Save $controller, $result)
    {
        echo "AFTER SAVE URL REWRITE";

        $requestPath ='testpage.html';
        $targetPath = 'test/action/index';
        $redirectType = 0;
        $storeId = 1;
        $isAutogenerated=0;

        // Next is comming wrong code:
        $model = $this->getUrlRewriteModel();   // some way we need to get UrlRewrite model;

        $model->setEntityType('custom')     // set values
            ->setRequestPath($requestPath)
            ->setTargetPath($targetPath)
            ->setRedirectType($redirectType)
            ->setStoreId($storeId)
            ->setIsAutogenerated($isAutogenerated);

        $model->save();                     // save values

        return;

    }
}