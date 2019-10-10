<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

 namespace NewgenPayments\Allekoffers\Model\Category;
 
class DataProvider extends \Magento\Catalog\Model\Category\DataProvider
{

	protected function getFieldsMap()
	{
		$fields = parent::getFieldsMap();
		$fields['content'][] = \NewgenPayments\Allekoffers\Block\Image::CATEGORY_BANNER_ATTRIBUTE;

		return $fields;
	}
}	