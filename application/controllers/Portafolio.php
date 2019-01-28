<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portafolio extends CI_Controller {

	public function index() {
		$this->view('index');
	}

	public function home() {
		$this->view('index');
	}

  public function about() {
    $this->view('about');
  }

  public function contact() {
    //$this->view('contact');
  }

	public function project($page="") {
			switch ($page) {
				case "luxia":
				case "bestway":
				case "crucigramas":
				case "qnq":
				case "physical":
				case "networking":
					$this->view($page,'project/');
					break;

				default:
					redirect();
					break;
			}
	}

  private function view($viewname, $subfolder=""){
    $data['title'] = "Cñ.";
    $data['viewname'] = $viewname;
    $data['navigationpane'] = $this->load->view('pages/elements/navigation',$data,true);
		$data['intropane'] = $this->load->view('pages/elements/intro',$data,true);
		$data['workpane'] = $this->load->view('pages/elements/works',$data,true);
		$data['sharepane'] = $this->load->view('pages/elements/share',$data,true);
    $this->load->view('pages/elements/header',$data);
    $this->load->view('pages/'.$subfolder.$viewname);
    $this->load->view('pages/elements/footer',$data);
  }
}
