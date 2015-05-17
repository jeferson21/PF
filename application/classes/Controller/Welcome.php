<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template { /* Controller_Template é uma classe do Kohana */

	public $template = 'templateWelcome';

	public function action_index() {
        $this->template->content= View::Factory('templateWelcome');
	}
	
	
	/*	public function action_login() {
			$usuario = ORM::Factory('usuario');
			$usuario->username="admin";
			$usuario->password="admin";
			$usuario->save();

			if(Auth::instance()->login("admin", "admin")) {
					$this->redirect(route::home());
			} else {
				  echo "O login falhou :/ ";
			}
		}
	*/ 

} // End Welcome


