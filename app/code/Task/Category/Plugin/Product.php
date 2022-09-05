<?php

namespace Task\Category\Plugin;

class Product{

    public function afterGetName(
        \Magento\Catalog\Model\Product $subject,
        $result
    )
    {
        return "Medicines ".$result;
    }

}
