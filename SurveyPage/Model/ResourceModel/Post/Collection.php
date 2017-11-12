<?php
namespace Survey\SurveyPage\Model\ResourceModel\Post;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Survey\SurveyPage\Model\Post', 'Survey\SurveyPage\Model\ResourceModel\Post');
    }
}