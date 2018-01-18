<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madrid extends CI_Controller {

    public function __construct() 
    {
		parent::__construct(); 
	}   
    

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

//USER

	public function home()
	{
        $data['title'] = 'Home | Real Madrid';
        $this->load->view('template/header', $data);
        $this->load->view('user/home');
        $this->load->view('template/footer');
        
    }

    public function photo_gallery()
	{
        $data['title'] = 'Photo Gallery | Real Madrid';
        $this->load->view('template/header', $data);
        $this->load->view('user/photo_gallery');
        $this->load->view('template/footer');
        
    }

    public function squad()
	{
        $data['title'] = 'Squad | Real Madrid';
		$data['sql'] = $this->m_madrid->ambildata();
		$this->load->view('template/header', $data);
        $this->load->view('user/squad', $data);
        $this->load->view('template/footer');
        
    }

    public function about()
	{
        $data['title'] = 'About | Real Madrid';
        $this->load->view('template/header', $data);
        $this->load->view('user/about');
        $this->load->view('template/footer');
        
    }

//ADMIN

public function simpan()
	{
		$pil = $this->input->post('pil');
		$no = $this->input->post('no');
       	$nama = $this->input->post('nama'); 
       	$posisi = $this->input->post('posisi');
       	$kewarganegaraan = $this->input->post('kewarganegaraan');
        
       	$data = array(  
       		'no'=> $no,  
			'nama'=> $nama, 
			'posisi'=> $posisi, 
			'kewarganegaraan'=> $kewarganegaraan
			);
         
		if($pil == 'tambah')
		{
			$this->m_madrid->simpandata($data);     
		}else{
			$this->m_madrid->updatedata($no,$data);
		}
		
		redirect('Admin/pemainAdmin');
		         
	}

    }
