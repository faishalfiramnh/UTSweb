<?php 
Class Buku Extends CI_Controller
{

var $API="";
	 function __construct()
	{  parent::__construct();
	   $this->API="http://localhost/UTSServer/index.php";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
     }

     function index()
     {
     	$data['datapeminjam'] = json_decode($this->curl->simple_get($this->API.'/Peminjam'));
     	$this->load->view('Listpeminjam',$data);
     	$data['databuku'] = json_decode($this->curl->simple_get($this->API.'/Buku'));
     	$this->load->view('ListBuku',$data);
        $data['datapeminjaman'] = json_decode($this->curl->simple_get($this->API.'/Peminjaman'));
        $this->load->view('ListPeminjaman',$data);
    
     }
     function createBuku()
     {
        if(isset($_POST['submit'])){
            $data = array(
                'id_buku'       =>  $this->input->post('id_buku'),
                'judul'      =>  $this->input->post('judul'),
                'pengarang'=>  $this->input->post('pengarang'),
                'tahun_terbit'      =>  $this->input->post('tahun_terbit'));
            $insert =  $this->curl->simple_post($this->API.'/Buku', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('Buku');
        }else{
            $this->load->view('tambahBuku');
        }
    }
    function edit()
    {
        if(isset($_POST['submit'])){
            $data = array(
               'id_buku'       =>  $this->input->post('id_buku'),
                'judul'      =>  $this->input->post('judul'),
                'pengarang'=>  $this->input->post('pengarang'),
                'tahun_terbit'      =>  $this->input->post('tahun_terbit'));
            $update =  $this->curl->simple_put($this->API.'/Buku', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('Buku');
        }else{
            $params = array('id_buku'=>  $this->uri->segment(3));
            $data['databuku'] = json_decode($this->curl->simple_get($this->API.'/Buku',$params));
            $this->load->view('editBuku',$data);
        }
    }
    
    
    function deleteBuku($id_buku)
    {
        if(empty($id_buku)){
            redirect('Buku');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/Buku', array('id_buku'=>$id_buku), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('Buku');
        }
    }





}


 ?>