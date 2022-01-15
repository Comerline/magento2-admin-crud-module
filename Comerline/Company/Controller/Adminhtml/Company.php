<?php
/**
 * Comerline_Company Module
 *
 * @category    Comerline
 * @package     Comerline_Company
 * @author      Comerline
 *
 */
namespace Comerline\Company\Controller\Adminhtml;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Comerline\Company\Model\Company as CompanyModel;
use Comerline\Company\Model\ResourceModel\Company as CompanyResource;

abstract class Company extends Action
{
    protected CompanyModel $companyModel;
    protected CompanyResource $companyResource;

    public function __construct(
        Context         $context,
        CompanyModel    $companyModel,
        CompanyResource $companyResource
    )
    {
        $this->companyModel = $companyModel;
        $this->companyResource = $companyResource;
        parent::__construct($context);
    }
}
