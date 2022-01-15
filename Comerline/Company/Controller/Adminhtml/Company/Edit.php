<?php
/**
 * Comerline_Company Module
 *
 * @category    Comerline
 * @package     Comerline_Company
 * @author      Comerline
 *
 */
namespace Comerline\Company\Controller\Adminhtml\Company;

use Magento\Backend\Model\View\Result\Page;
use Magento\Backend\Model\View\Result\Redirect;
use Comerline\Company\Controller\Adminhtml\Company as CompanyAction;

class Edit extends CompanyAction
{
    /**
     * Edit/Add A Company Page
     *
     * @return Page|Redirect
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();
        $companyDatas = $this->getRequest()->getParam('company');
        if (is_array($companyDatas)) {
            $companyModel = $this->companyModel;
            $companyModel->setData($companyDatas);
            $this->companyResource->save($companyModel);
            $this->messageManager->addSuccess(__('Company saved successfully'));
            $resultRedirect = $this->resultRedirectFactory->create();
            return $resultRedirect->setPath('*/*/index');
        }
    }
}
