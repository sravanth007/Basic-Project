<?php
 
namespace I95Dev\Pricechange\Plugin;
 
class Product
{
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        return $result + 188;
    }
}
?>
