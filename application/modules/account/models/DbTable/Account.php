<?php
/**
 * Class Account_Model_DbTable_Account
 *
 * @category TheiaLive
 * @package Account
 */
class Account_Model_DbTable_Account extends Zend_Db_Table_Abstract
{
    protected $_name = 'account';
    protected $_primary = 'accountId';
}
