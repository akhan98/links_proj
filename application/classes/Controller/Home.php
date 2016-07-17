<?php defined('SYSPATH') or die('No direct script access.');

Class Controller_Home extends Controller
{
    public function action_index()
    {
		$model = Model::factory('Home');
		
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$model->add_link($this->request->post('title'), $this->request->post('link'));
			
			$this->redirect('home');
		}
		
        $view = View::factory('home');
		
		$view->links = $model->get_links(); 
		
		$this->response->body($view);
    }
	
	public function action_delete()
	{
		$id = $this->request->param('id'); 
		$model = Model::factory('Home');
		
		$model->delete_link($id).$id;
		
		$this->redirect('home');
	}
}