<?php

namespace Task\Category\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{

    protected $storeManager;

    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Catalog\Model\CategoryFactory $categoryFactory
    ) {
        $this->storeManager = $storeManager;
        $this->categoryFactory = $categoryFactory;
    }

    /**
     * Installs data for a module
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $this->createCategory();
    }

    public function createCategory()
    {
        // Setting the Category Name
        $categoryName = 'Medicines';

        $parentId = $this->storeManager->getStore()->getRootCategoryId();
        $parentCategory = $this->categoryFactory->create()->load($parentId);

        $category = $this->categoryFactory->create();

        //Getting the category if the category is already exits
        $getcat = $category->getCollection()
            ->addAttributeToFilter('name', $categoryName)
            ->getFirstItem();

        //Checking wheather the category is already exits or not
        //If its not exists adding it
        if (!$getcat->getId()) {
            $category->setPath($parentCategory->getPath())
                ->setParentId($parentId)
                ->setName($categoryName)
                ->setIsActive(true);
            $category->save();
        }
        
    }
}
