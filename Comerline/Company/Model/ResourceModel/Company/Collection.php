<?php
/**
 * Comerline_Company Module
 *
 * @category    Comerline
 * @package     Comerline_Company
 * @author      Comerline
 *
 */
namespace Comerline\Company\Model\ResourceModel\Company;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'id';

    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init('Comerline\Company\Model\Company', 'Comerline\Company\Model\ResourceModel\Company');
    }
}
