<?php
/**
 * Comerline_Company Module
 *
 * @category    Comerline
 * @package     Comerline_Company
 * @author      Comerline
 *
 */

namespace Comerline\Company\Block\Adminhtml\Edit\Buttons;


use Magento\Backend\Block\Widget\Context;
use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class DeleteButton
 */
class DeleteButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * Get button data
     *
     * @return array
     */
    public function getButtonData()
    {
        $data = [];
        $id = $this->context->getRequest()->getParam('id');
        if ($id) {
            $data = [
                'label' => __('Delete'),
                'class' => 'delete',
                'on_click' => 'deleteConfirm(\'' . __(
                        'Are you sure you want to delete this company?'
                    ) . '\', \'' . $this->getDeleteUrl() . '\')',
                'sort_order' => 20,
            ];
        }
        return $data;
    }

    /**
     * @return string
     */
    public function getDeleteUrl()
    {
        $id = $this->context->getRequest()->getParam('id');
        return $this->getUrl('*/*/delete', ['id' => $id]);
    }
}
