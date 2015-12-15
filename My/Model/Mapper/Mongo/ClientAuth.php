<?php

class My_Model_Mapper_Mongo_Client extends My_Model_Mapper_Mongo_Authentcation_Abstract
{

    public function __construct()
    {
        $this->_key = "client_id";
        parent::__construct('client');
    }

    protected function _targetClass()
    {
        return 'My_Model_Factory_Domain_Client_Mongo';
    }
}
