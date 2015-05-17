<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Users extends Controller_Template { /* Controller_Template é uma classe do Kohana */

	public $template = 'templateLogin';

	public function action_index() {

        $this->template->content= View::Factory('templateLogin');

	}
	
	public function action_login() {			
		
		if($this->is_logged){        		                      
                $this->redirect(Route::get('home')->uri(
							array(
								'controller' => 'perspectivas',
								'action' => 'index',
							)
				));
                return false;            
        }

		$post = $this->request->post();
		if(HTTP_Request::POST == $this->request->method()){

			$success=Auth::instance()->login($post['username'], $post['password']);

			if($success) {
				#var_dump(Route::get('home')->uri());
						$this->redirect(Route::get('home')->uri(
							array(
								'controller' => 'perspectivas',
								'action' => 'index',
							)
						));
				} 
					  	else {
				echo "O login falhou :/ ";
		  	}
		}
	} 


		//FAZER LOGOUT ...
	  public function action_logout(){        
        $success=true;
        if($this->is_logged){
            $success = Auth::instance()->logout(TRUE);                       
        }
        if($success){
            $this->redirect(Route::logout());
            return false;
        }
        // TODO  tratar quando o logout não é realizado com sucesso, redirecionar logout para a mesma página do usuário
    }
	
} // End Welcome


