<?php

namespace Survey\SurveyPage\Setup;

use \Magento\Framework\Setup\InstallSchemaInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\SchemaSetupInterface;
use \Magento\Framework\DB\Ddl\Table;

/**
 * Class InstallSchema
 *
 * @package Toptal\Blog\Setup
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * Install Blog Posts table
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $tableName = $setup->getTable('surveypage');

        if ($setup->getConnection()->isTableExists($tableName) != true) {
            $table = $setup->getConnection()
                ->newTable($tableName)
                ->addColumn(
                    'etunimi',
                    Table::TYPE_TEXT,
                    null,
                    [
                        'nullable' => false,
                    ],
                    'Etunimi'
                )
                ->addColumn(
                    'sukunimi',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false],
                    'Sukunimi'
                )
                ->addColumn(
                    'email',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false],
                    'Email'
                )
                ->addColumn(
                    'avaruus',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false],
                    'Avaruus'
                )
                ->addColumn(
                    'tuote',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false],
                    'Tuote'
                )
                ->setComment('Kyselyvastaukset');
            $setup->getConnection()->createTable($table);
        }

        $setup->endSetup();
    }
}