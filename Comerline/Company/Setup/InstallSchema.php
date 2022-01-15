<?php
/**
 * Comerline_Company Module
 *
 * @category    Comerline
 * @package     Comerline_Company
 * @author      Comerline
 *
 */
namespace Comerline\Company\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    public function install(
        SchemaSetupInterface   $setup,
        ModuleContextInterface $context
    )
    {
        $installer = $setup;

        $installer->startSetup();

        /*
         * Create table 'comerline_company'
         */

        $table = $installer->getConnection()->newTable(
            $installer->getTable('comerline_company')
        )->addColumn(
            'id',
            Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'nullable' => false, 'primary' => true],
            'Record Id'
        )->addColumn(
            'comerline_id',
            Table::TYPE_INTEGER,
            null,
            [],
            'Comerline id'
        )->addColumn(
            'fiscal_name',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Fiscal name'
        )->addColumn(
            'vat_number',
            Table::TYPE_TEXT,
            30,
            ['nullable' => false],
            'Vat number'
        )->setComment(
            'Comerline Company table'
        );

        $installer->getConnection()->createTable($table);
        $installer->endSetup();
    }
}

