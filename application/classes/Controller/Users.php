<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Users extends Controller_Template { /* Controller_Template é uma classe do Kohana */

	public $template = 'templateLogin';

	public function action_index() {

        $this->template->content= View::Factory('templateLogin');

	}
	
	public function action_login() {			
	       		 
	 /*
	 	if (Auth::instance()->logged_in()) 	{   
		          $this->redirect(Route::get('home')->uri(
				 		array(
							 'controller' => 'perspectivas',
							 'action' => 'index',
							)
						));
		                return false;            
		}
 	 */

	   $errors = array();    
       try {
       			$post = $this->request->post();
				if(HTTP_Request::POST == $this->request->method()){
					$success=Auth::instance()->login($post['username'], $post['password']);
						if($success) {
									$this->redirect(Route::get('home')->uri(
										array(
											'controller' => 'perspectivas',
											'action' => 'index',
										)
									));
						} 
				} 
		} catch (ORM_Validation_Exception $e){
            $errors = $e->errors('forms');
         }
         var_dump($errors);

         $this->template->content= View::Factory('templateLogin')
         										->set('errors', $errors);    	
	}
	
	public function action_logout(){              
       
        if(Auth::instance()->logged_in()) {
              
              $this->redirect(Route::get('logout')->uri(
							array(
								'controller' => 'users',
								'action' => 'index',
							)
				));
            return false;
        } 
    } 

} // End Welcome


