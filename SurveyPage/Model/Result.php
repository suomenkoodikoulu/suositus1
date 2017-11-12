<?php

namespace Survey\SurveyPage\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Survey\SurveyPage\Api\Data\PostInterface;

/**
 * Class File
 * @package Toptal\Blog\Model
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Result extends AbstractModel implements ResultInterface, IdentityInterface
{
    /**
     * Cache tag
     */
    const CACHE_TAG = 'surveypage';

    /**
     * Post Initialization
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Survey\SurveyPage\Model\ResourceModel\Result');
    }

    //TODO: add implementations!
    
}