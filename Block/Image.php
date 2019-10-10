<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace NewgenPayments\Allekoffers\Block;

use Magento\Catalog\Model\Product;

class Image extends \Magento\Framework\View\Element\Template
{
    const CATEGORY_BANNER_ATTRIBUTE = 'category_banner';

    /**
     * @var Product
     */
    protected $_category = null;

    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry = null;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\Registry $registry,
        array $data = []
    )
    {
        $this->_coreRegistry = $registry;
        $this->storeManager = $storeManager;
        parent::__construct($context, $data);
    }

    /**
     * Retrieve current category model object
     *
     * @return \Magento\Catalog\Model\Category
     */
    public function getCurrentCategory()
    {
        if (!$this->_category) {
            $this->_category = $this->_coreRegistry->registry('current_category');

            if (!$this->_category) {
                throw new \Magento\Framework\Exception\LocalizedException(__('Category object could not be found in core registry'));
            }
        }
        
        return $this->_category;
    }

    public function getBannerUrl()
    {   
        $image = $this->getCurrentCategory()->getData(self::CATEGORY_BANNER_ATTRIBUTE);
        $mediaUrl = $this->storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
        $categoryBanner = $mediaUrl . 'catalog/category/' . $image;

        return $categoryBanner;
    }

}
