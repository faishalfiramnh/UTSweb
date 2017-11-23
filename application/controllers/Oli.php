<?php 
Class Oli Extends CI_Controller
{

	var $API="";
	 function __construct()
	{  parent::__construct();
	   $this->API="http://localhost/Bengkel/index.php";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
     }

     function index()
     {
     	$data['dataoli'] = json_decode($this->curl->simple_get($this->API.'/Oli'));
     	$this->load->view('listOli',$data);
     }
     function create()
     {
        if(isset($_POST['submit'])){
            $data = array(
                'id'       =>  $this->input->post('id'),
                'nama_oli'      =>  $this->input->post('nama_oli'),
                'kekentalan'=>  $this->input->post('kekentalan'),
                'satuan_liter'      =>  $this->input->post('satuan_liter'));
            $insert =  $this->curl->simple_post($this->API.'/Oli', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('Bengkel');
        }else{
            $this->load->view('tambahOli');
        }
    }
    function edit()
    {
        if(isset($_POST['submit'])){
            $data = array(
               'id'       =>  $this->input->post('id'),
                'nama_oli'      =>  $this->input->post('nama_oli'),
                'kekentalan'=>  $this->input->post('kekentalan'),
                'satuan_liter'      =>  $this->input->post('satuan_liter'));
            $update =  $this->curl->simple_put($this->API.'/Oli', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('Bengkel');
        }else{
            $params = array('id'=>  $this->uri->segment(3));
            $data['dataoli'] = json_decode($this->curl->simple_get($this->API.'/Oli',$params));
            $this->load->view('EditOli',$data);
        }
    }
    
    // delete data kontak
    function delete($id)
    {
        if(empty($id)){
            redirect('Oli');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/Oli', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('Bengkel');
        }
    }



}
 ?>