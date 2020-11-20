<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Research extends CI_Controller {
	public function view($page = 'review-reseach-proposal'){
		$page = 'create-reseach-proposal';
		if(!file_exists(APPPATH.'views/admin/research/'.$page.'.php')){
			show_404();
		}

		if ($page = 'review-reseach-proposal') {
			$data['title'] = 'University of Antique';
			$data['page_title'] = 'Create Research Proposal';
		}

		$this->load->view('templates/header', $data);
		$this->load->view('admin/research/'.$page, $data);
		$this->load->view('templates/footer');
	}

	public function review_reseach_proposal() {
		$page = 'create-reseach-proposal';
		if(!file_exists(APPPATH.'views/admin/research/'.$page.'.php')){
			show_404();
		}

		if ($page = 'review-reseach-proposal') {
			$data['title'] = 'University of Antique';
			$data['page_title'] = 'Create Research Proposal';
		}

		$this->load->view('templates/header', $data);
		$this->load->view('admin/research/'.$page, $data);
		$this->load->view('templates/footer');
	}
}
