<?php
namespace Shiv\EventsObservers\Observer\Product;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class Data implements ObserverInterface
{
    /**
     *
     * @param Observer $observer
     *
     */

    public function execute(Observer $observer)
    {
        $product = $observer->getProduct();
        $originalName = $product->getName();
        $modifiedName = 'This product name: ' . $originalName;
        $product->setName($modifiedName);
    }
}