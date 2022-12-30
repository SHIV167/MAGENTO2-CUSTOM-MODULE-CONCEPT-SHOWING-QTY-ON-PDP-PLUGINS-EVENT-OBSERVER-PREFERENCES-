<?php 

namespace Shiv\Custom\Block;


use Magento\CatalogInventory\Api\StockRegistryInterface;
use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;


class StockLeft extends Template

{
	
	private $registry;
	
	
	private $stockRegistry;
	
	
	
	public function __construct(
	Template\Context $context,
	Registry $registry,
	StockRegistryInterface $stockRegistry,
	array $data = []
	
	)
	{
		parent::__construct($context, $data);
	    $this->registry = $registry;
	    $this->stockRegistry = $stockRegistry;
	}
	
	
	
	public function getRemainingQty()
	
	{
		// 1. Fetch the Product model
		// 2. Get the Quantity from the product model
		// 3. Return it Here
		
		//return 10;
		$product = $this->getCurrentProduct();
		$stock = $this->stockRegistry->getStockItem($product->getId());
		return $stock->getQty();
		
	}
	
	
	
	protected function getCurrentProduct()
	{
		return $this->registry->registry( key: 'product');
		
	}
}

