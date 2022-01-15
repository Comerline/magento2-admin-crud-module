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


use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class SaveButton
 */
class SaveButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * @return array
     */
    public function getButtonData()
    {
        $data = [];
        $company = $this->getCompany();
        $companyId = null;
        if ($company) {
            $companyId = $company->getId();
        }
        if (($companyId && $company->canBeEdited()) || !$this->getId()) {
            $data = [
                'label' => __('Save'),
                'class' => 'save primary',
                'data_attribute' => [
                    'mage-init' => ['button' => ['event' => 'save']],
                    'form-role' => 'save',
                ],
                'sort_order' => 90,
            ];
        }
        return $data;
    }
}
