<?php

namespace I95Dev\Mvvm\ViewModel;

class Custom implements \Magento\Framework\View\Element\Block\ArgumentInterface
{

    public function __construct(
       
    ) {
    }

    public function getSomething() {
        return "Hello Magento Stackexchange";
    }
}

