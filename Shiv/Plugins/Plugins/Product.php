<?php   

namespace Shiv\Plugins\Plugins;

class Product
{
	
	public function aftergetName(\Magento\Catalog\Model\Product $product, $name)
	{
		$price = $product->getData( key: 'price');
		if($price < 10)
		{
		   
         $name .= "PLUGIN ONE";		   
			
			
		}
		else
			
			{
				$name .= "PLUGIN TWO";
				
			}
		return $name;
		
	}
	
}

