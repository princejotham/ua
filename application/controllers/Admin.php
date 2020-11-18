<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function view($page = 'dashboard'){
		if(!file_exists(APPPATH.'views/admin/'.$page.'.php')){
			show_404();
		}

		$data['title'] = 'University of Antique';
		$data['page_title'] = ucfirst($page);

		$this->load->view('templates/header', $data);
		$this->load->view('admin/'.$page, $data);
		$this->load->view('templates/footer');
	}
}
