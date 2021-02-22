<?php

namespace V4U\ViewModel\ViewModel;

class CategoryInfo implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
        protected $_registry;

         /**
          * @param \Magento\Framework\Registry $registry,
         */

            public function __construct(
                \Magento\Framework\Registry $registry
            ) {
                $this->_registry = $registry;
            }

    /**
     * Return catalog current category object
     * @return \Magento\Catalog\Model\Category
     */

    public function getCurrentCategoryOb()
    {
        return $this->_registry->registry('current_category');
    }  
}
