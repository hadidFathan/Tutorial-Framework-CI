<?php
defined('BASEPATH') OR exit('no direct script access allowed');
class Anggota extends CI_Controller {

	public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Anggota_Model');
	
	}

	public function index()
	{
		$data=
		[   
			'title' => 'Anggota',
			'sub_title' => 'Daftar Anggota',
			'content' => 'anggota/index',
			'show' => $this->Anggota_Model->index()->result()
		];
	$this->load->view('template/my_template', $data);	
	}
	/*fungsi add digunakan untuk memanggil data form buku*/
	public function add()
	{
		$data=
		[   
			'title' => 'Anggota',
			'sub_title' => 'Tambah Anggota',
			'content' => 'anggota/add',
			'show' => $this->Anggota_Model->index()->result()
		];
	$this->load->view('template/my_template', $data);	
	}
	/*fungsi create digunakan untuk menyimpan data ke dalam database melalui model*/
	public function create()
	{
	
		$nama_anggota = $this->input->post('nama_anggota');
		$gender = $this->input->post('gender');
		$no_telp = $this->input->post('no_telp');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		$data = array(
			'nama_anggota' => $nama_anggota,
			'gender' => $gender,
			'no_telp' => $no_telp,
			'alamat' => $alamat,
			'email' => $email,
			'password' => $password,
			
		);

		$create = $this->Anggota_Model->create($data);
		if($create){
			$this->session->set_flashdata('pesan_create', true);
			redirect('anggota');
		}else{
			$this->session->set_flashdata('pesan_create', false);
			redirect('anggota');
		}
}
public function edit($id)
{
	$data=
		[   
			'title' => 'Anggota',
			'sub_title' => 'Edit Anggota',
			'content' => 'anggota/edit',
			'show' => $this->Anggota_Model->edit($id)->row()
		];
	$this->load->view('template/my_template', $data);	
}
public function update()
	{
		$id_anggota =$this->input->post('id_anggota');
		$nama_anggota = $this->input->post('nama_anggota');
		$data = array(
			'nama_anggota' => $nama_anggota,
		);
	
	$update = $this->Anggota_Model->update($data, $id_anggota);
		if($update){
			$this->session->set_flashdata('pesan_create', true);
			redirect('anggota');
		}else{
			$this->session->set_flashdata('pesan_create', false);
			redirect('anggota');
		}
}	
	public function delete($id)
	{
		$delete = $this->Anggota_Model->delete($id);
		if($delete){
			redirect('anggota');
		}else{
			redirect('anggota');
	}
}
}
?>