<?php   

namespace Shiv\Preferences\Model;

class Product extends \Magento\Catalog\Model\Product
{
	
	public function getName() 
	{
		
		$name = parent::getName();
		$price = $this->getData( key: 'price');
		if($price < 10)
		{
		   
         $name .= "TEST ONE Preference";		   
			
			
		}
		else
			
			{
				$name .= "TEST TWO !! preference";
				
			}
		return $name;
		
	}
	
}

