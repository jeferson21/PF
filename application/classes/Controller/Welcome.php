
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template { /* Controller_Template é uma classe do Kohana */

	public $template = 'templateWelcome';

	public function action_index() {
        $this->template->content= 'Descrição do Sistema';
	}
    
    

} // End Welcome