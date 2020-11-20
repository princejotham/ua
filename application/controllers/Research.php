<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Research extends CI_Controller {
	public function view(){
		$page = 'create-reseach-proposal';
		if(!file_exists(APPPATH.'views/admin/research/'.$page.'.php')){
			show_404();
		}

		$data['title'] = 'University of Antique';
		$data['page_title'] = ucfirst($page);

		$this->load->view('templates/header', $data);
		$this->load->view('admin/'.$page, $data);
		$this->load->view('templates/footer');
	}
}
