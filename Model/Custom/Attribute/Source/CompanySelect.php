<?php
namespace AHT\AttributeCustomer\Model\Custom\Attribute\Source;

class CompanySelect extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    const CACHE_TAG = 'aht_attributecustomer_company_select';

    /**
     * Model cache tag for clear cache in after save and after delete
     *
     * @var string
     */
    protected $_cacheTag = self::CACHE_TAG;

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'company_select';

    public function getAllOptions()
    {
            $this->_options = [
                ['label' => __('Select option ...'), 'value' => ''],
                ['label' => __('CBD Manufacturer'), 'value' => 1],
                ['label' => __('CBD Brand and Marketing company'), 'value' => 2],
                ['label' => __('CBD Extractor'), 'value' => 3],
                ['label' => __('Other'), 'value' => 4]
            ];
        return $this->_options;
    }
}
