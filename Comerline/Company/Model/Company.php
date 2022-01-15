<?php

/**
 * Comerline_Company Module
 *
 * @category    Comerline
 * @package     Comerline_Company
 * @author      Comerline
 *
 */

namespace Comerline\Company\Model;

use Comerline\Company\Api\Data\CompanyInterface;
use Magento\Framework\Model\AbstractModel;

class Company extends AbstractModel implements CompanyInterface
{
    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'comerline_company';

    /**
     * @var string
     */
    protected $_cacheTag = 'comerline_company';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'comerline_company';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Comerline\Company\Model\ResourceModel\Company');
    }

    public function getEntityId()
    {
        return $this->getData(self::ENTITY_ID);
    }

    public function setEntityId($entityId)
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    public function getComerlineId()
    {
        return $this->getData(self::COMERLINE_ID);
    }

    public function setComerlineId($comerlineId)
    {
        return $this->setData(self::COMERLINE_ID, $comerlineId);
    }

    public function getFiscalName()
    {
        return $this->getData(self::FISCAL_NAME);
    }

    public function setFiscalName($fiscalName)
    {
        return $this->setData(self::FISCAL_NAME, $fiscalName);
    }

    public function getVatNumber()
    {
        return $this->getData(self::VAT_NUMBER);
    }

    public function setVatNumber($vatNumber)
    {
        return $this->setData(self::VAT_NUMBER, $vatNumber);
    }

}
