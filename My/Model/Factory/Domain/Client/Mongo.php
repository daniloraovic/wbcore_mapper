<?php
class My_Model_Factory_Domain_Client_Mongo extends My_Model_Factory_Domain
{
	public function createObject(array $data) {
		
		$obj = new My_Model_Domain_Client( $data['_id']->__toString() );

		unset($data['_id']);

		$obj->setData($data);
		
		return $obj;
	}
}
