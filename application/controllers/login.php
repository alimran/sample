<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data = ['message'=>'', 'page_title'=> 'Login'];
		
		if(count($this->input->post()) <= 0)
		{
			$this->parser->parse('login/index', $data);
		}
		else
		{
			$usr['username'] = $this->input->post('username');
			$usr['password'] = $this->input->post('password');

			$this->load->model('usermodel');
			$user = $this->usermodel->verify($usr);
			if($user)
			{
				$this->session->loggedUser = $user;
				redirect('/home');
			}
			else
			{
				$data['message'] = '<div class="alert alert-danger"><strong>Oops!</strong> Invalid username or password</div>';
				$this->parser->parse('login/index', $data);
			}

			//
		}
		
	}
}
