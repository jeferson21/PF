<?php defined('SYSPATH') or die('No direct access allowed.');
	
	class Model_UserToken extends ORM {

protected $_table_name = 'user_tokens';
    
	protected $_belongs_to = array(
	    'user' => array(
	        'model'       => 'User',
	        'foreign_key' => 'user_id',
	    ),
	);

 
    public function rules()
    {
        return array(
            'id' => array(array('numeric'),),
            'user_id' => array(array('numeric'),),
            'token' => array(array('not_empty'),array('min_length', array(':value', 10)),array('max_length', array(':value', 64)),),
            'ip' => array(array('not_empty'),array('min_length', array(':value', 1)),array('max_length', array(':value', 16)),),
            'os' => array(array('not_empty'),array('min_length', array(':value', 1)),array('max_length', array(':value', 64)),),
            'device_type' => array(array('not_empty'),array('min_length', array(':value', 1)),array('max_length', array(':value', 64)),),
            'device_id' => array(array('not_empty'),array('min_length', array(':value', 1)),array('max_length', array(':value', 64)),),
            'lang' => array(array('not_empty'),array('min_length', array(':value', 1)),array('max_length', array(':value', 16)),),
            'lat' => array(array('max_length', array(':value', 32)),),
            'lng' => array(array('max_length', array(':value', 32)),),
            'created' => array(array('not_empty'),array('date'),),
            'expires' => array(array('date'),),
        );
    }
 
    public function labels()
    {
        return array(
            'id' => __('ID'),
            'user_id' => __('User'),
            'token' => __('Token'),
            'ip' => __('IP'),
            'os' => __('OS'),
            'device_type' => __('Device Type'),
            'device_id' => __('Device ID'),
            'lang' => __('Lang'),
            'lat' => __('Lat'),
            'lng' => __('Lng'),
            'created' => __('Created'),
            'expires' => __('Expires'),
        );
    }

    public static function get_or_create($post)
    {
		$userToken = ORM::factory('UserToken')
					->where('device_id','=',$post['device_id'])
					->where('expires','is',null)->find();
					
		if( ! $userToken->loaded() )
		{
			$post['ip'] = isset($_SERVER['REMOTE_ADDR'])?$_SERVER['REMOTE_ADDR']:'-';
			$post['token'] = uniqid (rand(), TRUE );
			$post['created'] = date('Y-m-d H:i:s');
			$userToken->values($post);
			$userToken->save();
		}
		
		return $userToken;
    }
    
    public function login($username, $email, $password)
    {
    	if( ! $this->loaded())
    	{
    		throw new Exception('Trying to login using an invalid token');
    	}
    	
    	if($this->user_id != NULL)
    	{
    		throw new Exception('An user is already logged in');
    	}

    	$user = ORM::factory('User')->where('status','=','ACTIVE')->where('password','=',Model_User::crypt_pass($password));
    	
    	
    	if($username != NULL) $user = $user->where('username','=',$username);
    	if($email != NULL) $user = $user->where('email','=',$email);
    	$user = $user->find(); 
    		
    	if( ! $user->loaded())
    	{
			throw new Exception('Invalid user or password');
    	}
    	else
    	{
    		$user->last_login = date('Y-m-d H:i:s');
    		$user->logins = $user->logins + 1;
    		$user->save();
    	}
    	
    	$this->user_id = $user->id;
    	
    	return $this->save();
    }
    
    public function logout()
    {
    	if( ! $this->loaded())
    	{
    		throw new Exception('Trying to login using an invalid token');
    	}
    	if( ! $this->user->loaded())
    	{
    		throw new Exception('There is no user logged in');
    	}

    	$this->expires = date('Y-m-d H:i:s');
    	
    	return $this->save();
    }
}








	