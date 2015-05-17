<?php defined('SYSPATH') or die('No direct access allowed.');

    class Model_Role extends ORM {

    protected $_table_name = 'roles';
 
    public function rules()
    {
        return array(
            'id' => array(array('numeric'),),
            'name' => array(array('not_empty'),array('min_length', array(':value', 3)),array('max_length', array(':value', 32)),array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),),
            'description' => array(array('not_empty'),array('min_length', array(':value', 1)),array('max_length', array(':value', 256)),),
        );
    }
 
    public function labels()
    {
        return array(
            'id' => __('ID'),
            'name' => __('Name'),
            'description' => __('Description'),
        );
    }
 
    public function get_rights_list()
    {
    	$rights_list = DB::query(Database::SELECT,'select `right` from role_rights where `role_id`='.$this->pk())->execute();
    	return array_keys($rights_list->as_array('right'));
    }
    public function update_rights_list($new_list)
    {
    	$insert_values = array();
    	foreach($new_list as $new_role)
    	{
    		if(in_array($new_role, array_keys(Kohana::$config->load('rights')->as_array())))
    		{
    			array_push($insert_values,"({$this->pk()},'{$new_role}')");
    		}
    		else
    		{
    			throw new HTTP_Exception_500(_('Trying to insert an unknown right: '.$new_role));
    		}
    	}
    	DB::query(Database::DELETE,'DELETE FROM role_rights WHERE `role_id`='.$this->pk())->execute();
    	if($insert_values)
    	{
	    	DB::query(Database::INSERT,'INSERT INTO role_rights (`role_id`,`right`) VALUES ' . implode(',',$insert_values))->execute();
    	}
    	return $new_list;
    }
    
}