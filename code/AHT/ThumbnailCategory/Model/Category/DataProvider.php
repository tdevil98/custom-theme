<?php
namespace AHT\ThumbnailCategory\Model\Category;
 
use Magento\Catalog\Model\Category\DataProvider as CategoryDataProvider;
 
class DataProvider extends CategoryDataProvider
{
    /**
     * @return array
     */
    protected function getFieldsMap()
    {
        $fields = parent::getFieldsMap();
        $fields['content'][] = 'thumbnail_image';
 
        return $fields;
    }
}