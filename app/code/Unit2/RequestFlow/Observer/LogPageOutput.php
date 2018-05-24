<?php

namespace Unit2\RequestFlow\Observer;

use Magento\Framework\Event\ObserverInterface;

class LogPageOutput implements ObserverInterface
{
    protected $_logger;

    public function __construct(
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->_logger = $logger;
    }
    /**
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return $this
     *
     * @SuppressWarnings(PHPMD.UnusedLocalVariable)
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $response = $observer->getEvent()->getData('response');
        $body = $response->getBody();

        // It doesn't save in log
        //$this->_logger->addDebug("--------\n\n\n BODY \n\n\n ". $body);

        $this->_logger->notice("--------\n\n\n BODY \n\n\n ". $body);
    }
}
