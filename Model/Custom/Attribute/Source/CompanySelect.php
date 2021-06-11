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
            ['lable' => __('Select option ...'), 'value' => '0'],
            ['lable' => __('CBD Manufacturer'), 'value' => '1'],
            ['lable' => __('CBD Brand and Marketing company'), 'value' => '2'],
            ['lable' => __('CBD Extractor'), 'value' => '3'],
            ['lable' => __('Other'), 'value' => '4']
        ];
        return $this->_options;
    }
}
