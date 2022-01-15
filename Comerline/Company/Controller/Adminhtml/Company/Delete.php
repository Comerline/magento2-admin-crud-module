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


use Comerline\Company\Controller\Adminhtml\Company;
use Magento\Backend\Model\View\Result\Redirect;
use Magento\Framework\Controller\ResultInterface;

class Delete extends Company
{
    /**
     * {@inheritdoc}
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Comerline_Company::index_delete');
    }

    /**
     * Delete action
     *
     * @return ResultInterface
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        /** @var Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            try {
                $model = $this->companyModel;
                $this->companyResource->load($model, $id);
                $this->companyResource->delete($model);
                $this->messageManager->addSuccess(__('Company deleted'));
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
                return $resultRedirect->setPath('*/*/edit', ['id' => $id]);
            }
        }
        $this->messageManager->addError(__('Company does not exist'));
        return $resultRedirect->setPath('*/*/');
    }
}
