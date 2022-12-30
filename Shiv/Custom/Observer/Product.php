<?php   

namespace Shiv\Custom\Observer\Product;

use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\ResourceModel\Product\Collection;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class Product implements ObserverInterface
{
	
	public function execute(Observer $observer)
	{
       $collection = $observer->getEvent()->getData( key: 'collection');
	   foreach($collection as $product)
	   {
		$price = $product->getData('price');   
		$name = $product->getData('name');   
		
				if($price < 10)
		{
		   
         $name .= "TEST ONE";		   
		 	
			
		}
		else
			
			{
				$name .= "FALSE";
				
			}
		$product->setData('name', $name);
		
	
		   
	   }
	   
}
}
