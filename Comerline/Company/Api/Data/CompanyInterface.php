<?php
/**
 * Comerline_Company Module
 *
 * @category    Comerline
 * @package     Comerline_Company
 * @author      Comerline
 *
 */

namespace Comerline\Company\Api\Data;

interface CompanyInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const ENTITY_ID = 'id';
    const COMERLINE_ID = 'comerline_id';
    const FISCAL_NAME = 'fiscal_name';
    const VAT_NUMBER = 'vat_number';

    public function getEntityId();

    public function setEntityId($entityId);

    public function getComerlineId();

    public function setComerlineId($comerlineId);

    public function getFiscalName();

    public function setFiscalName($fiscalName);

    public function getVatNumber();

    public function setVatNumber($vatNumber);

}
