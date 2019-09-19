<?php 

class About extends Controller{

	public function index($nama = "Dimas",$umur = "22",$pekerjaan="programmer"){
		$data['nama'] = $nama;
		$data['umur'] = $umur;
		$data['pekerjaan'] = $pekerjaan;
		$data['title'] = 'About Page';

		$this->view('templates/header',$data);
		$this->view('about/index',$data);
		$this->view('templates/footer');
	}
	public function page(){
		$data['title'] = 'Second Page';
		$this->view('templates/header',$data);
		$this->view('about/page');
		$this->view('templates/footer');
	}


}