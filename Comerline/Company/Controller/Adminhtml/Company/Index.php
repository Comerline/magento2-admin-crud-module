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

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    /**
     * @var PageFactory
     */
    protected $_resultPageFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context        $context,
        PageFactory $resultPageFactory
    )
    {
        parent::__construct($context);
        $this->_resultPageFactory = $resultPageFactory;
    }

    /**
     * Company List page.
     *
     * @return Page
     */
    public function execute()
    {
        /** @var Page $resultPage */
        $resultPage = $this->_resultPageFactory->create();
        $resultPage->setActiveMenu('Comerline_Company::company_list');
        $resultPage->getConfig()->getTitle()->prepend(__('Company List'));

        return $resultPage;
    }

    /**
     * Check Company List Permission.
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Comerline_Company::company_list');
    }
}
